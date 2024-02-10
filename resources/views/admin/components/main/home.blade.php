@extends('admin.index')

@section('head')
   @include('admin.components.file.head')
   <style>
    .col-md-2 {
        height: 100px;
    }
</style>
@endsection

@section('contents')
    <!-- start page title -->
    <div class="row">
        @include('admin.components.parts.title')
    </div>
    <!-- end page title -->

    <div class="row">
        @include('admin.components.parts.card')
    </div><!-- end row -->

    <div class="row mb-4">
        
        <div class="col-xl-8">
            <div class="card mb-0">
                <div class="card-body p-0">
                    <div class="row mb-4">

                        <div class="col-xl-12">
                            <div class="card mb-0">
                                <div class="card-header d-flex" style="justify-content: space-between">

                                    <div class="card-title">
                                        <h5>Scheduled Patient's | <span class="text-primary"><i class="fa-solid fa-calendar-day"></i> today</span></h5>
                                    </div>

                                    <div class="div">
                                        <a href="#" class="border border-primary p-2 rounded" style="font-size:18px;"><i class="fa-solid fa-user-plus fa-xl"></i> Add patient</a>
                                    </div>

                                    <div class="div">
                                        <input type="text" class="form-control" id="search-patient" placeholder="Search Patient's">
                                    </div>

                                    
                                </div>
                
                                <div class="card-body">
                
                                    <div class="card mb-3">
                
                                        @for ($i=1;$i<=5;$i++)
                                            <div class="row g-0 mb-2 border patient" data-id="patient-{{ $i }}">
                
                                                <div class="col-md-2 border-start border-light border-5 positio-relative">
                                                    <span class="badge position-absolute p-2" style="background: rgba(0, 92, 128, 0.432); font-weight:900; font-size:24px; top:5px;left:5px;">0{{ $i }}</span>
                                                    <img style="height:100%; width:100%;"
                                                        src="https://images.unsplash.com/photo-1512678080530-7760d81faba6?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fG1lZGljYWwlMjBjbGluaWN8ZW58MHx8MHx8fDA%3D"
                                                        class="img-fluid" alt="...">
                                                </div>
                
                                                <div class="col-md-2 position-relative border-start border-primary border-5">
                                                    <div class="card-body p-1 mt-2">
                                                        <h6 class="card-title text-secondary">Name :</h6>
                                                        <h5 class="card-title">John Doe</h5>
                                                        <span class="card-text muted">Quintana.</span>
                                                    </div>
                                                    <div class="position-absolute" style="top: 40px; right:10px">
                                                        <i class="fa-solid fa-bed fa-2xl"
                                                            style="font-size: 52px; color:rgba(6, 22, 167, 0.082)"></i>
                                                    </div>
                                                </div>
                
                                                <div class="col-md-2 position-relative border-start border-light border-5">
                                                    <div class="card-body p-1 mt-2">
                                                        <h6 class="card-title text-secondary">RHU :</h6>
                                                        <h5 class="card-title">Mariveles Clinic Center</h5>
                                                        <p class="card-text muted">Public RHU.</p>
                                                    </div>
                                                    <div class="position-absolute" style="top: 40px; right:10px">
                                                        <i class="fa-solid fa-hospital fa-2xl"
                                                            style="font-size: 52px; color:rgba(6, 22, 167, 0.082)"></i>
                                                    </div>
                                                </div>
                
                                                <div class="col-md-2 position-relative border-start border-light border-5">
                                                    <div class="card-body p-1 mt-2">
                                                        <h6 class="card-title text-secondary">Consultation :</h6>
                                                        <h5 class="card-title">Animal Bite</h5>
                                                        <p class="card-text muted">Medical.</p>
                                                    </div>
                                                    <div class="position-absolute" style="top: 40px; right:10px">
                                                        <i class="fa-solid fa-user-doctor fa-2xl"
                                                            style="font-size: 52px; color:rgba(6, 22, 167, 0.082)"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 position-relative border-start border-light border-5">
                                                    <div class="card-body p-1 mt-2">
                                                        <h6 class="card-title text-secondary">Location :</h6>
                                                        <h5 class="card-title">Marivelez, Bataan</h5>
                                                        <p class="card-text muted">ABC Street.</p>
                                                    </div>
                                                    <div class="position-absolute" style="top: 40px; right:10px">
                                                        <i class="fa-solid fa-map-location-dot fa-2xl"
                                                            style="font-size: 52px; color:rgba(6, 22, 167, 0.082)"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 position-relative border-start border-light border-5">
                                                    <div class="card-body g-1" style="display: flex; gap:5px;">
                                                        {{-- <h5 class="card-title">Appoint now</h5> --}}
                                                        <div class="mt-3">
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Show on the map"
                                                                class="border p-2 border-warning text-warning rounded"><i
                                                                    class="fa-solid fa-location-dot fa-2xl"></i></a>
                                                        </div>
                                                        <div class="mt-3">
                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Appointment now" class="border p-2 border-primary rounded"><i
                                                                    class="fa-solid fa-plus fa-2xl"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="position-absolute" style="top: 40px; right:10px">
                                                        <i class="fa-solid fa-location-arrow fa-2xl"
                                                            style="font-size: 52px; color:rgba(6, 22, 167, 0.055)"></i>
                                                    </div>
                                                </div>
                
                                            </div>
                                        @endfor
                
                                    </div>
                
                                </div>
                            </div>
                        </div> <!-- end col -->
                
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="" id="map" style="height: 600px;">
                   
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row-->
    <div style='clear:both'></div>
@endsection

@section('scripts')
    @include('admin.components.file.scripts')
    <script>
         $(document).ready(function(){
            // searching for events
            $('#search-patient').on('input', function() {
                var searchInput = $(this).val().toLowerCase();
                $('.patient').each(function() {
                var cardId = $(this).data('id').toString();
                // var cardText = $(this).text().toLowerCase();

                if (cardId.includes(searchInput)) {
                    $(this).fadeIn('slow');
                } else {
                    $(this).fadeOut('slow');
                }
                });
            });
        })
    </script>

@endsection