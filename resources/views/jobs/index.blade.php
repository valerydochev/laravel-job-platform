<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-6">
        <section class="rounded-2xl border border-blue-100 bg-blue-50 px-6 py-8 shadow-sm">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-wide text-laracasts">Open roles</p>
                    <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-950">
                        Browse the latest job listings.
                    </h2>
                    <p class="mt-2 text-gray-700">
                        Each listing includes the employer, role title, and salary details.
                    </p>
                </div>

                <x-button href="/jobs/create">Create Job</x-button>
            </div>
        </section>

        <div class="grid gap-4">
            @foreach ($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}"
                    class="block rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition hover:border-blue-200 hover:shadow-md">
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <div class="text-sm font-bold text-laracasts">{{ $job->employer->name }}</div>
                            <h3 class="mt-1 text-xl font-bold text-gray-950">{{ $job['title'] }}</h3>
                            <p class="mt-2 text-sm text-gray-600">Click to view details and manage this listing.</p>
                        </div>

                        <div class="w-fit rounded-full bg-blue-50 px-4 py-2 text-sm font-bold text-blue-700">
                            {{ $job['salary'] }} / year
                        </div>
                    </div>
                </a>
            @endforeach

            <div class="pt-2">
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
</x-layout>
