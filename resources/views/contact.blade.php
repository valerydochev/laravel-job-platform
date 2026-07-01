<x-layout>
    <x-slot:heading>
        Contact
    </x-slot:heading>

    <section class="rounded-lg border border-gray-200 bg-white px-6 py-10 shadow-sm">
        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-wide text-laracasts">Support center</p>

            <h2 class="mt-3 text-4xl font-bold tracking-tight text-gray-900">
                Need help with the job board?
            </h2>

            <p class="mt-4 text-lg leading-8 text-gray-600">
                Whether you are browsing roles or managing your own listings, this page gives you the fastest ways to
                understand where to go next.
            </p>
        </div>
    </section>

    <section class="mt-8 grid gap-4 md:grid-cols-3">
        <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
            <h3 class="font-bold text-gray-900">Email support</h3>
            <p class="mt-2 text-sm leading-6 text-gray-600">support@example.com</p>
        </div>

        <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
            <h3 class="font-bold text-gray-900">Response time</h3>
            <p class="mt-2 text-sm leading-6 text-gray-600">We usually reply within 24 hours on business days.</p>
        </div>

        <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
            <h3 class="font-bold text-gray-900">Account help</h3>
            <p class="mt-2 text-sm leading-6 text-gray-600">Login or register before creating and managing job posts.</p>
        </div>
    </section>

    <section class="mt-8 grid gap-4 md:grid-cols-2">
        <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-bold text-gray-900">For candidates</h3>
            <p class="mt-3 text-sm leading-6 text-gray-600">
                Browse jobs, review salary details, and open each listing to learn more about the role and employer.
            </p>
            <a href="/jobs" class="mt-5 inline-block text-sm font-bold text-laracasts hover:underline">Browse jobs</a>
        </div>

        <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
            <h3 class="text-lg font-bold text-gray-900">For employers</h3>
            <p class="mt-3 text-sm leading-6 text-gray-600">
                Create job posts, update your listings, and remove roles that are no longer available.
            </p>
            <a href="/jobs/create" class="mt-5 inline-block text-sm font-bold text-laracasts hover:underline">Create a job</a>
        </div>
    </section>

</x-layout>
