@extends('patient.index')

@section('head')
    @include('patient.components.files.head')

@endsection

@section('contents')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Dashboard</h4>
        
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">BITEZONE</a></li>
                        <li class="breadcrumb-item active">User's Profile</li>
                    </ol>
                </div>
        
            </div>
        </div>
    </div>

    <div class="row">
        {{-- <x-app-layout> --}}
            <div class="py-12">
                <div class="container">
                    <div class="row gx-4 gy-6">
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="p-4 bg-white shadow rounded-lg">
                                <div class="max-w-xl">
                                    @include('patient.components.profile.partials.update-profile-information-form')
                                </div>
                            </div>
                        </div>
                
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="p-4 bg-white shadow rounded-lg">
                                <div class="max-w-xl">
                                    @include('patient.components.profile.partials.update-password-form')
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        {{-- </x-app-layout> --}}
        <!-- end col -->
    </div>

@endsection

@section('scripts')
    @include('patient.components.files.scripts')
    <script>
        $(document).ready(function(){
            var status = @json(session('status'));
            if(status != null){
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: status,
                    showConfirmButton: false,
                    timer: 2000
                });
            }
           
                
        })
    </script>
@endsection
