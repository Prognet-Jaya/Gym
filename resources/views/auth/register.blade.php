<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mt-4">
                <x-jet-label for="nama_lengkap" value="{{ __('Nama Lengkap') }}" />
                <x-jet-input id="nama_lengkap" class="block mt-1 w-full" type="text" name="nama_lengkap" :value="old('nama_lengkap')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="umur" value="{{ __('Umur') }}" />
                <x-jet-input id="umur" class="block mt-1 w-full" type="text" name="umur" :value="old('umur')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="pekerjaan" value="{{ __('pekerjaan') }}" />
                <x-jet-input id="pekerjaan" class="block mt-1 w-full" type="text" name="pekerjaan" :value="old('pekerjaan')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="jenis_kelamin" value="{{ __('pria') }}" />
                <x-jet-input id="jenis_kelamin" class="block mt-1 w-full" type="radio" name="jenis_kelamin" value="pria" />
            </div>

            <div class="mt-4">
                <x-jet-label for="jenis_kelamin" value="{{ __('wanita') }}" />
                <x-jet-input id="jenis_kelamin" class="block mt-1 w-full" type="radio" name="jenis_kelamin" value="wanita" />
            </div>


            <div class="mt-4">
                <x-jet-label for="tanggal_lahir" value="{{ __('tanggal_lahir') }}" />
                <x-jet-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" required />
            </div>


            <div class="mt-4">
                <x-jet-label for="telepon" value="{{ __('telepon') }}" />
                <x-jet-input id="telepon" class="block mt-1 w-full" type="text" name="telepon" :value="old('telepon')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="alamat" value="{{ __('alamat') }}" />
                <x-jet-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required />
            </div>
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

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
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
    
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
