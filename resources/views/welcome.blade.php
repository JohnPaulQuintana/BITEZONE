<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

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

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>



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
    <header class="header z-20">

        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row flex justify-between">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="index.html"><img class="h-14 pb-3" src="img/logo.png" alt="#"></a>
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
                                                <li class="li-nav active"><a href="{{ route('admin.dashboard') }}">Back to
                                                        dashboard</a></li>
                                            @else
                                                <li class="li-nav active"><a href="#">Home</a></li>
                                                <li class="li-nav"><a href="#location">Location </a></li>
                                                <li class="li-nav"><a href="#services">Services </a></li>
                                                @if (Route::has('register'))
                                                    <li class="li-nav"><a id="register" data-modal-target="register-modal"
                                                            data-modal-toggle="register-modal"
                                                            class="cursor-pointer">Register</a></li>
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
    @include('popups.login')


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

    {{-- map js --}}
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    {{-- custom js --}}
    <script>
        var user = @json(Auth::user());
        console.log(user)
        $(document).ready(function() {
            // Access CSRF token in JavaScript
            const csrfToken = $('meta[name="csrf-token"]').attr('content');

            // set the modal menu element
            let $targetRegister = document.getElementById('register-modal');
            let $targetLogin = document.getElementById('login-modal');
            let modal;
            // options with default values
            const options = {
                placement: 'bottom-right',
                backdrop: 'static',
                backdropClasses: 'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40',
                closable: false,
                onHide: () => {
                    console.log('modal is hidden');
                    location.reload();
                },
                onShow: (modal) => {
                    console.log(modal);
                    switch (modal._instanceId) {

                        case 'login-modal':
                            makeDynamicAjaxRequest('POST', $('#login-form'), '/login', '', function(error,
                                response) {
                                if (error) {
                                    console.log(error)
                                    $('#username-login-error').text(error.message)
                                    $('#password-login-error').text(error.message)

                                    setTimeout(() => {
                                        $('#username-login-error').text('')
                                        $('#password-login-error').text('')
                                    }, 5000);
                                } else {
                                    location.reload()
                                }

                            })
                            break;

                        case 'register-modal':
                            makeDynamicAjaxRequest('POST', $('#register-form'), '/register', '', function(
                                error, response) {
                                if (error) {
                                    console.log(error)
                                    $('#firstname-error').text(error.errors.firstname)
                                    $('#lastname-error').text(error.errors.lastname)
                                    $('#age-error').text(error.errors.age)
                                    $('#address-error').text(error.errors.address)
                                    $('#contact_no-error').text(error.errors.contact_no)
                                    $('#gender-error').text(error.errors.gender)
                                    $('#username-error').text(error.errors.username)
                                    $('#email-error').text(error.errors.email)
                                    $('#password-error').text(error.errors.password)
                                    $('#password_confirmation-error').text(error.errors.password)
                                    $('#coordinates-error').text(error.errors.coordinates)

                                    setTimeout(() => {
                                        $('#firstname-error').text('')
                                        $('#lastname-error').text('')
                                        $('#age-error').text('')
                                        $('#address-error').text('')
                                        $('#contact_no-error').text('')
                                        $('#gender-error').text('')
                                        $('#username-error').text('')
                                        $('#email-error').text('')
                                        $('#password-error').text('')
                                        $('#password_confirmation-error').text('')
                                        $('#coordinates-error').text('')
                                    }, 5000);
                                } else {
                                    // location.reload()
                                }
                            })
                            break;

                        default:
                            break;
                    }


                },
                onToggle: () => {
                    console.log('modal has been toggled');
                }
            };

            // open register
            function openRegisterModal() {
                // open Register modal
                $(document).on('click', '#register', function() {

                    modal = new Modal($targetRegister, options);
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
                $(document).on('click', '#register-close', function() {

                    modal = new Modal($targetRegister, options);
                    // show the modal
                    modal.hide();
                })
            }

            // open login
            function openLoginModal() {
                // open Register modal
                $(document).on('click', '.login-btn', function() {

                    modal = new Modal($targetLogin, options);
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
                $(document).on('click', '#login-close', function() {

                    modal = new Modal($targetLogin, options);
                    // show the modal
                    modal.hide();
                })
            }

            //toogle active class
            $(document).on('click', '.li-nav', function() {
                // Remove active class from all li elements
                $(".li-nav").removeClass("active");

                // Add active class to the clicked li
                $(this).addClass("active");
            })

            // rendering leaftlets map
            function renderMap() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var lat = position.coords.latitude;
                        var long = position.coords.longitude;
                        // console.log(`Latitude: ${lat}, Longitude: ${long}`);

                        // Set up the map after obtaining location
                        var map = L.map('map').setView([lat, long], 15);

                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '© OpenStreetMap contributors'
                        }).addTo(map);

                        // Add a marker for your location
                        L.marker([lat, long]).addTo(map)
                            .bindPopup('Your Location')
                            .openPopup();

                        // Add a circle to represent your location with a radius
                        var circle = L.circle([lat, long], {
                            color: 'blue',
                            fillColor: 'blue',
                            fillOpacity: 0.2,
                            radius: 500 // You can set your desired radius here
                        }).addTo(map);

                        // Query Overpass API for healthcare facilities within the circle
                        var overpassEndpoint = 'https://overpass-api.de/api/interpreter';

                        var query = `[out:json];
                                (
                                    node["amenity"="clinic"](around:500,${lat},${long});
                                    way["amenity"="clinic"](around:500,${lat},${long});
                                    relation["amenity"="clinic"](around:500,${lat},${long});
                                );
                                out center;`;

                        fetch(overpassEndpoint, {
                                method: 'POST',
                                body: query
                            })
                            .then(response => response.json())
                            .then(data => {
                                // Process and display the results
                                // console.log(data);
                                var staticData = [{
                                        'lat': 14.685397965112468,
                                        'lon': 120.53808689117433
                                    },
                                    {
                                        'lat': 14.68311471604652,
                                        'lon': 120.5427646636963
                                    },
                                    {
                                        'lat': 14.681495670443496,
                                        'lon': 120.54158449172974
                                    },
                                    {
                                        'lat': 14.680457814393256,
                                        'lon': 120.53722858428956
                                    },
                                    {
                                        'lat': 14.677178156903711,
                                        'lon': 120.53564071655275
                                    },
                                    {
                                        'lat': 14.678382087517521,
                                        'lon': 120.53040504455568
                                    },
                                ]
                                // Add markers and details for each clinic found
                                staticData.forEach(element => {
                                    // console.log(element);

                                    var clinicLatLng = [element.lat, element.lon];

                                    // Add a marker for each clinic
                                    var clinicMarker = L.marker(clinicLatLng).addTo(map)
                                        .bindPopup("Clinic");

                                    // Add clinic details to the popup
                                    //             clinicMarker.bindPopup(
                                    //                 `<strong>Name:</strong> ${element.tags.name || 'Unnamed Clinic'}<br>
                                //  <strong>Type:</strong> ${element.tags.amenity || 'N/A'}<br>
                                //  <strong>Distance:</strong> ${clinicLatLng.distanceTo([lat, long]).toFixed(2)} meters`
                                    //             );
                                });

                                // Add a polyline connecting your location to clinics
                                var pathCoordinates = data.elements.map(element => [element.center.lat,
                                    element.center
                                    .lon
                                ]);

                                // Add your location to the path
                                pathCoordinates.unshift([lat, long]);

                                L.polyline(pathCoordinates, {
                                    color: 'red'
                                }).addTo(map);
                            })
                            .catch(error => {
                                console.log('Error fetching data:', error);
                                // alert('Error fetching data. Please try again.');
                            });

                        // Add click event listener to the map
                        map.on('click', function(event) {
                            var clickedLat = event.latlng.lat;
                            var clickedLong = event.latlng.lng;
                            //   console.log(`Clicked Latitude: ${clickedLat}, Clicked Longitude: ${clickedLong}`);
                            // You can perform any action with the clicked coordinates here
                            alert(
                                `Clicked Latitude: ${clickedLat}, Clicked Longitude: ${clickedLong}`);
                        });
                    }, function(error) {
                        console.error(`Error getting location: ${error.message}`);
                        alert(
                        'Error getting your location. Please enable location services and try again.');
                    });
                } else {
                    console.error("Geolocation is not supported by this browser.");
                    alert('Geolocation is not supported by this browser.');
                }
            }

            // Reusable function for dynamic AJAX requests
            function makeDynamicAjaxRequest(type, formId, endpoint, additionalData, callback) {
                const csrfToken = $('meta[name="csrf-token"]').attr('content');

                $(formId).submit(function(event) {
                    event.preventDefault();
                    // Determine which button was clicked
                    var userType = $(this).find('input[type=submit]:focus').val();
                    // Include userType in the data
                    var formData = new FormData(this);
                    formData.append('type', userType);
                    $.ajax({
                        type: type, // or 'GET' depending on your form method
                        url: endpoint,
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-Token': csrfToken,
                        },
                        success: function(response) {
                            // Handle the success response
                            console.log('Server response:', response);
                            if (callback && typeof callback === 'function') {
                                callback(null, response); // Pass response to the callback
                            }
                        },
                        error: function(error) {
                            // Handle errors if the AJAX request fails
                            if (callback && typeof callback === 'function') {
                                callback(error.responseJSON,
                                null); // Pass error to the callback
                            }
                        }
                    });
                });
            }

            // redirect
            function redirectTo(){
                switch (user.role) {
                    case 0:
                        window.location.href = '/patient'
                        break;
                    case 1:
                        window.location.href = '/dashboard'
                        break;
                
                    default:
                        location.reload()
                        break;
                }
                
            }


            openRegisterModal()
            openLoginModal()
            renderMap()
            redirectTo()

        })
    </script>

    {{-- @yield('scripts') --}}
</body>

</html>
