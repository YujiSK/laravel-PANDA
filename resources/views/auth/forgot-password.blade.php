<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="flex flex-col md:space-y-10">
        @csrf

        <div class="mb-5 block max-md:text-center">
            <h1 class="text-2xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-8xl font-bold">{{ __('Find your email') }}</h1>
            <p class="text-base md:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl font-bold text-gray-500">{{ __('Enter your recovery email') }}</p>
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')"
                required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4 flex items-center justify-between">
            <x-buttons.primary-button class="order-last">
                {{ __('Reset Password') }}
            </x-buttons.primary-button>
            <x-buttons.secondary-button-link href="{{ route('login') }}">
                {{ __('Back') }}
            </x-buttons.secondary-button-link>
        </div>
    </form>
</x-guest-layout>
