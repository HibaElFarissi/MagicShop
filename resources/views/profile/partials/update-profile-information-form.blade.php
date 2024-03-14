<section>


    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group mb-4">
                    <x-input-label for="name" :value="__('Name')" class="label" />
                    <div class="form-group position-relative">
                        <x-text-input id="name" name="name" type="text"
                            class="form-control text-dark ps-5 h-58" :value="old('name', $user->name)" required autofocus
                            autocomplete="name" />
                        <i
                            class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
                <div>


                </div>
            </div>
           
            <div class="col-lg-6">
                <div class="form-group mb-4">
                    <x-input-label for="email" :value="__('Email Address')" class="label" />
                    <div class="form-group position-relative">
                        <x-text-input id="email" name="email" type="email"
                            class="form-control text-dark ps-5 h-58" :value="old('email', $user->email)" required
                            autocomplete="username" />
                        <i
                            class="ri-mail-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>
                </div>
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification"
                                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
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
           
           
          
            
          
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="label">File Upload</label>
                    <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                        <div class="product-upload">
                            <label for="file-upload" class="file-upload mb-0">
                                <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                                <span class="d-block fw-semibold text-body">Drop files here or click to
                                    upload.</span>
                            </label>
                            <input id="file-upload" type="file" name="photo">
                            <x-input-error class="mt-2" :messages="$errors->get('photo')" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-bottom pb-3 mb-3 mt-5">
            <h4 class="fs-18 fw-semibold mb-1">Social Information</h4>
            <p class="fs-15">Fill all Information as below</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group mb-4">
                    <label class="label">Facebook</label>
                    <div class="form-group position-relative">
                        <input type="url" name="Facebook" class="form-control text-dark ps-5 h-58" placeholder="URL"  value="{{old('Facebook', $user->Facebook)}}" required autofocus>
                        <i
                            class="ri-facebook-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                            <x-input-error class="mt-2" :messages="$errors->get('Facebook')" />
                        </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group mb-4">
                    <label class="label">Twitter</label>
                    <div class="form-group position-relative">
                        <input type="url" name="Twitter" class="form-control text-dark ps-5 h-58"  value="{{old('Twitter', $user->Twitter)}}" required autofocus placeholder="URL">
                        <i
                            class="ri-twitter-x-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                            <x-input-error class="mt-2" :messages="$errors->get('Twitter')" />
                        </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="form-group mb-4">
                    <label class="label">instagram</label>
                    <div class="form-group position-relative">
                        <input type="url" name="instagram" class="form-control text-dark ps-5 h-58" value="{{old('instagram', $user->instagram)}}"  required autofocus placeholder="URL">
                        <i
                            class="ri-instagram-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                            <x-input-error class="mt-2" :messages="$errors->get('instagram')" />
                        </div>
                </div>
            </div>
            
            <div class="col-lg-12">
                <div class="form-group d-flex gap-3">
                    <x-primary-button  class="btn btn-primary py-3 px-5 fw-semibold text-white">{{ __('Save') }}</x-primary-button>
                    @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved') }}</p>
                    @endif
                </div>
            </div>


           
        </div>
    </form>
</section>
