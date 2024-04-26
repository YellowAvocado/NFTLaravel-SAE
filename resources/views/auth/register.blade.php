<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="text-right text-yellowy">
            <x-text-input id="name" placeholder="name" class="block placeholder:text-yellowy mt-1 w-full border-4 border-t-0 border-r-0 border-yellowy rounded-xl bg-transparent focus:bg-black/20  focus:ring-0 focus:border-yellowy transition ease-in-out duration-300" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4 text-right text-yellowy">
            <x-text-input id="email" placeholder="email" class="block placeholder:text-yellowy mt-1 w-full border-4 border-t-0 border-r-0 border-yellowy rounded-xl bg-transparent focus:bg-black/20  focus:ring-0 focus:border-yellowy transition ease-in-out duration-300" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 text-right text-yellowy">
{{--
            <x-input-label for="password" :value="__('password')" />
--}}

            <x-text-input id="password" class="block mt-1 w-full border-4 border-t-0 border-r-0 border-yellowy rounded-xl bg-transparent focus:bg-black/20 focus:ring-0 focus:border-yellowy transition ease-in-out duration-300"
                            type="password"
                            name="password"
                            placeholder="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4 text-right text-yellowy">

            <x-text-input id="password_confirmation" class="block mt-1 w-full border-4 border-t-0 border-r-0 border-yellowy rounded-xl bg-transparent focus:bg-black/20 focus:ring-0 focus:border-yellowy transition ease-in-out duration-300"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex flex-col-reverse items-center justify-center mt-4">
            <a class="mt-8 text-sm dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none transition ease-in-out duration-300" href="{{ route('login') }}">
                {{ __('registered?') }}
            </a>

            <x-primary-button class="text-[17px] bg-yellowy rounded-lg mt-8 h-[35px] hover:bg-yellow-300 transition ease-in-out duration-300">
                {{ __('register') }}
            </x-primary-button>

        </div>
    </form>
</x-guest-layout>
