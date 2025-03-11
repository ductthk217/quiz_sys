<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-white">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
        data-target="#deleteModal">{{ __('Delete Account') }}</button>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" onsubmit="deleteAccount(event)" class="p-6">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Xóa tài khoản</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('delete')

                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Are you sure you want to delete your account?') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>

                        <div class="mt-6">
                            <label for="password" class="col-sm-12 col-form-label">{{ __('Password') }}</label>
                            <input id="password_delete" name="password" type="password"
                                class="form-control mt-1 block w-full" autocomplete="new-password" placeholder="{{ __('Password') }}">
                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
