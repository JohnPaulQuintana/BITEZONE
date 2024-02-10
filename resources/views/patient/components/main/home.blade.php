@extends('patient.index')

@section('head')
   @include('patient.components.files.head')

   <style>
        #activities-table{
            width:100%;border:0 solid transparent; padding:10px;font-weight:900;text-transform:capitalize;
            font-size: 18px;
            text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.63); /* Example text shadow */
        }

        
   </style>
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
                <div class="card-header">
                    <div class="card-title">
                        <h5> Recent Activities</h5>
                    </div>
                </div>
                <div class="card-body">
                   
                    <table id="activities-table" class="table activate-select dt-responsive nowrap w-100 text-center"></table>
                </div>
            </div>
        </div> <!-- end col -->
        {{-- <a href="http://"></a> --}}
        
    </div> <!-- end row-->
    <div style='clear:both'></div>
@endsection

@section('scripts')
    @include('patient.components.files.scripts')
    <script>
        // test data format
        var dataArray = [
        { id: 1, date: '2024-01-2', time: '10:35 AM', type: 'Anti-rabies vaccination', status: 'finished' },
        { id: 1, date: '2024-01-2', time: '10:35 AM', type: 'Anti-rabies vaccination', status: 'finished' },
        { id: 1, date: '2024-01-2', time: '10:35 AM', type: 'Anti-rabies vaccination', status: 'finished' },
        { id: 1, date: '2024-01-2', time: '10:35 AM', type: 'Anti-rabies vaccination', status: 'finished' },
        { id: 1, date: '2024-01-2', time: '10:35 AM', type: 'Anti-rabies vaccination', status: 'finished' },
        // Add more objects as needed
        ];
        // accessing the controller response
        // var dataToRender =  @ json($rejected);
        // console.log(dataToRender)

        $(document).ready(function(){
            $('#activities-table').DataTable({
                data: dataArray,
                "order": [],
                "columnDefs": [ {
                "targets"  : 'no-sort',
                "orderable": false,
                }],

                columns: [
                    
                    { title: 'Date : ', data: 'date' },
                    { title: 'Time : ', data: 'time' },
                    { title: 'Type : ', data: 'type' },
                    { title: 'Status : ', data: null,
                        render: function(data,type, row){
                            return `<span class="badge bg-success">${row.status}</span>`
                        }
                    },
                    { title: 'Action', data:null,
                        render: function(data,type,row){
                            return `
                                <a href="#" class="text-primary border p-1 rounded border-primary hover"><i class="fa-regular fa-folder-open fa-xl"></i></a>
                                <a href="#" class="text-danger border p-1 rounded border-danger"><i class="fa-solid fa-folder-minus fa-xl"></i></a>
                               
                                `
                        }
                    },
                    
                ],
                responsive: true,
                "initComplete": function (settings, json) {
                    $(this.api().table().container()).addClass('bs4');
                },
            });
        })

    </script>

@endsection