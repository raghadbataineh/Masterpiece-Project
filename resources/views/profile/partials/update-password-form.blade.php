    {{-- <div class="card mb-4">
        <div class="card-body">
            <header>
                <h2 class="text-lg font-medium text-gray-900" style="color: black">
                    {{ __('Update Password') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600" style="color: black">
                    {{ __('Ensure your account is using a long, random password to stay secure.') }}
                </p>
            </header>

            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')

                <div>
                    <x-input-label for="current_password" :value="__('Current Password')" />
                    <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full"
                        autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="password" :value="__('New Password')" />
                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full"
                        autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                        class="mt-1 block w-full" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0" style="color: black">Phone</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">(097) 234-5678</p>
                      <x-text-input id="phone" name="phone" type="text" class="mt-1 form-control" :value="old('phone', $user->phone)" required autofocus autocomplete="phone" />
                        <x-input-error class="mt-2" :messages="$errors->get('phone')" />
            
                    </div>
                  </div>

                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>

                    @if (session('status') === 'password-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>

        </div>
    </div> --}}
    <div class="card mb-4">
        <div class="card-body">
            <section>
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Update Password') }}
                    </h2>
    
                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Ensure your account is using a long, random password to stay secure.') }}
                    </p>
                </header>
    
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')
    
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0" style="color: black">Current Password</p>
                        </div>
                        <div class="col-sm-9">
                            <x-text-input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                        </div>
                    </div>
                    <hr>
    
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0" style="color: black">New Password</p>
                        </div>
                        <div class="col-sm-9">
                            <x-text-input id="password" name="password" type="password" class="form-control" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>
                    </div>
                    <hr>
    
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0" style="color: black">Confirm Password</p>
                        </div>
                        <div class="col-sm-9">
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>
    
                    <div class="flex items-center gap-4 mt-4">
                        <x-primary-button style="background-color: #3490dc; color: white; padding: 10px 20px; border: none; cursor: pointer;">
                            {{ __('Save') }}
                        </x-primary-button>
    
                        @if (session('status') === 'password-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                style="background-color: #6EE7B7; color: #333; padding: 5px 10px; border-radius: 5px;"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </section>
        </div>
    </div>
    