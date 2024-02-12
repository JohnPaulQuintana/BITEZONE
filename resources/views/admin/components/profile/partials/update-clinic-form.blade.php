<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Clinic Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Ensure that your clinic is is a legit RHU facilities for the sake of patient's.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.clinic') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="row">

            <div class="col-sm-8 row">

                <div class="mb-2 col-sm-6">
                    <label for="clinic" class="form-label">{{ __('Clinic Name') }}</label>
                    <input id="clinic" name="clinic" type="text" value="{{ old('clinic', $clinic->clinic ?? '') }}" class="form-control border rounded" autofocus>
                    <x-input-error class="mt-2 text-danger" :messages="$errors->get('clinic')" />
                </div>
    
                <div class="mb-2 col-sm-6">
                    <label for="type" class="form-label">{{ __('Clinic Type') }}</label>
                    <select name="type" id="type" class="form-control border rounded" autofocus>
                        @if ($clinic && $clinic->type !== null)
                            <option value="{{ $clinic->type }}">{{ $clinic->type }}</option>
                        @else
                            <option value="">Select Type</option>   
                            
                        @endif
                        <option value="Private">Private</option>   
                        <option value="Public">Public</option>
                        
                    </select>
                    <x-input-error class="mt-2 text-danger" :messages="$errors->get('type')" />
                </div>
    
                <div class="mb-2 col-sm-6">
                    <label for="role" class="form-label">{{ __('Role') }}</label>
                    <select name="role" id="role" class="form-control border rounded" autofocus>
                        @if ($clinic && $clinic->role !== null)
                            <option value="{{ $clinic->role }}">{{ $clinic->role }}</option>
                        @else
                            <option value="">Select Role</option>   
                            
                        @endif
                        <option value="Role-1">Role-1</option>   
                        <option value="Role-2">Role-2</option>
                    </select>
                    <x-input-error class="mt-2 text-danger" :messages="$errors->get('role')" />
                </div>

            </div>

            <div class="col-sm-4 row">
                <div class="mb-2 col-sm-12 overflow-hidden" x-data="clinicPreview()">
                    <img id="preview-img" class="img-fluid rounded" 
                    src="{{ 
                        Auth::user()->profile
                        ? asset('storage/'. ($clinic->clinic_profile ?? 'clinics/default.jpg'))
                        : asset('storage/clinics/default.jpg')
                    }}"
                    
                    width="200" height="200" alt="Profile" />
    
                    <div>   
                        <input @change="showPreviewClinic(event)" type="file" name="clinic_profile" id="clinic-profile" class="opacity-0">
                        <x-input-error class="mt-2 text-danger" :messages="$errors->get('clinic')" />
                        <button type="button" class="btn btn-dark" @click="document.getElementById('clinic-profile').click()">
                            <i class="fa-solid fa-cloud-arrow-up"></i> {{ __(' Upload Clinic') }}
                        </button>
                    </div>
                    <script>
                        function clinicPreview(){
                            return {
                                showPreviewClinic: (event) => {
                                    if(event.target.files.length > 0){
                                        var src = URL.createObjectURL(event.target.files[0]);
                                        document.getElementById('preview-img').src = src
                                    }
                                }
                            }
                        }
                    </script>
                </div>
            </div>

            <div class="d-flex align-items-center gap-4">
                <button type="submit" class="btn btn-dark">{{ __('Update Clinic') }}</button>
            </div>
        </div>
    </form>
</section>