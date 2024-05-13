<!-- Feedbacks Start -->
<div id="feedback"  class="container-fluid bg-testimonial py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-5 pt-lg-5 pb-5">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Cab Services</h6>
                <h1 class="section-title text-white mb-5">Browse the map for cab services</h1>
                <div class="owl-carousel testimonial-carousel position-relative">
                    <div class="d-flex flex-column text-white">
                        <p>Choose your desired location from the map and the driver of your choice will be on their way to pick you up.</p>

                        {{-- <a href="/cabServiceHomepage">
                            <div class="btn-primary text-center p-3">
                            Browse Map
                            </div>
                        </a> --}}
                        <a href="/cabServiceHomepage" class="btn btn-primary">Browse Map</a>
                    </div>
                </div>
            </div>

            {{-- Map --}}
            <div class="col-lg-7" style="min-height: 400px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        {{-- <img class="position-absolute w-100 h-100" src="mainpage/img/feature.jpg" style="object-fit: cover;"> --}}
                        <!-- Google Map -->
                        <div class="col-12 p-3 text-center shadow-lg" style="background-color:white;border-radius:15px;">
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
                            </script>
                            {{-- <div class="mapouter" id="map">
                                <div class="gmap_canvas">
                                    <iframe width="900" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=UMP,%20Pekan,%20Pahang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                        <a href="https://www.whatismyip-address.com"></a><br>
                                        <style>
                                            .mapouter{position:relative;text-align:right;height:500px;width:900px;}
                                        </style>
                                        <a href="https://www.embedgooglemap.net">
                                            how to copy google map
                                        </a>
                                        <style>
                                            .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:900px;}
                                        </style>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feedbacks End -->