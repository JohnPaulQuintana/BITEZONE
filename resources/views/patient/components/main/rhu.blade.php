@extends('patient.index')

@section('head')
    @include('patient.components.files.head')
@endsection

@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 text-primary">Dashboard</h4>
        
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);" class="text-dark">BITEZONE</a></li>
                        <li class="breadcrumb-item active text-dark">Rural Health Unit</li>
                    </ol>
                </div>
        
            </div>
        </div>
    </div>

    <div class="row mb-4">

    </div>
@endsection

@section('scripts')
    @include('patient.components.files.scripts')
@endsection