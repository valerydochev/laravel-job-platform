<x-layout>
    <x-slot:heading>
        {{ $job->title }}
    </x-slot:heading>

    <div class="grid gap-6 lg:grid-cols-[1fr_360px]">
        <section class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <p class="text-sm font-semibold uppercase tracking-wide text-laracasts">
                {{ $job->employer->name }}
            </p>

            <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-950">
                {{ $job->title }}
            </h2>

            <p class="mt-4 text-base leading-7 text-gray-700">
                This listing is currently open and pays <span class="font-bold text-gray-950">{{ $job->salary }}</span> per year.
            </p>

            <div class="mt-6 border-t border-gray-200 pt-6">
                <h3 class="font-bold text-gray-950">Job Details</h3>
                <p class="mt-3 whitespace-pre-line text-sm leading-6 text-gray-700">{{ $job->details ?: 'No extra details have been added for this job yet.' }}</p>
            </div>

            <div class="mt-6 grid gap-4 border-t border-gray-200 pt-6 sm:grid-cols-2">
                <div class="rounded-xl bg-blue-50 p-4">
                    <p class="text-sm font-semibold text-blue-700">Employer</p>
                    <p class="mt-1 font-bold text-gray-950">{{ $job->employer->name }}</p>
                </div>

                <div class="rounded-xl bg-gray-50 p-4">
                    <p class="text-sm font-semibold text-gray-600">Salary</p>
                    <p class="mt-1 font-bold text-gray-950">{{ $job->salary }} / year</p>
                </div>
            </div>
        </section>

        <aside class="space-y-4">
            <div class="rounded-2xl border border-blue-100 bg-blue-50 p-6 shadow-sm">
                <p class="text-sm font-semibold uppercase tracking-wide text-laracasts">Salary</p>
                <p class="mt-2 text-2xl font-bold text-gray-950">{{ $job->salary }}</p>
                <p class="mt-2 text-sm leading-6 text-gray-700">Per year</p>
            </div>

            @can('edit', $job)
                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
                    <p class="font-bold text-gray-950">You own this listing</p>
                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        You can update or delete this job because it belongs to your account.
                    </p>

                    <div class="mt-5">
                        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
                    </div>
                </div>
            @endcan
        </aside>
    </div>

</x-layout>
