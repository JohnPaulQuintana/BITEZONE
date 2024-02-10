@extends('patient.index')

@section('head')
   @include('patient.components.files.head')

   <style>
        .advertisement-container, .seminar-container{
            height: 60vh; overflow:auto;
            cursor: pointer;
            
        }
        .advertisement-card, .seminar-card{
            /* max-width: 540px; */
            transition: transform 0.3s ease-in-out;
        }
        .advertisement-card:hover{
            z-index: 5;
            transform: scale(1.05)
        }
        .seminar-card:hover{
            z-index: 5;
            transform: scale(1.05)
        }
        .advertisement-container::-webkit-scrollbar{
            width: 0;
        }
        .seminar-container::-webkit-scrollbar{
            width: 0;
        }
        .status-badge{
            position: absolute;
            top: 5px;
            right: 5px;
            padding: 5px;
        }
        .status-icon{
            position: absolute;
            font-size: 14px;
            color: rgb(255, 255, 255);
            top: 5px;
            right: 40px;
        }

        .seminar-date{
            border: 1px dashed rgb(1, 116, 247);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .seminar-day{
            font-size: 4em;
            color: rgb(1, 116, 247);
            border-bottom: 2px solid black;
        }

        .seminar-month{
            font-size: 1.5em;
            color: rgb(1, 116, 247);
        }

        /* .seminar-time{
            font-size: 1.5em;
            font-weight: 900;
            border-bottom: 2px solid black;
        }
        .seminar-start{
            font-size: 1em;
            margin-top: -10px;
        } */
        .seminar-btn{
            position: absolute;
            bottom: 5px;
            right: 5px;
        }
        .seminar-joined-btn{
            position: absolute;
            bottom: 5px;
            right: 90px;
        }

        .ads-title, .dos-title, .seminar-title{
            width: fit-content;
            /* margin: auto; */
        }

        .card-title{
            display: flex;
            justify-content: space-between;
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
                        <li class="breadcrumb-item"><a href="javascript: void(0);" class="text-primary">BITEZONE</a></li>
                        <li class="breadcrumb-item active text-primary">Announcement</li>
                    </ol>
                </div>
        
            </div>
        </div>
    </div>

    <div class="row mb-4">
        
        <div class="col-xl-6">
            <div class="card mb-2 p-2">
                <div class="card-title">
                    <h5 class="border p-2 rounded text-danger ads-title">Advertisements</h5>
                    <div class="col-auto">
                        <input type="text" class="form-control search-input-ads" id="search-input-ads" placeholder="Search advertisement">
                    </div>
                </div>
                <div class="card-body advertisement-container">

                    <div data-id="ads-1" class="card position-relative mb-3 border border-top-0 border-end-0 border-bottom-0 border-danger border-5 advertisement-card">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="https://w7.pngwing.com/pngs/459/145/png-transparent-advertising-industry-marketing-advertising-agency-marketing-company-content-marketing-text.png" class="img-fluid rounded-start" alt="advertisement" style="height:100%; width:100%">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              <button type="button" class="btn btn-danger btn-sm seminar-btn">read more</button>
                            </div>
                          </div>
                        </div>

                        <span class="badge bg-danger status-badge">New</span>
                    </div>

                    <div data-id="ads-2" class="card position-relative mb-3 border border-top-0 border-end-0 border-bottom-0 border-danger border-5 advertisement-card">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="https://w7.pngwing.com/pngs/459/145/png-transparent-advertising-industry-marketing-advertising-agency-marketing-company-content-marketing-text.png" class="img-fluid rounded-start" alt="advertisement" style="height:100%; width:100%">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              <button type="button" class="btn btn-danger btn-sm seminar-btn">read more</button>
                            </div>
                          </div>
                        </div>

                        <span class="badge bg-danger status-badge">New</span>
                    </div>

                   
                </div>
            </div>
        </div> <!-- end col -->


        <div class="col-xl-6">
            <div class="card mb-2 p-2">
                <div class="card-title">
                    <h5 class="border p-2 rounded text-primary seminar-title">Featured event's</h5>
                    <div class="col-auto">
                        <input type="text" class="form-control search-input-events" id="search-input-events" placeholder="Search event's">
                    </div>
                </div>
                <div class="card-body seminar-container">

                    <div data-id="events-1" class="card position-relative mb-3 border border-top-0 border-end-0 border-bottom-0 border-primary border-5 seminar-card">
                        <div class="row g-0">
                          <div class="col-md-4 seminar-date">
                            <h1 class="seminar-day">26</h1>
                            <p class="seminar-month">Feb</p>
                            {{-- <p class="seminar-time">10 AM</p>
                            <p class="seminar-start">Time</p> --}}
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Seminar title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              <button type="button" class="btn btn-primary btn-sm seminar-btn">read more</button>
                            </div>
                          </div>
                        </div>
                        <span class="badge bg-primary status-badge">Free</span>
                        <span class="badge bg-warning status-icon">
                            <i class="fa-solid fa-clock fa-spin"></i>
                            On-going
                        </span>
                        <a href="#" type="button" class="btn btn-success text-white btn-sm seminar-joined-btn">Join Now</a>
                    </div>

                    <div data-id="events-2" class="card position-relative mb-3 border border-top-0 border-end-0 border-bottom-0 border-primary border-5 seminar-card">
                        <div class="row g-0">
                          <div class="col-md-4 seminar-date">
                            <h1 class="seminar-day">25</h1>
                            <p class="seminar-month">Feb</p>
                            {{-- <p class="seminar-time">8 AM</p>
                            <p class="seminar-start">Time</p> --}}
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Seminar title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              <button type="button" class="btn btn-primary btn-sm seminar-btn">read more</button>
                            </div>
                          </div>
                        </div>
                        <span class="badge bg-primary status-badge">free</span>
                    </div>

                    
                </div>
            </div>
        </div> <!-- end col -->

        
    </div> <!-- end row-->
    <div style='clear:both'></div>
@endsection

@section('scripts')
    @include('patient.components.files.scripts')
    <script>

        $(document).ready(function() {
            // searching for events
            $('#search-input-events').on('input', function() {
                var searchInput = $(this).val().toLowerCase();
                $('.seminar-card').each(function() {
                var cardId = $(this).data('id').toString();
                // var cardText = $(this).text().toLowerCase();

                if (cardId.includes(searchInput)) {
                    $(this).fadeIn('slow');
                } else {
                    $(this).fadeOut('slow');
                }
                });
            });

            // searching for ads
            $('#search-input-ads').on('input', function() {
                var searchInput = $(this).val().toLowerCase();
                $('.advertisement-card').each(function() {
                var cardId = $(this).data('id').toString();
                // var cardText = $(this).text().toLowerCase();

                if (cardId.includes(searchInput)) {
                    $(this).fadeIn('slow');
                } else {
                    $(this).fadeOut('slow');
                }
                });
            });
        });

    </script>

@endsection