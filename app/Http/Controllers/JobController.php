<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Models\Job;
use App\Mail\JobPosted;


class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs/index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => 'required',
            'details' => ['nullable', 'string'],
        ]);

        $employer = request()->user()->employer()->firstOrCreate([], [
            'name' => trim(request()->user()->first_name . ' ' . request()->user()->last_name),
        ]);

        $job = $employer->jobs()->create([
            'title' => request('title'),
            'salary' => request('salary'),
            'details' => request('details'),
        ]);

        Mail::to($job->employer->user)->queue(
            new JobPosted($job)
        );

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        Gate::authorize('edit', $job);

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => 'required',
            'details' => ['nullable', 'string'],
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'details' => request('details'),
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        Gate::authorize('edit', $job);

        $job->delete();

        return redirect('/jobs');
    }

}
