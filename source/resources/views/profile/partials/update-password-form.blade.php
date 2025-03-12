<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('messages.update_password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('messages.update_password_message') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" onsubmit="updatePassword(event)" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="form-group row">
            <label for="update_password_current_password"
                class="col-sm-12 col-form-label">{{ __('title.password') }}</label>
            <div class="col-sm-7">
                <input id="update_password_current_password" name="update_password_current_password" type="password"
                    class="form-control mt-1 block w-full" autocomplete="current-password">
                    <span id="error-current_password" class="mt-2 error-span" ></span>
            </div>
        </div>

        <div class="form-group row">
            <label for="update_password_password" class="col-sm-12 col-form-label">{{ __('title.new_password') }}</label>
            <div class="col-sm-7">
                <input id="update_password_password" name="update_password_password" type="password"
                    class="form-control mt-1 block w-full" autocomplete="new-password">
                    <span id="error-new_password" class="mt-2 error-span" ></span>

            </div>
        </div>

        <div class="form-group row">
            <label for="update_password_password_confirmation"
                class="col-sm-12 col-form-label">{{ __('title.confirm_password') }}</label>
            <div class="col-sm-7">
                <input id="update_password_password_confirmation" name="update_password_password_confirmation"
                    type="password" class="form-control mt-1 block w-full" autocomplete="new-password">
                    <span id="error-new_password_confirmation" class="mt-2 error-span" ></span>

            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary waves-effect waves-light">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('title.saved') }}</p>
            @endif
        </div>
    </form>
</section>
