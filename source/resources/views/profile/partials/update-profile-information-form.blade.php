<section>
    <header>
        <h1 class="text-lg font-medium">
            {{ __('messages.profile_info') }}
        </h1>

        <p class="sub-title">
            {{ __("messages.profile_update_message") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="form-group row">
            <x-input-label for="name" :value="__('title.name')" class="col-sm-12 col-form-label"/>
            <div class="col-sm-7">
                <x-form.input id="name"  name="name" type="text" class="form-control mt-1 w-full" autocomplete="text" value="{{ old('name', $user->name) }}"/>
            </div>
        </div>

        <div>
            <div class="form-group row">
                <x-input-label for="email" :value="__('Email')" class="col-sm-12 col-form-label"/>
                <div class="col-sm-7">
                    <x-form.input id="email"  name="email" type="email" class="form-control mt-1 w-full" autocomplete="email" value="{{ old('email', $user->email) }}"/>
                </div>
            </div>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('messages.unverified_message') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('messages.button_verified_message') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('messages.sent_verified_message') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('title.save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-dark-600 dark:text-dark-400 text-dark"
                >{{ __('title.saved') }}</p>
            @endif
        </div>
    </form>
</section>
