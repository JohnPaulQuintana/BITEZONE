<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>BITEZONE</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <link rel="stylesheet" href="css/responsive.css">


        {{-- font-awesome --}}
        {{-- <link rel="stylesheet" href="{{ asset('font-awesome/all.min.css') }}"> --}}
        
        {{-- box-icons --}}
        <link rel="stylesheet" href="{{ asset('box-icons/boxicons.min.css') }}">

        {{-- flowbite --}}
        <link rel="stylesheet" href="{{ asset('flowbite/flowbite.min.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        {{-- xustom css --}}
        {{-- <style>
            body{
                padding: 0;
                margin: 0;
                box-sizing: border-box
            }
            #logo{
                height: 45px;
            }
            
        </style> --}}
    </head>
    <body>
        {{-- header --}}
        {{-- <header class="bg-red-500 border-red-300 text-white border-b-2 flex gap-2 justify-between p-2 fixed w-full z-50">
            <div class="flex gap-2">
                <i class="fa-solid fa-paw fa-2xl"></i>
                <h1 class="font-bold text-4xl"> BITEZONE</h1>
            </div>
            <div>
                @if (Route::has('login'))
                    <ul class="flex gap-8 text-xl font-mono font-bold">
                        @auth
                            <li class="cursor-pointer hover:text-red-200 p-2"><i class="fa-solid fa-right-to-bracket"></i> <a href="{{ url('/dashboard') }}">Back To Dashboard</a></li>
                            @else
                            <li class="cursor-pointer hover:text-red-200 p-2"><i class="fa-solid fa-location-dot"></i> <a href="{{ route('location') }}"> Location</a></li>
                            <li class="cursor-pointer hover:text-red-200 p-2"><i class="fa-solid fa-house"></i> <a href="{{ route('home') }}">Home</a></li>
                            <li class="cursor-pointer hover:text-red-200 p-2"><i class="fa-solid fa-hospital-user"></i> <a href="{{ route('services') }}">Services</a></li>
                            <li class="cursor-pointer hover:text-red-200 p-2"><i class="fa-solid fa-hospital"></i> <a href="{{ route('about') }}">About</a></li>
                            <li class="cursor-pointer bg-white text-red-400 rounded-md hover:text-red-700 p-2 border">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            </li>
                        @endauth
                    </ul>
                @endif
            </div>
            
        </header>
        <div class="">
           
            <div>    
                   ''yield dito   
            </div>


            
        </div> --}}


        {{-- updates --}}
        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Header Area -->
		<header class="header z-20" >
			
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row flex justify-between">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.html"><img src="img/logo.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12 flex justify-end">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
                                            @if (Route::has('login'))
                                                @auth
                                                    <li class="active"><a href="#">Back to dashboard</a></li>
                                                    @else
                                                    <li class="active"><a href="#">Home</a></li>
                                                    <li><a href="#location">Location </a></li>
                                                    <li><a href="#services">Services </a></li>
                                                    @if (Route::has('register'))
                                                        <li><a id="register" data-modal-target="register-modal" class="cursor-pointer">Register</a></li>    
                                                    @endif
                                                    
                                                @endauth
                                                
                                            @endif
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							{{-- <div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="appointment.html" class="btn">Book Appointment</a>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->

       @yield('contents')

       @include('popups.register')


        {{-- scripts --}}
        {{-- <script src="{{ asset('font-awesome/all.min.js') }}"></script> --}}

        <!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
        {{-- box-icons --}}
        <script src="{{ asset('box-icons/boxicons.js') }}"></script>

         {{-- scripts --}}
         <script src="{{ asset('font-awesome/all.min.js') }}"></script>

        {{-- flowbite --}}
        <script src="{{ asset('flowbite/flowbite.min.js') }}"></script>


        {{-- custom js --}}
        <script>
            $(document).ready(function(){
                // set the modal menu element
                const $targetEl = document.getElementById('register-modal');
                let modal;
                // options with default values
                const options = {
                    placement: 'bottom-right',
                    backdrop: 'static',
                    backdropClasses: 'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40',
                    closable: false,
                    onHide: () => {
                        console.log('modal is hidden');
                    },
                    onShow: () => {
                        console.log('modal is shown');
                    },
                    onToggle: () => {
                        console.log('modal has been toggled');
                    }
                };

                // open Register modal
                $(document).on('click', '#register', function(){
                   
                    modal = new Modal($targetEl, options);
                    // show the modal
                    modal.show();

                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(function(position) {
                            var lat = position.coords.latitude;
                            var long = position.coords.longitude;
                            $('#coordinates').val(`${lat},${long}`)
                        })
                    }

                })

                // close register modal
                $(document).on('click', '#register-close', function(){
                   
                    modal = new Modal($targetEl, options);
                    // show the modal
                    modal.hide();
                })

                
            })
        </script>

        {{-- @yield('scripts') --}}
    </body>
</html>
