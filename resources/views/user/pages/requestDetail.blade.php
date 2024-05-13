<head>
    <title>Request Details | UMPCab</title>

    <!-- css -->
    @include('user.dashboard.css')

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

    {{-- <link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
    <script src="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}

    <style>
        #map {
            /* height: 50%; */
            height: 500px;
        }

        #directions {
        position: static;
        z-index: 1000;
        width: 30%;
        max-height: 50%;
        right: 70px;
        top: 20px;
        overflow-y: auto;
        background: white;
        font-family: Arial, Helvetica, Verdana;
        line-height: 1.5;
        font-size: 14px;
        padding: 10px;
      }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- NAVBAR -->
        <!-- partial:partials/_navbar.html -->
        @include('user.dashboard.navbar')
        
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <!-- SIDEBAR -->
        <!-- partial:partials/_sidebar.html -->
        @include('user.dashboard.sidebar')

        {{-- mainbody --}}
        <div class="main-panel">
            <div class="content-wrapper">
                <h2 class="text-center p-3" style="color:black;">Carpool Details</h2>

                {{-- carpool request details --}}
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card shadow p-3 mb-5">
                        <div class="card-body">
                            <form action="/carRequest/{{$data_cab->id}}/completeCab" method="POST">
                                {{csrf_field()}}
                                    <div class="row">
                                        {{-- Passenger Details --}}
                                        <div class="col-6">
                                            <input name="status" type="hidden" class="form-control" id="exampleFormControlInput1" value="Completed" readonly>
                                            <!-- Passenger Name -->
                                            <div class="mb-4">
                                                <label for="exampleFormControlInput1" class="form-label"><b>Passenger Name</b></label>
                                                {{-- <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="KALAIVANI A/P RAMANI" value="{{$rental->renter_name}}" readonly> --}}
                                                <input name="passenger_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="KALAIVANI A/P RAMANI" value="{{$data_cab->passenger_name}}" readonly>
                                            </div>
            
                                            <!-- Passenger Email -->
                                            <div class="mb-4">
                                                <label for="exampleFormControlInput1" class="form-label"><b>Passenger Email</b></label>
                                                {{-- <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="kalaivani@gmail.com" value="{{$rental->renter_email}}" readonly> --}}
                                                <input name="passenger_email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="kalaivani@gmail.com" value="{{$data_cab->passenger_email}}" readonly>
                                            </div>
            
                                            <!-- Passenger Phone Number -->
                                            <div class="mb-4">
                                                <label for="exampleFormControlInput1" class="form-label"><b>Passenger Phone Number</b></label>
                                                {{-- <input name="phone_num" type="text" class="form-control" id="exampleFormControlInput1" placeholder="012-3456789" value="{{$rental->renter_phone_num}}" readonly> --}}
                                                <input name="passenger_phone_num" type="text" class="form-control" id="exampleFormControlInput1" placeholder="012-3456789" value="{{$data_cab->passenger_phone_num}}" readonly>
                                            </div>
                                        </div>
            
                                        {{-- car Details --}}
                                        <div class="col-6">
                                            {{-- <input name="car_id" type="hidden" class="form-control" id="exampleFormControlInput1" placeholder="Car Model" value="{{Auth::id->car}}" readonly> --}}
                                            <!-- Car Model -->
                                            {{-- <div class="mb-4">
                                                <label for="exampleFormControlInput1" class="form-label"><b>Car Model</b></label>
                                                <input name="car_model" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Car Model" value="{{$data_cab->car->car_model}}" readonly>
                                            </div> --}}
                                            
                                            <!-- Cab Fare -->
                                            <div class="mb-4">
                                                <label for="exampleFormControlInput1" class="form-label"><b>Cab Fare</b></label>
                                                <input name="total_cab_fare" type="text" class="form-control" id="exampleFormControlInput1" placeholder="RM 0.00" value="RM {{$data_cab->total_cab_fare}}" readonly>
                                            </div>
                            
                                            <!-- Pick-Up & Drop-Off -->
                                            <div class="mb-4">
                                                <label for="exampleFormControlInput1" class="form-label"><b>Location</b></label>
                                                <div class="row">
                                                    <div class="col-6">
                                                        {{-- Pick-up --}}
                                                        <label for="floatingName">From:</label>
                                                        <input name="pickup_location" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pick-Up" value="{{$data_cab->pickup_location}}" disabled>
                                                    </div>
                        
                                                    <div class="col-6">
                                                        {{-- Drop-off --}}
                                                        <label for="floatingName">To:</label>
                                                        <input name="dropoff_location" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Drop-Off" value="{{$data_cab->dropoff_location}}" disabled>                      
                                                    </div>
                                                </div>
                                                {{-- <button type="button" class="btn btn-success float-right m-2" onclick="getLocation()">Display location on map</button> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>Directions</strong></p>
                                            <div id="directions"></div>
                                        </div>

                                        <div class="col-md-6">
                                            {{-- Map --}}
                                            <label for="map"><b>Map</b></label>
                                            <i data-bs-toggle="tooltip" title="Click 2 locations on the map to get the direction" class="bi bi-info-circle-fill"></i>
                                            <p class="text-sm">( Click 2 locations on the map to get the direction )</p>
                                            <div id="map"></div>
                                        </div>
                                    </div>
            
                                    

                                    <button type="submit" class="btn btn-success float-right m-2">Ride Completed</button>
                                    {{-- <a href="{{url('completeCab', $data_cab->id)}}" type="button" onclick="return confirm('Confirm that you want to complete this car ride?')" class="btn btn-success float-right m-4">Ride Completed</a> --}}
                            </form>

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
                                        // const searchControl = L.esri.Geocoding.geosearch({
                                        //     position: "topright",
                                        //     placeholder: "Enter address (e.g: Terminal Sentral Kuantan)",
                                        //     useMapBounds: false,
                        
                                        //     providers: [
                                        //         L.esri.Geocoding.arcgisOnlineProvider({
                                        //             apikey: apiKey,
                                        //             nearby: {
                                        //             lat: -33.8688,
                                        //             lng: 151.2093
                                        //             }
                                        //         })
                                        //     ]
                        
                                        // }).addTo(map);
                        
                                        // // display search result on map
                                        // const results = L.layerGroup().addTo(map);
                        
                                        // // remove previous search data from map and replace with new one
                                        // searchControl.on("results", (data) => {
                                        //     results.clearLayers();
                        
                                        //     // add search result to marker
                                        //     for (let i = data.results.length - 1; i >= 0; i--) {
                                        //         const marker = L.marker(data.results[i].latlng);
                        
                                        //         // display address of search result
                                        //         const lngLatString = `${Math.round(data.results[i].latlng.lng * 100000) / 100000}, ${
                                        //             Math.round(data.results[i].latlng.lat * 100000) / 100000
                                        //         }`;
                                        //         // marker.bindPopup(`<b>${lngLatString}</b><p>${data.results[i].properties.LongLabel}</p>`);
                                        //         marker.bindPopup(`<b>Your Search Result:</b><p class="text-black">${data.results[i].properties.LongLabel}</p>`);
                                        //         // marker.bindPopup(`${data.results[i].properties.LongLabel}`);
                        
                                        //         results.addLayer(marker);
                        
                                        //         marker.openPopup();
                        
                                        //     }
                        
                                        // });

                                        /* ******************************************************** */
                                        /*                   DISPLAY DATA FROM DB                   */
                                        /* ******************************************************** */
                                        // var startLayerGroup, endLayerGroup, routeLines;

                                        // L.marker(e.latlng).addTo(startLayerGroup).bindPopup('Pick-Up Location').openPopup();
                                        // L.marker(e.latlng).addTo(endLayerGroup).bindPopup('Drop-Off Location').openPopup();
                                        

                                        // adjust map
                                        // var bounds = L.bounds(pickup, dropoff);
                                        // map.fitBounds(bounds);

                                        // $(function(){
                                        //     $.ajax({
                                        //         url: "/leaflect",

                                        //         type: 'GET',

                                        //         success: function(data) {
                                        //             $.each(data, function( key, value ) {

                                        //                 L.marker([value.pickuplatlng, value.dropofflatlng]).addTo(map)
                                        //                     .bindPopup('Pickup Location')
                                        //                     .openPopup();
                                        //             })
                                        //         },
                                        //         error: function(data) {

                                        //         }
                                        //     });
                                        // })

                                        // var pickup = L.marker([3.54644, 103.43557]).addTo(map)
                                        //                 .bindPopup('Pickup Location')
                                        //                 .openPopup();

                                        // var dropoff = L.marker([4.54644, 103.43557]).addTo(map)
                                        //                 .bindPopup('Dropoff Location')
                                        //                 .openPopup();
                                        // function getLocation() {
                                        //     var pickup = L.popup()
                                        //         .setLatLng([])
                                        //         .setContent("Pickup Location")
                                        //         .openOn(map);

                                        //     // var pickup = L.geoJSON(JSON.parse(pickup_location)).addTo(map);
                                        //     // var dropoff = L.geoJSON(JSON.parse(dropoff_location)).addTo(map);                                    

                                        //     // adjust map to show the location marked on map
                                        //     var bounds = pickup.getBounds();
                                        //     map.fitBounds(bounds);
                                        // }
                                        
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
                        
                                        // const directions = document.createElement("div");
                                        // directions.id = "directions";
                                        // // directions.innerHTML = "Click on the map to create a start and end for the route.";
                        
                                        // // display directions
                                        // // document.body.appendChild(directions);
                        
                                        // const startLayerGroup = L.layerGroup().addTo(map);
                                        // const endLayerGroup = L.layerGroup().addTo(map);
                        
                                        // const routeLines = L.layerGroup().addTo(map);
                        
                                        // let currentStep = "start";
                                        // let startCoords, endCoords;
                        
                                        // function updateRoute() {
                                        //     // Create the arcgis-rest-js authentication object to use later.
                                        //     const authentication = arcgisRest.ApiKeyManager.fromKey(apiKey);
                        
                                        //     // make the API request
                                        //     arcgisRest
                                        //     .solveRoute({
                                        //         stops: [startCoords, endCoords],
                                        //         endpoint: "https://route-api.arcgis.com/arcgis/rest/services/World/Route/NAServer/Route_World/solve",
                                        //         authentication
                                        //     })
                        
                                        //     .then((response) => {
                        
                                        //         routeLines.clearLayers();
                                        //         L.geoJSON(response.routes.geoJson).addTo(routeLines);
                        
                                        //         const directionsHTML = response.directions[0].features.map((f) => f.attributes.text).join("<br/>");
                                        //         directions.innerHTML = directionsHTML;
                                        //         startCoords = null;
                                        //         endCoords = null;
                        
                                        //     })
                        
                                        //     .catch((error) => {
                                        //         console.error(error);
                                        //         alert("There was a problem using the route service. See the console for details.");
                                        //     });
                        
                                        // }
                        
                                        // map.on("click", (e) => {
                                        //     L.esri.Geocoding
                                        //         .reverseGeocode({
                                        //             apikey: apiKey
                                        //         })
                                        //         .latlng(e.latlng)
                                        //         .run(function (error, result) {
                        
                                        //             const coordinates = [e.latlng.lng, e.latlng.lat];
                        
                                        //             if (currentStep === "start") {
                        
                                        //                 startLayerGroup.clearLayers();
                                        //                 endLayerGroup.clearLayers();
                                        //                 routeLines.clearLayers();
                        
                                        //                 L.marker(e.latlng).addTo(startLayerGroup).bindPopup('<b>Pick-Up Location:</b><br/>' + result.address.Match_addr).openPopup();
                                        //                 document.getElementById('displayPickUp').value = result.address.Match_addr;
                                        //                 startCoords = coordinates;
                        
                                        //                 currentStep = "end";
                                        //                 } else {
                        
                                        //                 L.marker(e.latlng).addTo(endLayerGroup).bindPopup('<b>Drop-off Location:</b><br/>' + result.address.Match_addr).openPopup();
                                        //                 document.getElementById('displayDropOff').value = result.address.Match_addr;
                                        //                 endCoords = coordinates;
                        
                                        //                 currentStep = "start";
                                        //             }
                        
                                        //             if (startCoords && endCoords) {
                                        //                 updateRoute();
                        
                                        //                 refreshDistance();
                                        //             }
                                        //     });
                                        // });
                        
                                        // // function to calculate the distance between 2 points
                                        // function refreshDistance() {
                                        //     distance = L.GeometryUtil.distance(map, startCoords, endCoords);
                        
                                        //     // display in 2 decimal places
                                        //     var fixedDistance = distance.toFixed(2);
                                        //     document.getElementById('showdistance').value = fixedDistance;
                                        // }

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

                                        /* ******************************************************** */
                                        /*                          DIRECTIONS                      */
                                        /* ******************************************************** */

                                        const directions = document.createElement("div");
                                        directions.id = "directions";
                                        directions.innerHTML = "Click on the map to create a start and end for the route.";
                                        document.body.appendChild(directions);

                                        const startLayerGroup = L.layerGroup().addTo(map);
                                        const endLayerGroup = L.layerGroup().addTo(map);

                                        const routeLines = L.layerGroup().addTo(map);

                                        // L.marker(e.latlng).addTo(startLayerGroup).bindPopup('<b>Pick-Up Location:</b><br/>' + result.address.Match_addr).openPopup();
                                        // L.marker(e.latlng).addTo(endLayerGroup).bindPopup('<b>Drop-off Location:</b><br/>' + result.address.Match_addr).openPopup();

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
                                            const coordinates = [e.latlng.lng, e.latlng.lat];

                                            if (currentStep === "start") {

                                            startLayerGroup.clearLayers();
                                            endLayerGroup.clearLayers();
                                            routeLines.clearLayers();

                                            L.marker(e.latlng).addTo(startLayerGroup);
                                            startCoords = coordinates;

                                            currentStep = "end";
                                            } else {

                                            L.marker(e.latlng).addTo(endLayerGroup);
                                            endCoords = coordinates;

                                            currentStep = "start";
                                            }

                                            if (startCoords && endCoords) {
                                            updateRoute();
                                            }

                                        });

                                        // toggle tooltip
                                        document.addEventListener("DOMContentLoaded", function(){
                                            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                                            var tooltipList = tooltipTriggerList.map(function(element){
                                                return new bootstrap.Tooltip(element);
                                            });
                                        });
                                        
                                    </script>
                    
                                    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- base:js -->
    @include('user.dashboard.js')
</body>