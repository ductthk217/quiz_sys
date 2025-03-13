<section>
    <header>
        <h1 class="text-lg font-medium">
            {{ __('messages.update_password') }}
        </h1>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('messages.update_password_message') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="form-group row">
            <x-input-label for="update_password_current_password" :value="__('title.password')" class="col-sm-12 col-form-label"/>
            <div class="col-sm-7">
                <x-form.input id="update_password_current_password"  name="update_password_current_password" type="password" class="form-control mt-1 w-full" autocomplete="password" />
            </div>
        </div>

        <div class="form-group row">
            <x-input-label for="update_password_password" :value="__('title.new_password')" class="col-sm-12 col-form-label"/>
            <div class="col-sm-7">
                <x-form.input id="update_password_password"  name="update_password_password" type="password" class="form-control mt-1 w-full" autocomplete="off" />
            </div>
        </div>

        <div class="form-group row">
            <x-input-label for="update_password_password_confirmation" :value="__('title.confirm_password')"  class="col-sm-12 col-form-label"/>
            <div class="col-sm-7">
                <x-form.input id="update_password_password_confirmation"  name="update_password_password_confirmation" type="password" class="form-control mt-1 w-full" autocomplete="off" />
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('title.save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('title.saved') }}</p>
            @endif
        </div>
    </form>
</section>
