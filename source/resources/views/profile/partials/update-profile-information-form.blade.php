<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('messages.profile_info') }}
        </h2>

        <p class="sub-title">
            {{ __("messages.profile_update_message") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" onsubmit="updateProfile(event)" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="form-group row">
            <label for="name" class="col-sm-12 col-form-label">{{ __('title.name') }}</label>
            <div class="col-sm-7">
                <input id="name" name="name" type="text" class="form-control mt-1 block w-full" autocomplete="name"  value="{{ old('name', $user->name) }}">
                <span id="error-name" class="mt-2 error-span" ></span>
            </div>
        </div>

        <div>
            <div class="form-group row">
                <label for="email" class="col-sm-12 col-form-label">Email</label>
                <div class="col-sm-7">
                    <input id="email" name="email" type="email" class="form-control mt-1 block w-full" autocomplete="username" value="{{ old('email', $user->email) }}">
                    <span id="error-email" class="mt-2 error-span" ></span>
                </div>
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
            <button type="submit" class="btn btn-primary waves-effect waves-light">{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-dark-600 dark:text-dark-400 text-dark"
                >{{ __('messages.saved') }}</p>
            @endif
        </div>
    </form>
</section>
