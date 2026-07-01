<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <div class="grid gap-6 lg:grid-cols-[1fr_360px]">
        <form method="POST" action="/register" class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            @csrf

            <div class="border-b border-gray-200 pb-6">
                <p class="text-sm font-semibold uppercase tracking-wide text-laracasts">New account</p>
                <h2 class="mt-2 text-2xl font-bold text-gray-950">Create your account</h2>
                <p class="mt-2 text-sm leading-6 text-gray-600">Register to create and manage your own job listings.</p>
            </div>

            <div class="mt-6 grid max-w-2xl grid-cols-1 gap-6 md:grid-cols-2">
                <x-form-field>
                    <x-form-label for="first_name">First Name</x-form-label>

                    <x-form-input id="first_name" name="first_name" required=""></x-form-input>

                    <x-form-error name="first_name" />
                </x-form-field>

                <x-form-field>
                    <x-form-label for="last_name">Last Name</x-form-label>

                    <x-form-input id="last_name" type="text" name="last_name" required />

                    <x-form-error name="last_name" />
                </x-form-field>

                <x-form-field class="md:col-span-2">
                    <x-form-label for="email">Email</x-form-label>

                    <x-form-input id="email" type="email" name="email" required />

                    <x-form-error name="email" />
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>

                    <div class="relative mt-2">
                        <input id="password" type="password" name="password" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 pr-11 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />

                        <button type="button" data-password-toggle="password" aria-label="Show password"
                            class="absolute inset-y-0 right-0 flex w-11 items-center justify-center text-gray-500 hover:text-gray-900">
                            <svg data-password-eye xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.8" stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12s3.75-6.75 9.75-6.75S21.75 12 21.75 12 18 18.75 12 18.75 2.25 12 2.25 12Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <svg data-password-eye-off xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="hidden h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3l18 18M10.58 10.58A2 2 0 0 0 12 14a2 2 0 0 0 1.42-.58M9.88 5.42A10.5 10.5 0 0 1 12 5.25C18 5.25 21.75 12 21.75 12a18.43 18.43 0 0 1-3.1 3.9M6.61 6.61C3.76 8.54 2.25 12 2.25 12S6 18.75 12 18.75a10.48 10.48 0 0 0 4.19-.85" />
                            </svg>
                        </button>
                    </div>

                    <x-form-error name="password" />
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password_confirmation">Confirm Password</x-form-label>

                    <div class="relative mt-2">
                        <input id="password_confirmation" type="password" name="password_confirmation" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 pr-11 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />

                        <button type="button" data-password-toggle="password_confirmation"
                            aria-label="Show password confirmation"
                            class="absolute inset-y-0 right-0 flex w-11 items-center justify-center text-gray-500 hover:text-gray-900">
                            <svg data-password-eye xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.8" stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12s3.75-6.75 9.75-6.75S21.75 12 21.75 12 18 18.75 12 18.75 2.25 12 2.25 12Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <svg data-password-eye-off xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="hidden h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3l18 18M10.58 10.58A2 2 0 0 0 12 14a2 2 0 0 0 1.42-.58M9.88 5.42A10.5 10.5 0 0 1 12 5.25C18 5.25 21.75 12 21.75 12a18.43 18.43 0 0 1-3.1 3.9M6.61 6.61C3.76 8.54 2.25 12 2.25 12S6 18.75 12 18.75a10.48 10.48 0 0 0 4.19-.85" />
                            </svg>
                        </button>
                    </div>

                    <x-form-error name="password_confirmation" />
                </x-form-field>
            </div>

            <div class="mt-8 flex items-center justify-end gap-x-6 border-t border-gray-200 pt-6">
                <a href="/" class="text-sm/6 font-semibold text-gray-700 hover:text-gray-950">Cancel</a>
                <x-form-button>Register</x-form-button>
            </div>
        </form>

        <aside class="rounded-2xl border border-blue-100 bg-blue-50 p-6 shadow-sm">
            <p class="text-sm font-semibold uppercase tracking-wide text-laracasts">Why register?</p>
            <h3 class="mt-2 text-xl font-bold text-gray-950">Your jobs stay connected to you.</h3>
            <p class="mt-3 text-sm leading-6 text-gray-700">
                Once registered, the jobs you create belong to your account, so you can edit and delete them later.
            </p>
        </aside>
    </div>


</x-layout>
