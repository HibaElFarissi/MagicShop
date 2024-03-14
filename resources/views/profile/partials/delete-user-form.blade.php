<section class="space-y-6">
   

    

    
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

           

           

            <div class="row mb-3">
                <x-input-label for="password" value="{{ __('Mot de passe') }}" class="label"/>
                <div class="password-wrapper position-relative">
                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control h-58 text-dark"
                    placeholder="{{ __('Mot de passe') }}"
                />
                </div>
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
               

                <x-danger-button class="btn btn-primary py-3 px-5 fw-semibold text-white">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
   
</section>
