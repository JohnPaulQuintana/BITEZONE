<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update.patient') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="row">

            <div class="mb-2 col-sm-6 overflow-hidden" x-data="picturePreview()">
                <img id="preview" class="rounded" 
                src="{{ 
                    Auth::user()->profile
                    ? asset('storage/'.Auth::user()->profile)
                    : asset('storage/profiles/default.jpg')
                }}" 
                width="200" height="200" alt="Profile" />

                <div>   
                    <input @change="showPreview(event)" type="file" name="profile" id="profile" class="opacity-0">
                    <x-input-error class="mt-2 text-danger" :messages="$errors->get('profile')" />
                    <button type="button" class="btn btn-dark" @click="document.getElementById('profile').click()">
                        <i class="fa-solid fa-cloud-arrow-up"></i> {{ __(' Upload Profile') }}
                    </button>
                </div>
                <script>
                    function picturePreview(){
                        return {
                            showPreview: (event) => {
                                if(event.target.files.length > 0){
                                    var src = URL.createObjectURL(event.target.files[0]);
                                    document.getElementById('preview').src = src
                                }
                            }
                        }
                    }
                </script>
            </div>

            <div  class="mb-2 col-sm-6 overflow-hidden border bg-dark rounded p-2" x-data="resetLocation()">
                <div class="col mb-2">
                    <label for="latitude" class="form-label text-white">{{ __('Latitude') }}</label>
                    <input id="latitude" name="lat" type="text" class="form-control border rounded fw-bold"
                        value="{{ old('lat', $user->lat) }}" required autofocus readonly>
                    <x-input-error class="mt-2 text-danger" :messages="$errors->get('lat')" />
                </div>
                <div class="col mb-2">
                    <label for="longitude" class="form-label text-white">{{ __('Longitude') }}</label>
                    <input id="longitude" name="long" type="text" class="form-control border rounded fw-bold"
                        value="{{ old('long', $user->long) }}" required autofocus readonly>
                    <x-input-error class="mt-2 text-danger" :messages="$errors->get('long')" />
                </div>
                <div class="col mb-2">
                    <label class="form-control text-danger">Your Location should be reset on the map.</label>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-light" @click="showReset()">
                        <i class="fa-solid fa-recycle"></i> {{ __(' Reset Location') }}
                    </button>
                </div>
                <script>
                    function resetLocation(){
                        return{
                            showReset: () => {
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(function(position) {
                                        var lat = position.coords.latitude;
                                        var long = position.coords.longitude;
                                        document.getElementById('latitude').value = lat
                                        document.getElementById('longitude').value = long
                                        
                                    })
                                }

                            }
                        }
                    }
                </script>
            </div>

            <hr class="m-2">
            <div class="mb-3 col-sm-4">
                <label for="firstname" class="form-label">{{ __('First Name') }}</label>
                <input id="firstname" name="firstname" type="text" class="form-control border rounded fw-bold"
                    value="{{ old('firstname', $user->firstname) }}" required autofocus>
                <x-input-error class="mt-2 text-danger" :messages="$errors->get('firstname')" />
            </div>
    
            <div class="mb-3 col-sm-4">
                <label for="middlename" class="form-label">{{ __('Middle Name') }}</label>
                <input id="middlename" name="middlename" type="text" class="form-control border rounded fw-bold"
                    value="{{ old('middlename', $user->middlename) }}" autofocus>
                <x-input-error class="mt-2 text-danger" :messages="$errors->get('middlename')" />
            </div>
    
            <div class="mb-3 col-sm-4">
                <label for="lastname" class="form-label">{{ __('Last Name') }}</label>
                <input id="lastname" name="lastname" type="text" class="form-control border rounded fw-bold"
                    value="{{ old('lastname', $user->lastname) }}" required autofocus>
                <x-input-error class="mt-2 text-danger" :messages="$errors->get('lastname')" />
            </div>

            <div class="mb-3 col-sm-4">
                <label for="age" class="form-label">{{ __('Age') }}</label>
                <input id="age" name="age" type="number" class="form-control border rounded fw-bold"
                    value="{{ old('age', $user->age) }}" required autofocus>
                <x-input-error class="mt-2 text-danger" :messages="$errors->get('age')" />
            </div>
    
            <div class="mb-3 col-sm-4">
                <label for="gender" class="form-label">{{ __('Gender') }}</label>
                <input id="gender" name="gender" type="text" class="form-control border rounded fw-bold"
                    value="{{ old('gender', $user->gender) }}" required autofocus>
                <x-input-error class="mt-2 text-danger" :messages="$errors->get('gender')" />
            </div>

            <hr>
    
            <div class="mb-3 col-sm-6">
                <label for="address" class="form-label">{{ __('Address') }}</label>
                <input id="address" name="address" type="text" class="form-control border rounded fw-bold"
                    value="{{ old('address', $user->address) }}" required autofocus>
                <x-input-error class="mt-2 text-danger" :messages="$errors->get('address')" />
            </div>
    
            <div class="mb-3 col-sm-6">
                <label for="contact_no" class="form-label">{{ __('Contact Number') }}</label>
                <input id="contact_no" name="contact_no" type="text" class="form-control border rounded fw-bold"
                    value="{{ old('contact_no', $user->contact_no) }}" required autofocus>
                <x-input-error class="mt-2 text-danger" :messages="$errors->get('address')" />
            </div>
    
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" name="email" type="email" class="form-control border rounded fw-bold"
                    value="{{ old('email', $user->email) }}" required>
                <x-input-error class="mt-2 text-danger" :messages="$errors->get('email')" />
    
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800 dark:text-gray-200 text-danger">
                            {{ __('Your email address is unverified.') }}
    
                            <button form="send-verification"
                                class="btn btn-link text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
    
                        </p>
    
                        
                    </div>
                @endif
            </div>
        </div>
        

        <div class="d-flex align-items-center gap-4">
            <button type="submit" class="btn btn-dark">{{ __('Update Profile') }}</button>

            
        </div>

    </form>
</section>
