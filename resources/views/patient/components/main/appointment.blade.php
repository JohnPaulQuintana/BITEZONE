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
                        <li class="breadcrumb-item active text-dark">My Record's</li>
                    </ol>
                </div>
        
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-xl-12">
            <div class="card mb-0">
                <div class="card-header">
                    <div class="card-title">
                        <h5> My Record's</h5>
                    </div>
                </div>
                <div class="card-body">
                    <table id="my-records-table" class="table activate-select dt-responsive nowrap w-100 text-center border-0"></table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection

@section('scripts')
    @include('patient.components.files.scripts')

    <script>
        $(document).ready(function(){
            var renderMyRecords = @json($myRecords);
            // console.log(renderMyRecords)

            function populateMyRecordTable(records){
                $('#my-records-table').DataTable({
                    data: renderMyRecords,
                    "order": [],
                    "columnDefs": [ {
                    "targets"  : 'no-sort',
                    "orderable": false,
                    }],

                    columns: [
                        
                        { title: 'Consultation ID : ', data: null, 
                            render: function(data, type, row){
                                return `<span class="fw-bold">${generateRandomizedID()}${row.id}</span>`
                            }
                        },
                        
                        { title: 'Consultation Status : ', data: null, 
                            render: function(data, type, row){
                                return `<span class="badge bg-warning fw-bold">Waiting...</span>`
                            }
                        },

                        { title: 'RHU Staff : ', data: null, 
                            render: function(data, type, row){
                                return `<span class="fw-bold">${row.rhu_firstname} ${row.rhu_middlename} ${row.rhu_lastname}</span>`
                            }
                        },

                        { title: 'Facility : ', data: null, 
                            render: function(data, type, row){
                                return `<span class="fw-bold">${row.rhu_address}</span>`
                            }
                        },

                        { title: 'Date Submitted : ', data: null, 
                            render: function(data, type, row){
                                return `<span class="fw-bold">${row.date_submitted}</span>`
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
            }

            // randomize the ID to look good
            function generateRandomizedID(){
                // Prefix
                var prefix = 'A';
                // Random number part
                var randomNumber = Math.floor(Math.random() * 10000000);

                // Combine all parts to form the ID
                var generatedID = prefix + randomNumber + '-';
                return generatedID;
            }

            populateMyRecordTable(renderMyRecords)
        })
    </script>
@endsection