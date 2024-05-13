<x-guest-layout>
    <x-jet-authentication-card>
        @if (session()->has('message'))
            {{-- make the flash message disappear after a certain amount of time (3000 = 3 seconds) --}}
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-48 py-3">
                <p>
                    {{session('message')}}
                </p>
            </div>
        @endif
        <x-slot name="logo">
            <img src="admin/images/UMPCablogowhite.png" alt="logo"/>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" class="float-left" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full text-black" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" class="float-left" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full text-black" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>

        <div class="text-center mt-4 font-weight-light text-black">
            Don't have an account? <a href="{{ route('register') }}" class="text-primary"><strong>Create</strong></a>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
