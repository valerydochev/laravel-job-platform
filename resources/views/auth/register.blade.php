<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register"
        class="-mx-4 -my-6 min-h-screen bg-gray-200 px-4 py-8 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="grid max-w-md grid-cols-1 gap-y-6">
                    <x-form-field>
                        <x-form-label for="first_name">First Name</x-form-label>

                        <x-form-input id="first_name" name="first_name" required=""></x-form-input>

                        <x-form-error name="first_name" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="last_name">Last Name</x-form-label>

                        <x-form-input id="last_name" type="text" name="last_name"  required />

                        <x-form-error name="last_name" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>

                        <x-form-input id="email" type="email" name="email"  required />

                        <x-form-error name="email" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>

                        <x-form-input id="password" type="password" name="password"  required />

                        <x-form-error name="password" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>

                        <x-form-input id="password_confirmation" type="password_confirmation" name="password_confirmation"  required />

                        <x-form-error name="password_confirmation" />
                    </x-form-field>
                </div>

            </div>


        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>


</x-layout>
