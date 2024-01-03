<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="flex flex-col">
        @csrf

        <div class="mb-5 hidden md:block">
            <h1 class="text-6xl font-bold">{{ __('PANDA') }}</h1>
            <p class="font-bold text-gray-500">
                {{ __("Program of Administration and\nNotification of Dojos and Activities") }}</p>
        </div>

        <!-- Email Address -->
        <div class="mb-5">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-5">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="mt-1 block w-full" type="password" name="password" required
                autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mb-5 block inline-flex grid grid-cols-2 place-content-between items-center">
            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <div class="flex justify-end">
                    <a class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot Password?') }}
                    </a>
                </div>
            @endif
        </div>

        <div class="mb-5 flex flex-col items-center space-y-4">
            <x-buttons.primary-button class="w-full text-2xl">
                {{ __('Login') }}
            </x-buttons.primary-button>

            @if (Route::has('register'))
                <x-buttons.secondary-button-link href="{{ route('register') }}" class="w-full text-2xl">
                    {{ __('Register') }}
                </x-buttons.secondary-button-link>
            @endif
        </div>
    </form>
</x-guest-layout>
