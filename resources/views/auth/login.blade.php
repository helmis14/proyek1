<x-guest-layout>
    <x-auth-card>
        <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200" > {{ __('Login') }} </h1>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label class="block text-sm">

                <!-- Email Address -->
                <x-label class="text-gray-700 dark:text-gray-400" for="email" :value="__('Username')" />
                <x-input id="email" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="example@email.com" type="email" name="email" :value="old('email')" required autofocus />

            </label>
            <label class="block mt-4 text-sm">

                <!-- Password -->
                <x-label class="text-gray-700 dark:text-gray-400" for="password" :value="__('Password')" />
                <x-input id="password" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="******" type="password" name="password" required autocomplete="current-password" />

            </label>
            <button class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" style="background-color: #ff9223;"> {{ __('Login') }} </button>
            <p style="font-family: Inter; position:absolute; font-style:normal;font-size:10px;line-height:17px;" class="block w-full px-4 py-2 mt-4">Don’t Have Any Account?<a style="color: #ff9223" href=""> Register</a></p>
        </form>
    </x-auth-card>
</x-guest-layout>
