<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
{{--
            <x-input-label for="email" :value="__('Email')" />
--}}
            <x-text-input id="email" placeholder="email" class="block placeholder:text-yellowy  mt-1 w-full border-4 border-t-0 border-r-0 border-yellowy rounded-xl bg-transparent focus:bg-black/20  focus:ring-0 focus:border-yellowy transition ease-in-out duration-300" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
{{--
            <x-input-label for="password" :value="__('Password')" />
--}}

            <x-text-input id="password" placehorder="password" class="block mt-1 w-full border-4 border-t-0 border-r-0 border-yellowy rounded-xl bg-transparent focus:bg-black/20 focus:ring-0 focus:border-yellowy transition ease-in-out duration-300"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex flex-col-reverse items-center mt-4">
            @if (Route::has('password.request'))
                <a class="mt-8 text-sm dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none transition ease-in-out duration-300" href="{{ route('login') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="text-[17px] bg-yellowy rounded-lg mt-8 h-[35px] border-4 border-t-0 border-r-0 border-yellowy transition ease-in-out duration-300">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
