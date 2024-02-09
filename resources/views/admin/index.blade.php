<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('head')
    <title>{{ config('app.name', 'BITEZONE') }}</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body>

    <div id="layout-wrapper">

        <header id="page-topbar">
            @include('admin.components.header.header')
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            @include('admin.components.sidebar.sidebar')
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        @yield('contents')
                    </div>
                    <!-- end row -->
                </div>

            </div>
            <!-- End Page-content -->

            <footer class="footer">
                @include('admin.components.footer.footer')
            </footer>

        </div>
        <!-- end main content-->

    </div>

    @yield('scripts')

    <script>
        $(document).ready(function() {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $('.noti-dot').css({
                'display': 'none'
            })

            function getNotification() {
                // Make the AJAX request with CSRF token in headers
                // Get the CSRF token from the hidden input field
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "GET",
                    url: "/notification",
                    headers: {
                        "X-CSRF-TOKEN": csrfToken
                    },
                    success: function(response) {
                        // Handle the AJAX response here
                        var renderNotif = ''
                        // Using a conditional statement
                        if (response.notifications.length > 0) {
                            $('noti-dot').css({
                                'display': 'block'
                            })
                            $('.count-notif').text(response.notifications.length)
                            response.notifications.forEach(notif => {
                                renderNotif += `
                                    <a class="text-reset notification-item" data-id="${notif.id}" style="cursor:pointer;">
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="mb-1 text-primary">${notif.fullname}</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">${notif.action}</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 minutes ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                `
                            });
                            $('.notif-container').html(renderNotif)
                            $('.noti-dot').css({
                                'display': 'flex'
                            })

                            $('.notification-item').on("click", function() {
                                updateNotif($(this).data('id'));
                            })

                        } else {

                            $('.noti-dot').css({
                                'display': 'none'
                            })
                        }
                    },
                    error: function(error) {
                        // Handle AJAX error here
                        console.error(error);
                    }
                });
            }

            function updateNotif($id) {
                // alert(csrfToken)
                $.ajax({
                    type: "POST",
                    url: "/notification-update",
                    headers: {
                        "X-CSRF-TOKEN": csrfToken
                    },
                    data: {
                        'id': $id
                    },
                    success: function(response) {
                        // Redirect to the desired URL using JavaScript
                        location.reload()
                    },
                    error: function(err) {
                        console.log(err)
                    }
                })
            }

            function pusherFunction() {
                // Enable pusher logging - don't include this in production
                Pusher.logToConsole = false;
                var pusher = new Pusher('38d8287d081fbd212033', {
                    cluster: 'ap1'
                });
                var channel = pusher.subscribe('notify-admin');
                channel.bind('initialize-notif', function(data) {
                    // means new patients is registered
                    if (data.notif.role == 0) {
                        getNotification()
                    }
                });
            }

            function renderPatientLocation() {

                var coord = @json(Auth::user());

                // Set up the map after obtaining location
                var map = L.map('map').setView([parseFloat(coord.lat), parseFloat(coord.long)], 15);

                // set icon
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors'
                }).addTo(map);

                // Add a marker for your location
                L.marker([parseFloat(coord.lat), parseFloat(coord.long)]).addTo(map)
                    .bindPopup('Your Location')
                    .openPopup();

                // Add a circle to represent your location with a radius
                var circle = L.circle([parseFloat(coord.lat), parseFloat(coord.long)], {
                    color: 'blue',
                    fillColor: 'blue',
                    fillOpacity: 0.2,
                    radius: 500 // You can set your desired radius here
                }).addTo(map);

                $.ajax({
                    type: "GET",
                    url: "/patient-coordinates",
                    headers: {
                        "X-CSRF-TOKEN": csrfToken
                    },
                    success: function(response) {
                        response.patients.forEach(patient => {
                            var clinicLatLng = [parseFloat(patient.lat),parseFloat(patient.long)];
                            // Add a marker for each clinic
                            var clinicMarker = L.marker(clinicLatLng).addTo(map)
                                .bindPopup("Clinic");

                            // Add clinic details to the popup
                            clinicMarker.bindPopup(`<strong>Name:</strong> ${patient.firstname}<br>`);
                        });
                    },
                    error: function(err) {
                        console.log(err)
                    }
                })

                // Add click event listener to the map
                map.on('click', function(event) {
                    var clickedLat = event.latlng.lat;
                    var clickedLong = event.latlng.lng;
                    //   console.log(`Clicked Latitude: ${clickedLat}, Clicked Longitude: ${clickedLong}`);
                    // You can perform any action with the clicked coordinates here
                    alert(
                        `Clicked Latitude: ${clickedLat}, Clicked Longitude: ${clickedLong}`);
                });
                // }
            }

            // init
            pusherFunction()
            getNotification()
            renderPatientLocation()
        })
    </script>
</body>

</html>
