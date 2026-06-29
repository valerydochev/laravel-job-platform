<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <div class="-mx-4 -my-6 min-h-screen bg-gray-200 px-4 py-8 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="space-y-4">
            @foreach ($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}" class="block rounded-lg border border-gray-200 bg-white px-4 py-6">
                    <div class="text-sm font-bold text-blue-500">{{ $job->employer->name }}</div>
                    <div>
                        <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year.
                    </div>
                </a>
            @endforeach

            <div>
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
</x-layout>
