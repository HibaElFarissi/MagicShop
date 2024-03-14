<section>
  

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group mb-4">
                    
            
                    <label class="label" for="update_password_current_password">Old Password</label>
                    <div class="form-group">
                        <div class="password-wrapper position-relative">
                            <input type="password" id="update_password_current_password" name="current_password" class="form-control h-58 text-dark"
                                autocomplete="current-password">
                         
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group mb-4">
                   
                    <label class="label" for="update_password_password">New Password</label>
                    <div class="form-group">
                        <div class="password-wrapper position-relative">
                            <input type="password" name="password" id="update_password_password" class="form-control h-58 text-dark"
                            autocomplete="new-password" >
                           
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group mb-4">
                
                    <label class="label" for="update_password_password_confirmation">Confirm Password</label>
                    <div class="form-group">
                        <div class="password-wrapper position-relative">
                            <input type="password" name="password_confirmation" id="update_password_password_confirmation" class="form-control h-58 text-dark"
                            autocomplete="new-password" >
                          
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group d-flex gap-3">
                    <x-primary-button class="btn btn-primary py-3 px-5 fw-semibold text-white">{{ __('Change Password') }}</x-primary-button>
                    @if (session('status') === 'password-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                    @endif
               
                </div>

            </div>
        </div>
    </form>
</section>




            
                 
           