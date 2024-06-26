<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="admin/images/UMPCablogowhite.png" alt="logo"/>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" class="float-left" value="{{ __('Name*') }}" />
                <x-jet-input id="name" class="block mt-1 w-full text-black" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" class="float-left" value="{{ __('Email*') }}" />
                <x-jet-input id="email" class="block mt-1 w-full text-black" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="gender" class="float-left" value="{{ __('Gender*') }}" />
                <x-jet-input id="gender" class="block mt-1 w-full text-black" type="text" name="gender" :value="old('gender')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="dob" class="float-left" value="{{ __('Date Of Birth*') }}" />
                <x-jet-input id="dob" class="block mt-1 w-full text-black" type="date" name="dob" :value="old('dob')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="phone_num" class="float-left" value="{{ __('Phone Number*') }}" />
                <x-jet-input id="phone_num" class="block mt-1 w-full text-black" type="text" name="phone_num" :value="old('phone_num')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" class="float-left" value="{{ __('Password*') }}" />
                <x-jet-input id="password" class="block mt-1 w-full text-black" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" class="float-left" value="{{ __('Confirm Password*') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full text-black" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> --}}
                

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
            <div class="text-center mt-4 font-weight-light text-black">
                Already Registered? <a href="{{ route('login') }}" class="text-primary"><strong>Login</strong></a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
