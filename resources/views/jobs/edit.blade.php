<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    <div class="grid gap-6 lg:grid-cols-[1fr_360px]">
        <form method="POST" action="/jobs/{{ $job->id }}" class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            @csrf
            @method('PATCH')

            <div class="border-b border-gray-200 pb-6">
                <p class="text-sm font-semibold uppercase tracking-wide text-laracasts">Update listing</p>
                <h2 class="mt-2 text-2xl font-bold text-gray-950">{{ $job->title }}</h2>
                <p class="mt-2 text-sm leading-6 text-gray-600">Change the title, salary, or details for this job listing.</p>
            </div>

            <div class="mt-6 grid max-w-xl grid-cols-1 gap-y-6">
                <x-form-field>
                    <x-form-label for="title">Title</x-form-label>

                    <x-form-input id="title" type="text" name="title" placeholder="Programmer" value="{{ $job->title }}" required />

                    <x-form-error name="title" />
                </x-form-field>

                <x-form-field>
                    <x-form-label for="salary">Salary</x-form-label>

                    <x-form-input id="salary" type="text" name="salary" placeholder="$50,000 Per Year" value="{{ $job->salary }}" required />

                    <x-form-error name="salary" />
                </x-form-field>

                <x-form-field>
                    <x-form-label for="details">Job Details</x-form-label>

                    <div class="mt-2">
                        <textarea id="details" name="details" rows="6" placeholder="Describe the role, responsibilities, and what kind of candidate you are looking for."
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('details', $job->details) }}</textarea>
                    </div>

                    <x-form-error name="details" />
                </x-form-field>
            </div>

            <div class="mt-8 flex items-center justify-between gap-x-6 border-t border-gray-200 pt-6">
                <button form="delete-form" class="cursor-pointer text-sm font-bold text-red-600 hover:text-red-700">
                    Delete
                </button>

                <div class="flex items-center gap-x-6">
                    <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-700 hover:text-gray-950">Cancel</a>
                    <x-form-button>Update</x-form-button>
                </div>
            </div>
        </form>

        <aside class="rounded-2xl border border-red-100 bg-red-50 p-6 shadow-sm">
            <p class="text-sm font-semibold uppercase tracking-wide text-red-600">Careful</p>
            <h3 class="mt-2 text-xl font-bold text-gray-950">Deleting is permanent.</h3>
            <p class="mt-3 text-sm leading-6 text-gray-700">
                Remove this job only when the role is closed or no longer available.
            </p>
        </aside>
    </div>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
