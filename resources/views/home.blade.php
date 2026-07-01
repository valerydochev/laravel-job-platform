<x-layout>

    <x-slot:heading>
        Find Your Next Job
    </x-slot:heading>

    <section class="overflow-hidden rounded-2xl border border-blue-100 bg-blue-50 shadow-sm">
        <div class="grid gap-8 px-6 py-10 lg:grid-cols-[1.15fr_0.85fr] lg:items-center lg:px-10">
            <div class="max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-wide text-laracasts">Job platform</p>

                <h2 class="mt-3 text-4xl font-bold tracking-tight text-gray-950 sm:text-5xl">
                    Find focused job listings without the noise.
                </h2>

                <p class="mt-5 text-lg leading-8 text-gray-700">
                    Browse clear roles, check salary details, and post your own openings when you are ready to hire.
                    Simple pages, useful information, and no clutter.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <x-button href="/jobs">Browse Jobs</x-button>
                    <a href="/contact" class="inline-flex items-center justify-center rounded-lg border border-blue-200 bg-white px-4 py-2 text-sm/6 font-semibold text-gray-700 shadow-sm hover:bg-blue-50">
                        Contact Us
                    </a>
                </div>
            </div>

            <div class="rounded-2xl border border-white/80 bg-white p-6 shadow-sm">
                <p class="text-sm font-bold text-laracasts">Featured example</p>
                <h3 class="mt-3 text-2xl font-bold text-gray-950">Laravel Developer</h3>
                <p class="mt-2 text-sm leading-6 text-gray-600">
                    Product team · Remote friendly · Clear salary range
                </p>

                <div class="mt-6 rounded-xl bg-gray-50 p-4">
                    <p class="text-sm font-semibold text-gray-500">Salary</p>
                    <p class="mt-1 text-2xl font-bold text-gray-950">$80,000 / year</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-8 grid gap-4 md:grid-cols-3">
        <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <div class="mb-4 h-2 w-12 rounded-full bg-laracasts"></div>
            <h3 class="font-bold text-gray-900">For candidates</h3>
            <p class="mt-2 text-sm leading-6 text-gray-600">
                Find jobs with clear titles, company names, and salary information.
            </p>
        </div>

        <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <div class="mb-4 h-2 w-12 rounded-full bg-emerald-500"></div>
            <h3 class="font-bold text-gray-900">For employers</h3>
            <p class="mt-2 text-sm leading-6 text-gray-600">
                Post new roles and manage the listings that belong to your account.
            </p>
        </div>

        <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <div class="mb-4 h-2 w-12 rounded-full bg-violet-500"></div>
            <h3 class="font-bold text-gray-900">Built with Laravel</h3>
            <p class="mt-2 text-sm leading-6 text-gray-600">
                A clean Laravel and Tailwind project with authentication and authorization.
            </p>
        </div>
    </section>

</x-layout>
