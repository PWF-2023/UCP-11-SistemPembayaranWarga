<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    {{-- <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form> --}}

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label
                for="name"
                :value="__('Name')"
            />
            <x-text-input
                id="name"
                name="name"
                type="text"
                class="mt-1 block w-full"
                :value="old('name', $user->name)"
                required
                autofocus
                autocomplete="name"
            />
            <x-input-error
                class="mt-2"
                :messages="$errors->get('name')"
            />
        </div>

        <div>
            <x-input-label
                for="nik"
                :value="__('NIK')"
            />
            <x-text-input
                id="nik"
                name="nik"
                type="text"
                class="mt-1 block w-full"
                :value="old('nik', $user->nik)"
                required
                autofocus
                autocomplete="nik"
            />
            <x-input-error
                class="mt-2"
                :messages="$errors->get('nik')"
            />
        </div>

        <div>
            <x-input-label
                for="address"
                :value="__('Alamat')"
            />
            <x-text-input
                id="address"
                name="address"
                type="text"
                class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                :value="old('address', $user->address)"
                required
                autofocus
                autocomplete="address"
            />
            <x-input-error
                class="mt-2"
                :messages="$errors->get('address')"
            />
        </div>

        <div>
            <x-input-label for="fam_member" :value="__('Jumlah Anggota')" />
            <x-text-input
                id="fam_member"
                name="fam_member"
                type="text"
                class="mt-1 block w-full"
                :value="old('fam_member', $user->fam_member)"
                required
                autofocus
                autocomplete="fam_member"
            />
            <x-input-error class="mt-2" :messages="$errors->get('fam_member')" />
        </div>

        <div>
            <x-input-label for="contact" :value="__('Contact (WhatsApp)')" />
            <x-text-input
                id="contact"
                name="contact"
                type="text"
                class="mt-1 block w-full"
                :value="old('contact', $user->contact)"
                required
                autofocus
                autocomplete="contact"
            />
            <x-input-error class="mt-2" :messages="$errors->get('contact')" />
        </div>

        <div>
            <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" :value="__('Email')">Your Email</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                </div>
                <x-text-input
                    id="email"
                    name="email"
                    type="email"
                    id="email-address-icon"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    :value="old('email', $user->email)"
                    required
                    autocomplete="username"
                />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
