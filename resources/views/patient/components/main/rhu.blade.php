@extends('patient.index')

@section('head')
    @include('patient.components.files.head')
    <style>
        .col-md-2 {
            height: 100px;

        }
    </style>
@endsection

@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 text-primary">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);" class="text-dark">BITEZONE</a></li>
                        <li class="breadcrumb-item active text-dark">Rural Health Unit's</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row mb-4">

        <div class="col-xl-12">
            <div class="card mb-0">
                <div class="card-header d-flex" style="justify-content: space-between">
                    <div class="card-title">
                        <h5> Available Rural Health Unit (RHU) - <span class="badge bg-primary">Registered</span></h5>
                    </div>

                    <div class="div">
                        <input type="text" class="form-control" id="search-rhu" placeholder="Search RHU">
                    </div>
                </div>

                <div class="card-body">
    
                    <div class="card mb-3">
                        
                        @foreach ($rhus as $key => $rhu)
                            <div class="row g-0 mb-2 border rhu" data-id="{{ $rhu->id }}">

                                <div class="col-md-2 border-start border-light border-5 positio-relative">
                                    <span class="badge position-absolute p-2" style="background: rgba(0, 92, 128, 0.432); font-weight:900; font-size:24px; top:5px;left:5px;">0{{ $key+1 }}</span>
                                    <img style="height:100%; width:100%;"
                                    src="{{ 
                                        $rhu->clinic
                                        ? asset('storage/'. $rhu->clinic->clinic_profile)
                                        : asset('storage/clinics/default.jpg')
                                    }}"
                                        class="img-fluid" alt="...">
                                </div>

                                <div class="col-md-2 position-relative border-start border-primary border-5">
                                    <div class="card-body p-1 mt-2">
                                        <h6 class="card-title text-secondary">Name :</h6>
                                        <h5 class="card-title">{{ $rhu->firstname }} {{ $rhu->lastname }}</h5>
                                        <span class="card-text muted">{{ $rhu->gender }}</span>
                                    </div>
                                    <div class="position-absolute" style="top: 40px; right:10px">
                                        <i class="fa-solid fa-house-chimney-medical fa-2xl"
                                            style="font-size: 52px; color:rgba(6, 22, 167, 0.082)"></i>
                                    </div>
                                </div>

                                <div class="col-md-2 position-relative border-start border-light border-5">
                                    <div class="card-body p-1 mt-2">
                                        <h6 class="card-title text-secondary">RHU :</h6>
                                        <h5 class="card-title">{{ $rhu->clinic->clinic }}</h5>
                                        <p class="card-text muted">{{ $rhu->clinic->type }}</p>
                                    </div>
                                    <div class="position-absolute" style="top: 40px; right:10px">
                                        <i class="fa-solid fa-hospital fa-2xl"
                                            style="font-size: 52px; color:rgba(6, 22, 167, 0.082)"></i>
                                    </div>
                                </div>

                                <div class="col-md-2 position-relative border-start border-light border-5">
                                    <div class="card-body p-1 mt-2">
                                        <h6 class="card-title text-secondary">Role :</h6>
                                        <h5 class="card-title">{{ $rhu->clinic->role }}</h5>
                                        <p class="card-text muted">{{ $rhu->contact_no }}</p>
                                    </div>
                                    <div class="position-absolute" style="top: 40px; right:10px">
                                        <i class="fa-solid fa-user-doctor fa-2xl"
                                            style="font-size: 52px; color:rgba(6, 22, 167, 0.082)"></i>
                                    </div>
                                </div>
                                <div class="col-md-2 position-relative border-start border-light border-5">
                                    <div class="card-body p-1 mt-2">
                                        <h6 class="card-title text-secondary">Location :</h6>
                                        <h6 class="card-title">{{ $rhu->address }}</h6>
                                        {{-- <p class="card-text muted">ABC Street.</p> --}}
                                    </div>
                                    <div class="position-absolute" style="top: 40px; right:10px">
                                        <i class="fa-solid fa-map-location-dot fa-2xl"
                                            style="font-size: 52px; color:rgba(6, 22, 167, 0.082)"></i>
                                    </div>
                                </div>
                                <div class="col-md-2 position-relative border-start border-light border-5">
                                    <div class="card-body g-1" style="display: flex; gap:5px;">
        
                                        <div class="mt-3">
                                            <a style="cursor: pointer;" data-lat="{{ $rhu->lat }}" data-long="{{ $rhu->long }}" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Show on the map"
                                                class="border p-2 border-warning text-warning rounded"><i
                                                    class="fa-solid fa-location-dot fa-2xl"></i></a>
                                        </div>

                                        <div class="mt-3">
                                            <a style="cursor: pointer;" data-id="{{ $rhu->id }}" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Consultation Form" class="border p-2 border-primary rounded consultation-btn"><i
                                                    class="fa-solid fa-plus fa-2xl"></i></a>
                                        </div>
                                    </div>
                                    <div class="position-absolute" style="top: 40px; right:10px">
                                        <i class="fa-solid fa-location-arrow fa-2xl"
                                            style="font-size: 52px; color:rgba(6, 22, 167, 0.055)"></i>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                       
                    </div>

                </div>
            </div>
        </div> <!-- end col -->

        
    </div>
    
@endsection

@section('scripts')
    @include('patient.components.files.scripts')
    <script>
        $(document).ready(function(){
           
            var error = @json($errors->all());
            var status = @json(session('status'));
            console.log(error)

            // searching for events
            $('#search-rhu').on('input', function() {
                var searchInput = $(this).val().toLowerCase();
                $('.rhu').each(function() {
                var cardId = $(this).data('id').toString();
                // var cardText = $(this).text().toLowerCase();

                if (cardId.includes(searchInput)) {
                    $(this).fadeIn('slow');
                } else {
                    $(this).fadeOut('slow');
                }
                });
            });

            // function to open consulation form
            function openConsultationForm(){
                $(document).on('click', '.consultation-btn', function(){
                    var rhuId = $(this).data('id')
                    localStorage.setItem('reciever_id', parseInt(rhuId))
                    $('#hidden-rhu-id').val(parseInt(rhuId))
                    $('#consultation-Modal').modal('show')
                })
            }

            function swalOpen(status, error){
                if(status != null){
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: status,
                        showConfirmButton: false,
                        timer: 2000,
                        willClose: () => {
                            localStorage.setItem('reciever_id', 0)
                        }
                    });
                }

                if(error.length > 0){
                    Swal.fire({
                        position: "center",
                        icon: "error",
                        title: "Encountering an error, check your form details",
                        showConfirmButton: false,
                        timer: 2000,
                        willClose: () => {
                            $('#hidden-rhu-id').val(localStorage.getItem('reciever_id'))
                            $('#consultation-Modal').modal('show')
                        }
                    });

                    
                }

                
            }

            // init function 
            openConsultationForm()
            swalOpen(status, error)
        })
    </script>
@endsection
