<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    <!-- Load Leaflet from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" crossorigin=""></script>

    <!-- Load Esri Leaflet from CDN -->
    <script src="https://unpkg.com/esri-leaflet@^3.0.9/dist/esri-leaflet.js"></script>
    <script src="https://unpkg.com/esri-leaflet-vector@4.0.0/dist/esri-leaflet-vector.js"></script>

    <style type="text/css">
        label
        {
            display: inline-block;
            width: 100%;
        }

        #map {
            /* height: 50%; */
            height: 400px;
        }
    </style>

    <title>Homepage | UMPCab</title>

    @include('user.css')
    
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-turquoise d-none d-lg-block">
                <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-3 text-primary">UMPCab</h1>
                    {{-- <img class="h-8 w-8" src="admin/images/UMPCablogowhite.png" alt="logo"/> --}}
                </a>
            </div>
            <div class="col-lg-9">
                <!-- NAVBAR -->
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary">UMPCab</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/" class="nav-item nav-link active">HOME</a>
                            <a href="/carList" class="nav-item nav-link">CAR RENTAL</a>
                            <a href="/cabServiceHomepage" class="nav-item nav-link">CAB SERVICE</a>
                            <a href="/" class="nav-item nav-link">FEEDBACKS</a>
                            <a href="/" class="nav-item nav-link">CONTACT US</a>
                        </div>

                        @if (Route::has('login'))
                            @auth

                            <x-app-layout>
                            </x-app-layout>

                            @else

                            <!-- Login -->
                            <a href="{{ route('login') }}" class="btn btn-primary mr-3 d-none d-lg-block">Login</a>

                                @if (Route::has('register'))

                                <!-- Register -->
                                <a href="{{ route('register') }}" class="btn btn-primary mr-3 d-none d-lg-block">Register</a>

                                @endif
                            @endauth
                        @endif


                    </div>
                </nav>

                <!-- NAVBAR ends -->
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Welcome section (services) -->
    @include('user.mainpage.services')

    <!-- Car Rental section -->
    @include('user.mainpage.carrental')

    <!-- Cab Services section -->
    @include('user.mainpage.cabservice')

    <!-- Feedbacks section -->
    @include('user.mainpage.feedback')

    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">

            <div class="col-lg-3 col-md-6 mb-5">
                {{-- UMP Logo --}}
                <img src="images/UMPlogo.png" alt="UMP Logo">

                {{-- UMP Cab Logo --}}
                <img src="images/UMPCablogowhite.png" alt="UMP Logo">
            </div>

            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n3 display-4 text-primary">UMPCab</h1>
                </a>
                <p>A car rental and cab service system made especially for UMP students to book carpools and also rent cars</p>
            </div>

            {{-- ump pekan --}}
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">UMP Pekan</h4>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>Universiti Malaysia Pahang, 26600 Pekan, Pahang, Malaysia</p>
                <a href="tel:+609 431 5000"><p><i class="fa fa-phone-alt text-primary mr-2"></i>Tel: +609 431 5000</p></a>
                <a href="tel:+609 431 5555"><p><i class="fa fa-phone-alt text-primary mr-2"></i>Fax: +609 431 5555</p></a>
                <a href="mailto:pro@ump.edu.my"><p><i class="fa fa-envelope text-primary mr-2"></i>pro@ump.edu.my</p></a>                
            </div>

            {{-- ump gambang --}}
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">UMP Gambang</h4>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>Universiti Malaysia Pahang, Lebuhraya Persiaran Tun Khalil Yaakob, 26300, Kuantan, Pahang, Malaysia</p>
                <a href="tel:+609 431 5000"><p><i class="fa fa-phone-alt text-primary mr-2"></i>Tel: +609 431 5000</p></a>
                <a href="tel:+609 431 5555"><p><i class="fa fa-phone-alt text-primary mr-2"></i>Fax: +609 431 5555</p></a>
                <a href="mailto:pro@ump.edu.my"><p><i class="fa fa-envelope text-primary mr-2"></i>pro@ump.edu.my</p></a>
            </div>
        </div>
    </div>
    
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; 
                    <a href="#">UMPCab</a>. All Rights Reserved.
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    @include('user.js')
</body>

</html>