@extends('admin.index')

@section('head')
   @include('admin.components.file.head')
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
                <div class="card-body">
                    <div class="h-50" id="calendar" style="height: 30vh;"></div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-4">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="h-50" id="calendar" style="height: 30vh;"></div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row-->
    <div style='clear:both'></div>
@endsection

@section('scripts')
    @include('admin.components.file.scripts')
    <script>
        
    </script>

@endsection