@extends('layouts.master')

<head>
    <title>Cab Service Homepage | UMPCab</title>

    @include('user.dashboard.css')

    {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/> --}}

     <!-- Make sure you put this AFTER Leaflet's CSS -->
    {{-- <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script> --}}

    <!-- Load Leaflet from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" crossorigin=""></script>

    <!-- Load Esri Leaflet from CDN -->
    <script src="https://unpkg.com/esri-leaflet@^3.0.8/dist/esri-leaflet.js"></script>
    <script src="https://unpkg.com/esri-leaflet-vector@4.0.0/dist/esri-leaflet-vector.js"></script>

    <!-- Load Esri Leaflet Geocoder from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@^3.1.3/dist/esri-leaflet-geocoder.css">
    <script src="https://unpkg.com/esri-leaflet-geocoder@^3.1.3/dist/esri-leaflet-geocoder.js"></script>

    <!-- Load Esri Leaflet Vector from CDN -->
    <script src="https://unpkg.com/esri-leaflet-vector@4.0.0/dist/esri-leaflet-vector.js" crossorigin=""></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    {{-- geometry util --}}
    <script src="leaflet.geometryutil.js"></script>
    <script src="https://npmcdn.com/leaflet-geometryutil"></script>

    <!-- Load ArcGIS REST JS from CDN -->
    <script src="https://unpkg.com/@esri/arcgis-rest-request@4.0.0/dist/bundled/request.umd.js"></script>
    <script src="https://unpkg.com/@esri/arcgis-rest-routing@4.0.0/dist/bundled/routing.umd.js"></script>

    <style>
        /* GOOGLE MAP */
        #map {
            height: 100%;
            /* height: 180px; */
        }

        #info-pane {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 400;
            padding: 1em;
            background: white;
            text-align: right;
            max-width: 250px;
        }

        /* 
        * Optional: Makes the sample page fill the window. 
        */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .custom-map-control-button {
            background-color: #fff;
            border: 0;
            border-radius: 2px;
            box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
            margin: 10px;
            padding: 0 0.5em;
            font: 400 18px Roboto, Arial, sans-serif;
            overflow: hidden;
            height: 40px;
            cursor: pointer;
        }

        .custom-map-control-button:hover {
            background: rgb(235, 235, 235);
        }

        #viewDiv {
            padding: 0;
            margin: 0;
            height: 100%;
            width: 100%;
        }

        #directions {
            /* position: absolute; */
            z-index: 1000;
            width: 30%;
            max-height: 50%;
            right: 20px;
            top: 20px;
            overflow-y: auto; /* Show a scrollbar if needed */
            background: white;
            font-family: Arial, Helvetica, Verdana;
            line-height: 1.5;
            font-size: 14px;
            padding: 10px;
        }
    </style>
    
</head>

<x-app-layout>

<p class="text-center p-2" style="color:black;background-color:#FCDA37;"><strong>Cab Service Homepage</strong></p>

{{-- <div class="container-fluid rounded"> --}}

    <div class="row">
        <div class="text-center">
            <span><strong>How to book a cab:</strong></span>
        </div>
        
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <p class="card-title text-center">1</p>
                    <p class="text-sm text-black">You can choose your pick-up & drop-off location by clicking anywhere on the map</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <p class="card-title text-center">2</p>
                    <p class="text-sm text-black">Click on the <strong>'Search Car'</strong> button and a list of available cars will be displayed</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <p class="card-title text-center">3</p>
                    <p class="text-sm text-black">Click <strong>'Book'</strong> on any car that you want to ride to proceed to the booking page</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Filter for google map -->
        <div class="col-md-3 m-2 p-4 shadow rounded" style="background-color:white;">
            <!-- Return to map button -->
            <div class="top_link p-1">
                {{-- back button --}}
                <div class="mb-2">
                    <button type="button" class="btn btn-success btn-rounded btn-icon" onclick="window.location.href='/'">
                        <i class="mdi mdi-arrow-left"></i>
                      </button>
                </div>
            </div>
            <h3 class="text-center">Choose Location</h3><hr>

            <form action="/cabServiceHomepage/cabBook" method="POST">
                {{ csrf_field() }}
                <input name="passenger_name" type="hidden" class="form-control" id="exampleFormControlInput1" value="{{Auth::user()->name}}">
                <input name="passenger_email" type="hidden" class="form-control" id="exampleFormControlInput1" value="{{Auth::user()->email}}">
                <input name="passenger_phone_num" type="hidden" class="form-control" id="exampleFormControlInput1" value="{{Auth::user()->phone_num}}">
                <!-- PICK-UP -->
                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Pick-Up Location</b></label>
                    <div class="input-group mb-3">
                        {{-- hidden fields --}}
                        <input type="hidden" class="form-control" id="displayPickUpLatLng" name="pickuplatlng">
                        <input type="hidden" class="form-control" id="displayDropOffLatLng" name="dropofflatlng">
                        <input type="hidden" class="form-control" name="status" value="Waiting">
                        {{-- <input type="text" class="form-control" placeholder="Enter Pick-Up Location" aria-label="Recipient's username" aria-describedby="basic-addon2" value=""> --}}
                        <input type="text" class="form-control" id="displayPickUp" name="pickup_location" placeholder="Enter Pick-Up Location" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        {{-- <div class="input-group-append">
                          <button class="btn btn-warning" type="button" data-bs-toggle="tooltip" title="Get your current location" onclick="getLocation()"><i class="bi bi-geo-alt-fill"></i></button>
                        </div> --}}
                    </div>
                </div>

                <!-- DROP-OFF -->
                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Drop-Off Location</b></label>
                    <input type="text" class="form-control" name="dropoff_location" id="displayDropOff" aria-describedby="emailHelp" placeholder="Enter drop-off location" value="">
                </div>

                <!-- DISTANCE -->
                <div class="form-group">
                    {{-- <label for="exampleInputEmail1"><b>Distance (in pixel)</b></label> --}}
                    {{-- <label for="exampleInputEmail1"><b>Distance (in meters)</b></label> --}}
                    <label for="exampleInputEmail1"><b>Distance (in KM)</b></label>
                    <input type="number" class="form-control" name="total_distance" id="showdistance" aria-describedby="emailHelp" placeholder="Distance" readonly>
                    <!-- <p id="showdistance"></p> -->
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-success" style="width:100%;">Submit</button>
                </div>
            </form>
        </div>

        {{-- modal to show available and nearby cars --}}
        {{-- <div class="modal fade" id="searchCar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><strong>Nearby Cars</strong></h5>
                        <button type="button" class="btn btn-danger" data-coreui-dismiss="modal">Close</button>
                    </div>
                    <div class="modal-body">
                        <span>Showing nearby cars...</span>
                        @if ($data_car->count() > 0)
                        @foreach ($data_car as $car)
                        <div class="row mt-2">
                            <div class="col-md-6 d-none d-lg-block mb-3 overflow-auto">
                                <div class="p-4">
                                    <img
                                    src="carimage/{{$car->car_image}}"
                                    class="card-img-top"
                                    alt="Car Image"
                                    />
                                </div>
                            </div>

                            <div class="col-md-6 d-none d-lg-block mb-3">
                                <div class="card p-4 shadow">
                                    <h2><strong>{{$car->car_model}}</strong></h2>
                                    <div class="row">
                                        <div class="nav-link">
                                            <i class="bi bi-patch-check-fill menu-icon"></i>
                                            <span class="menu-title text-black">Plate Number: <strong>{{$car->plate_num}}</strong></span>
                                        </div>

                                        <div class="nav-link">
                                            <i class="bi bi-patch-check-fill menu-icon"></i>
                                            <span class="menu-title text-black">Cab Fare (per KM) : <strong>RM{{$car->cab_fare}}</strong></span>
                                        </div>

                                        <div class="nav-link">
                                            <i class="bi bi-patch-check-fill menu-icon"></i>
                                            <span class="menu-title text-black">Color: <strong>{{$car->car_color}}</strong></span>
                                        </div>
                                    </div>
                                    
                                    <a href="CabDetails/{{$car->id}}/displayCabDetails" class="btn btn-success">Book</a>
                                </div>
                            </div>                                    
                        </div>
                        @endforeach
                        @else
                            <div class="col-md-12 d-none d-lg-block m-3 p-3 text-center">
                                <p><strong>No cars available. Please refresh</strong></p>
                            </div>
                        @endif --}}
                        {{-- <div class="table-responsive pt-3">
                            <table class="table table-hover text-center">
                                <tbody>
                                    @if ($data_car->count() > 0)
                                    @foreach ($data_car as $car)
                                    <tr>
                                        <td><img src="carimage/{{$car->car_image}}" alt="Car Image"></td>
                                        <td>{{$car->car_model}}</td>
                                        <td>{{$car->plate_num}}</td>
                                        <td>RM {{$car->cab_fare}}</td>
                                        <td><a href="/CabDetails" class="btn btn-success">Book</a></td>
                                    </tr>
                                    @endforeach
                                    @else
                                        <td colspan="5" class="text-center">No cars available</td>
                                    @endif
                                    
                                </tbody>
                            </table>
                        </div> --}}
                        {{-- Paginate --}}
                        {{-- <div class="d-flex justify-content-center">
                            {{ $data_car->links() }}
                        </div>
                    </div> --}}
                        
                    {{-- <div class="modal-footer">
                        <!-- <button type="submit" class="btn btn-success">Book Car</button> -->
                        <button type="button" class="btn btn-danger" data-coreui-dismiss="modal">Cancel</button>
                    </div> --}}
                {{-- </div>
            </div>
        </div> --}}

        <!-- <div id="map"></div> -->

        <!-- Google Map -->
        {{-- <div class="col-md-8 p-3 m-2 text-center shadow-lg" style="background-color:white;border-radius:15px;">
            <div class="mapouter" id="map">
                <div class="gmap_canvas">
                    <iframe width="900" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=UMP,%20Pekan,%20Pahang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://www.whatismyip-address.com"></a><br>
                        <style>
                            .mapouter{position:relative;text-align:right;height:500px;width:900px;}
                        </style>
                </div>
            </div>
        </div> --}}

        {{-- get users current location --}}
        {{-- <script src="{{ asset('js/app.js') }}"></script>
        <script>

        function updateNote(message){
            var data = message;
        }

        Echo.channel('trackerApp').listen('CarMoved1', (e) => {
            console.log(e);
            updateNote(e['message']);
            });   

        </script> --}}

        <div class="col-md-8 m-2 p-3 text-center shadow-lg rounded" style="background-color:white;">
            <div id="map"></div>

            <script>

                // display map
                const map = L.map("map", {
                    minZoom: 2
                })

                map.setView([3.54644, 103.43557], 13) //pahang (UMP Pekan)

                const apiKey = "AAPKc34ce1746cc54888b6e4ddf7dcfd27e14PAE8SWRgijNk0QZiKAs07DVTLM7MKyYsWg5n8xS-mXLVdM9iPvdtHOQ4p-7co6K";

                const basemapEnum = "ArcGIS:Streets"

                const layer = L.esri.Vector.vectorBasemapLayer(basemapEnum, { 
                    apiKey: apiKey 
                }).addTo(map);

                // L.esri
                //     .imageMapLayer({
                //         url: "https://landsat.arcgis.com/arcgis/rest/services/Landsat/PS/ImageServer",
                //         attribution: "United States Geological Survey (USGS), National Aeronautics and Space Administration (NASA)"
                //     })
                //     .addTo(map);

                // get current location
                
                
                /* ******************************************************** */
                /*                           GEOSEARCH                      */
                /* ******************************************************** */

                // geosearch control
                const searchControl = L.esri.Geocoding.geosearch({
                    position: "topright",
                    placeholder: "Enter address (e.g: Terminal Sentral Kuantan)",
                    useMapBounds: false,

                    providers: [
                        L.esri.Geocoding.arcgisOnlineProvider({
                            apikey: apiKey,
                            nearby: {
                            lat: -33.8688,
                            lng: 151.2093
                            }
                        })
                    ]

                }).addTo(map);

                // display search result on map
                const results = L.layerGroup().addTo(map);

                // remove previous search data from map and replace with new one
                searchControl.on("results", (data) => {
                    results.clearLayers();

                    // add search result to marker
                    for (let i = data.results.length - 1; i >= 0; i--) {
                        const marker = L.marker(data.results[i].latlng);

                        // display address of search result
                        const lngLatString = `${Math.round(data.results[i].latlng.lng * 100000) / 100000}, ${
                            Math.round(data.results[i].latlng.lat * 100000) / 100000
                        }`;
                        // marker.bindPopup(`<b>${lngLatString}</b><p>${data.results[i].properties.LongLabel}</p>`);
                        marker.bindPopup(`<b>Your Search Result:</b><p class="text-black">${data.results[i].properties.LongLabel}</p>`);
                        // marker.bindPopup(`${data.results[i].properties.LongLabel}`);

                        results.addLayer(marker);

                        marker.openPopup();

                    }

                });
/*
                // calculate distance between pick-up & drop-off location
                var firstLatLng, secondLatLng, distance, polyline;

                // add listeners to click, for recording 2 points on the map
                map.on('click', function(e) {
                    L.esri.Geocoding
                        .reverseGeocode({
                            apikey: apiKey
                        })
                        .latlng(e.latlng)
                        .run(function (error, result) {
                            // if (error) {
                            //     return;
                            // }

                            if (!firstLatLng) {
                                firstLatLng = e.latlng;
                                L.marker(firstLatLng).addTo(map).bindPopup('<b>Pick-Up Location:</b><br/>' + result.address.Match_addr).openPopup();
                                document.getElementById('displayPickUp').value = result.address.Match_addr;
                            } else {
                                secondLatLng = e.latlng;
                                L.marker(secondLatLng).addTo(map).bindPopup('<b>Drop-off Location:</b><br/>' + result.address.Match_addr).openPopup();
                                document.getElementById('displayDropOff').value = result.address.Match_addr;
                            }

                            if (firstLatLng && secondLatLng) {
                                // draw line between 2 points
                                L.polyline([firstLatLng, secondLatLng], {
                                    color: 'green'
                                }).addTo(map);

                                refreshDistance();
                            }
                            
                    });

                    
                })

                // map.on('zoomend', function(e) {
                //     refreshDistance();
                // })

                // refresh distance function
                function refreshDistance() {
                    distance = L.GeometryUtil.distance(map, firstLatLng, secondLatLng);

                    // display in 2 decimal places
                    var fixedDistance = distance.toFixed(2);
                    document.getElementById('showdistance').value = fixedDistance;
                }

*/

                /* ******************************************************** */
                /*                      GET DIRECTION                       */
                /* ******************************************************** */

                const directions = document.createElement("div");
                directions.id = "directions";
                // directions.innerHTML = "Click on the map to create a start and end for the route.";

                // display directions
                // document.body.appendChild(directions);

                const startLayerGroup = L.layerGroup().addTo(map);
                const endLayerGroup = L.layerGroup().addTo(map);

                const routeLines = L.layerGroup().addTo(map);

                let currentStep = "start";
                let startCoords, endCoords;

                function updateRoute() {
                    // Create the arcgis-rest-js authentication object to use later.
                    const authentication = arcgisRest.ApiKeyManager.fromKey(apiKey);

                    // make the API request
                    arcgisRest
                    .solveRoute({
                        stops: [startCoords, endCoords],
                        endpoint: "https://route-api.arcgis.com/arcgis/rest/services/World/Route/NAServer/Route_World/solve",
                        authentication
                    })

                    .then((response) => {

                        routeLines.clearLayers();
                        L.geoJSON(response.routes.geoJson).addTo(routeLines);

                        const directionsHTML = response.directions[0].features.map((f) => f.attributes.text).join("<br/>");
                        directions.innerHTML = directionsHTML;
                        startCoords = null;
                        endCoords = null;

                    })

                    .catch((error) => {
                        console.error(error);
                        alert("There was a problem using the route service. See the console for details.");
                    });

                }

                map.on("click", (e) => {
                    L.esri.Geocoding
                        .reverseGeocode({
                            apikey: apiKey
                        })
                        .latlng(e.latlng)
                        .run(function (error, result) {

                            const coordinates = [e.latlng.lng, e.latlng.lat];

                            if (currentStep === "start") {

                                startLayerGroup.clearLayers();
                                endLayerGroup.clearLayers();
                                routeLines.clearLayers();

                                L.marker(e.latlng).addTo(startLayerGroup).bindPopup('<b>Pick-Up Location:</b><br/>' + result.address.Match_addr).openPopup();
                                document.getElementById('displayPickUp').value = result.address.Match_addr;
                                document.getElementById('displayPickUpLatLng').value = e.latlng;
                                startCoords = coordinates;

                                currentStep = "end";
                                } else {

                                L.marker(e.latlng).addTo(endLayerGroup).bindPopup('<b>Drop-off Location:</b><br/>' + result.address.Match_addr).openPopup();
                                document.getElementById('displayDropOff').value = result.address.Match_addr;
                                document.getElementById('displayDropOffLatLng').value = e.latlng;
                                endCoords = coordinates;

                                currentStep = "start";
                            }

                            if (startCoords && endCoords) {
                                updateRoute();

                                refreshDistance();
                            }
                    });
                });

                // function to calculate the distance between 2 points
                // function refreshDistance() {
                //     distance = L.GeometryUtil.distance(map, startCoords, endCoords);

                //     // display in 2 decimal places
                //     var fixedDistance = distance.toFixed(2);
                //     document.getElementById('showdistance').value = fixedDistance;
                // }

                function refreshDistance() {
                    var meterdistance = map.distance(startCoords, endCoords);
                    var distance = meterdistance/1000;

                    // display in 2 decimal places
                    var fixedDistance = distance.toFixed(2);
                    document.getElementById('showdistance').value = fixedDistance;
                }
                
            </script>

            {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
            <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script> --}}

            {{-- geometry util --}}
            {{-- <script src="leaflet.geometryutil.js"></script>
            <script src="https://npmcdn.com/leaflet-geometryutil"></script> --}}

            {{-- reference --}}
            {{-- https://www.section.io/engineering-education/how-to-build-a-real-time-location-tracker-using-leaflet-js/ --}}
            {{-- <script>
                var map = L.map('map',{
                    center: [9.0820, 8.6753],
                    zoom:8
                });

                var osm = L.tileLayer ('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo (map);

                L.Control.geocoder().addTo(map);

                // get current location on click
                // location tracker (handling errors)
                function getLocation()
                {
                    if (!navigator.geolocation) {
                    console.log("Your browser doesn't support geolocation feature!");
                    } else {
                        navigator.geolocation.getCurrentPosition(getPosition);
                        // setinterval will auto center the current position every 5000
                        // setInterval(() => {
                        //     navigator.geolocation.getCurrentPosition(getPosition);
                        // }, 5000);
                    }

                    map.on('click', onMapClick);
                }

                // get geographic info
                var marker, circle, lat, long, accuracy, popup;

                function getPosition(position) {
                    // console.log(position)
                    lat = position.coords.latitude;
                    long = position.coords.longitude;
                    accuracy = position.coords.accuracy;

                    if (marker) {
                        map.removeLayer(marker);
                    }

                    if (circle) {
                        map.removeLayer(circle);
                    }

                    marker = L.marker([lat, long]);
                    popup = L.popup([lat, long])
                                .setContent("Your current location");
                    circle = L.circle([lat, long], { radius: accuracy });

                    var featureGroup = L.featureGroup([marker,popup,circle]).addTo(map);

                    map.fitBounds(featureGroup.getBounds());

                    console.log(
                        "Your coordinate is: Lat: " +
                        lat +
                        " Long: " +
                        long +
                        " Accuracy: " +
                        accuracy
                    );

                    // convert latitude & longitude into address

                    // display address in input boxes
                    document.getElementById('displayAddress').value = "Latitude: " + lat + 
                                                                        "Longitude" + long;
                }

                // calculate distance between pick-up & drop-off location
                var firstLatLng, secondLatLng, distance, polyline;

                // add listeners to click, for recording 2 points on the map
                map.on('click', function(e) {
                    if (!firstLatLng) {
                        firstLatLng = e.latlng;
                        L.marker(firstLatLng).addTo(map).bindPopup('Pick-Up <br/>' + e.latlng).openPopup();
                    } else {
                        secondLatLng = e.latlng;
                        L.marker(secondLatLng).addTo(map).bindPopup('Drop-Off <br/>' + e.latlng).openPopup();
                    }

                    if (firstLatLng && secondLatLng) {
                        // draw line between 2 points
                        L.polyline([firstLatLng, secondLatLng], {
                            color: 'green'
                        }).addTo(map);

                        refreshDistance();
                    }
                })

                // map.on('zoomend', function(e) {
                //     refreshDistance();
                // })

                // refresh distance function
                function refreshDistance() {
                    distance = L.GeometryUtil.distance(map, firstLatLng, secondLatLng);

                    // display in 2 decimal places
                    var fixedDistance = distance.toFixed(2);
                    document.getElementById('showdistance').value = fixedDistance;
                }

                // var map = L.map('map').setView([51.505, -0.09], 13);

                // // L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                // //     maxZoom: 19,
                // //     // doubleClickZoom: true,
                // //     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                // // }).addTo(map);

                // // get user current location
                // navigator.geolocation.getCurrentPosition(function(location) {
                //     var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

                //     var map = L.map('mapid').setView(latlng, 13)
                //     L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                //         attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://mapbox.com">Mapbox</a>',
                //         maxZoom: 18,
                //         id: 'mapbox.streets',
                //         accessToken: 'pk.eyJ1IjoiYmJyb29rMTU0IiwiYSI6ImNpcXN3dnJrdDAwMGNmd250bjhvZXpnbWsifQ.Nf9Zkfchos577IanoKMoYQ'
                //     }).addTo(map);

                //     var marker = L.marker(latlng).addTo(map);
                // });


                // add marker to map
                // var marker = L.marker([51.5, -0.09]).addTo(map);

                // // add popup to marker
                // marker.bindPopup("<b>Your current location</b>").openPopup();

                // // display location that the user clicks
                // var popup = L.popup();

                // function onMapClick(e) {
                //     popup
                //         .setLatLng(e.latlng)
                //         .setContent("You clicked the map at " + e.latlng.toString())
                //         .openOn(map);
                // }

                // map.on('click', onMapClick);
            </script> --}}
            {{-- <div class="mapouter" id="map">
                <div class="gmap_canvas">
                    <iframe width="900" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=UMP,%20Pekan,%20Pahang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://www.whatismyip-address.com"></a><br>
                        <style>
                            .mapouter{position:relative;text-align:right;height:500px;width:900px;}
                        </style>
                </div>
            </div> --}}
            {{-- toggle tooltip --}}
            <script>
                document.addEventListener("DOMContentLoaded", function(){
                    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                    var tooltipList = tooltipTriggerList.map(function(element){
                        return new bootstrap.Tooltip(element);
                    });
                });
            </script>
            
        </div>
    </div>

    {{-- <form action="/cabServiceHomepage/cabBook" method="POST">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" id="displayPickUp" name="pickup_location" placeholder="Enter Pick-Up Location" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <input type="hidden" class="form-control" name="dropoff_location" id="displayDropOff" aria-describedby="emailHelp" placeholder="Enter drop-off location" value="">
        <input name="car_id" type="hidden" class="form-control" id="" placeholder="Your Name" value="{{$data_car->id}}">
        <input name="user_id" type="hidden" class="form-control" id="" placeholder="Your Name" value="{{ Auth::user()->id }}">

        <button type="submit" class="btn btn-success p-2 m-2 float-right">Book</button>
    </form> --}}

    {{-- <div class="m-2 p-3 shadow-lg" style="background-color:white;border-radius:15px;">
        hi
    </div> --}}
        
{{-- </div> --}}
<!-- base:js -->
@include('user.dashboard.js')

</x-app-layout>