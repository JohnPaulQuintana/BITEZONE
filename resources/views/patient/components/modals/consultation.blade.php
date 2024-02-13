
  
  <!-- Modal -->
  <div class="modal fade" id="consultation-Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Animal Bite Treatment Consultation Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-5">

          <form action="{{ route('consultation.form') }}" method="post">
            @csrf

            <input type="number" name="reciever_id" value="" id="hidden-rhu-id" class="visually-hidden">
            <div class="row border p-2 position-relative">
                <h5 class="position-absolute top-0 start-50 translate-middle bold">Basic Information</h5>
  
                <div class="mt-3 col-sm-4 text-center">  
                    <input type="text" name="firstname" id="c-firstname" value="{{ Auth::user()->firstname }}" class="form-control fw-bold text-center">
                    <label for="c-firstname">Firstname:</label>
                    <x-input-error class="mt-2 text-danger" :messages="$errors->get('firstname')" />
                </div>
  
                <div class="mt-3 col-sm-4 text-center">     
                    <input type="text" name="lastname" id="c-lastname" value="{{ Auth::user()->lastname }}" class="form-control fw-bold text-center">
                    <label for="c-lastname">Lastname:</label>
                    <x-input-error class="mt-2 text-danger" :messages="$errors->get('lastname')" />
                </div>
  
                <div class="mt-3 col-sm-4 text-center">     
                    <input type="text" name="middlename" id="c-middlename" value="{{ Auth::user()->middlename }}" class="form-control fw-bold text-center">
                    <label for="c-middlename">Middlename:</label>
                    <x-input-error class="mt-2 text-danger" :messages="$errors->get('middlename')" />
                </div>
  
                <div class="mt-3 col-sm-4 text-center">     
                    <input type="number" name="age" id="c-age" value="{{ Auth::user()->age }}" class="form-control fw-bold text-center">
                    <label for="c-age">Age:</label>
                    <x-input-error class="mt-2 text-danger" :messages="$errors->get('age')" />
                </div>
  
                <div class="mt-3 col-sm-4 text-center">    
                  <select class="form-select fw-bold text-center" name="sex" id="sex">
                    <option value="{{ Auth::user()->gender }}">{{ Auth::user()->gender }}</option>
                    @if (Auth::user()->gender != 'male')
                      <option value="male">Male</option>
                    @endif
  
                    @if (Auth::user()->gender != 'female')
                      <option value="female">Female</option>
                    @endif
                  
                    <option value="Other">Other's</option>
                  </select> 
                    <label for="sex">Sex:</label>
                    <x-input-error class="mt-2 text-danger" :messages="$errors->get('sex')" />
                </div>
  
                <div class="mt-3 col-sm-4 text-center">     
                  <input type="date" name="date" id="date" class="form-control fw-bold text-center">
                  <label for="date">Date:</label>
                  <x-input-error class="mt-2 text-danger" :messages="$errors->get('date')" />
                </div>
  
                <div class="mt-3 col-sm-6 text-center">     
                  <input type="date" name="dateofbirth" id="dateofbirth" class="form-control fw-bold text-center">
                  <label for="dateofbirth">Date of Birth:</label>
                  <x-input-error class="mt-2 text-danger" :messages="$errors->get('dateofbirth')" />
                </div>
  
                <div class="mt-3 col-sm-6 text-center">     
                  <input type="tel" name="contact" id="contact" value="{{ Auth::user()->contact_no }}" class="form-control fw-bold text-center">
                  <label for="contact">Contact No.:</label>
                  <x-input-error class="mt-2 text-danger" :messages="$errors->get('contact')" />
                </div>
  
                <div class="mt-3 col-sm-12 text-center">     
                  <input type="text" class="form-control fw-bold text-center" name="address" value="{{ Auth::user()->address }}" placeholder="Enter your address" id="c-address"/>
                  <label for="c-address">Address</label>
                  <x-input-error class="mt-2 text-danger" :messages="$errors->get('address')" />
                </div>

                <div class="mt-3 col-sm-12 text-center">     
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Provide details about the animal bite incident" id="floatingTextarea2" style="height: 100px" name="animal_bite_comments"></textarea>
                    <label for="floatingTextarea2">Comments - optional</label>
                  </div>
                </div>
                
                <div class="mt-3 col-sm-12">
                  <div class="border">
                    <button type="submit" class="btn btn-primary d-flex justify-content-center form-control">Send Consultation Form</button>
                  </div>
                </div>
            </div>
          </form>
          
        </div>
        
      </div>
    </div>
  </div>