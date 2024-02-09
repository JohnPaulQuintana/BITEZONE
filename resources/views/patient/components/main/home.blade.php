@extends('patient.index')

@section('head')
   @include('patient.components.files.head')
@endsection

@section('contents')
    <!-- start page title -->
    <div class="row">
        @include('patient.components.parts.title')
    </div>
    <!-- end page title -->

    <div class="row">
        @include('patient.components.parts.card')
    </div><!-- end row -->

    <div class="row mb-4">
        
        <div class="col-xl-12">
            <div class="card mb-0">
                <div class="card-body">
                    
                </div>
            </div>
        </div> <!-- end col -->

        
    </div> <!-- end row-->
    <div style='clear:both'></div>
@endsection

@section('scripts')
    @include('patient.components.files.scripts')
    <script>
        
    </script>

@endsection