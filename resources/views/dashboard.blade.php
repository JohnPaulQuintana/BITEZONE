@extends('layouts.app')

@section('contents')
    <div class="p-4 sm:ml-64">
        {{-- card --}}
        <div class="p-4 mt-10 dark:border-gray-700">

            <div class="grid grid-cols-4 gap-4 mb-4">

                <div
                    class="flex items-center justify-between border-l-8 border-red-500 p-10 h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <i class="fa-solid fa-users fa-2xl text-red-500 border p-5"></i>
                    <span class="grid text-center">
                        <span class="font-bold text-4xl border-b-2 border-red-500">100</span>
                        Total Patient's
                    </span>
                </div>

                <div
                    class="flex items-center justify-between border-l-8 border-blue-500 p-10 h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <i class="fa-solid fa-calendar-days fa-2xl text-blue-500 border p-5"></i>
                    <span class="grid text-center">
                        <span class="font-bold text-4xl border-b-2 border-blue-500">100</span>
                        Seminar's
                    </span>
                </div>

                <div
                    class="flex items-center justify-between border-l-8 border-red-500 p-10 h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <i class="fa-solid fa-users fa-2xl text-red-500 border p-5"></i>
                    <span class="grid text-center">
                        <span class="font-bold text-4xl border-b-2 border-red-500">100</span>
                        Total Patient's
                    </span>
                </div>

                <div
                    class="flex items-center justify-between border-l-8 border-red-500 p-10 h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <i class="fa-solid fa-users fa-2xl text-red-500 border p-5"></i>
                    <span class="grid text-center">
                        <span class="font-bold text-4xl border-b-2 border-red-500">100</span>
                        Total Patient's
                    </span>
                </div>


            </div>
        </div>

        <div class="h-fit mb-4 rounded bg-gray-50 dark:bg-gray-800 overflow-hidden">

            <div class="p-2">
                <h1 class="font-bold text-2xl text-gray-800 border-l-8 border-blue-400 pl-2"> Patient's Location on map</h1>
            </div>

            <div id="map" style="height: 500px;" class="w-full z-0"></div>

        </div>

    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
           
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('38d8287d081fbd212033', {
                cluster: 'ap1'
            });

            var channel = pusher.subscribe('notify-admin');
            channel.bind('initialize-notif', function(data) {
                // notif: firstname: "john paul"
                // id: 10
                // lastname: "Yulde"
                // middlename: "yulde"
                console.log(data.notif);
                var renderNotif = ''
               
                if(data.notif.role == 0){
                    renderNotif += `<a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex-shrink-0">
                            <i class="fa-solid fa-user-plus text-blue-500 rounded-full w-11 h-11"></i>
                            
                            <div
                                class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-gray-900 border border-white rounded-full dark:border-gray-800">
                                <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 18">
                                    <path
                                        d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="w-full ps-3">
                            <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                    class="font-semibold text-gray-900 dark:text-white">${data.notif.firstname} ${data.notif.lastname}</span> <span
                                    class="font-medium text-gray-900 dark:text-white">has registered to bitezone</span>.</div>
                            <div class="text-xs text-blue-600 dark:text-blue-500">1 minutes ago</div>
                        </div>
                    </a>`

                    
                }
                $('#notif-container').html(renderNotif)
                $('#dot').removeClass('hidden').addClass('block')
            });

            // my location
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
                            console.log(data);
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
                        alert(`Clicked Latitude: ${clickedLat}, Clicked Longitude: ${clickedLong}`);
                    });
                }, function(error) {
                    console.error(`Error getting location: ${error.message}`);
                    alert('Error getting your location. Please enable location services and try again.');
                });
            } else {
                console.error("Geolocation is not supported by this browser.");
                alert('Geolocation is not supported by this browser.');
            }
        })
    </script>
@endsection
