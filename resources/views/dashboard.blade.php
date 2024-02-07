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
            <div id="map" style="height: 500px;" class="w-full"></div>
           
        </div>

    </div>
    </div>
@endsection

@section('scripts')
    <script>
        // my location
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var lat = position.coords.latitude;
                var long = position.coords.longitude;
                console.log(`Latitude: ${lat}, Longitude: ${long}`);

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
                        var staticData = [
                            {'lat': 14.685397965112468, 'lon': 120.53808689117433},
                            {'lat': 14.68311471604652, 'lon': 120.5427646636963},
                            {'lat': 14.681495670443496, 'lon': 120.54158449172974},
                            {'lat': 14.680457814393256, 'lon': 120.53722858428956},
                            {'lat': 14.677178156903711, 'lon': 120.53564071655275},
                            {'lat': 14.678382087517521, 'lon': 120.53040504455568},
                        ]
                        // Add markers and details for each clinic found
                        staticData.forEach(element => {
                            console.log(element);

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
                        var pathCoordinates = data.elements.map(element => [element.center.lat, element.center
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
          console.log(`Clicked Latitude: ${clickedLat}, Clicked Longitude: ${clickedLong}`);
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
    </script>
@endsection
