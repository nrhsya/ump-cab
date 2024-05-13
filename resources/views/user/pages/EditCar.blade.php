<head>
    <title>Edit Car Rental List | UMPCab</title>

    <!-- css -->
    @include('user.dashboard.css')
</head>

<body>
    <div class="container-scroller">
        <!-- NAVBAR -->
        <!-- partial:partials/_navbar.html -->
        @include('user.dashboard.navbar')

        <div class="container-fluid page-body-wrapper">
              <!-- SIDEBAR -->
            <!-- partial:partials/_sidebar.html -->
            @include('user.dashboard.sidebar')
            <!-- partial -->

            {{-- mainbody --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    <h2 class="text-center p-3" style="color:black;">Update Car Details</h2>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card shadow p-3">
                            <div class="card-body">
                                {{-- back button --}}
                                <div class="mb-3">
                                    <button type="button" class="btn btn-success btn-rounded btn-icon" onclick="window.location.href='/DriverDashboard'">
                                        <i class="mdi mdi-arrow-left"></i>
                                      </button>
                                </div>

                                <!-- form to insert data -->
                                <form action="/DriverDashboard/{{$data_car->id}}/updateCar" method="POST">
                                {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <img src="/carimage/{{$data_car->car_image}}" width="250" height="200" alt="Car Image" class="text-center"/>
                                            <input name="car_image" type="file" class="form-control" id="exampleFormControlInput1">
                                        </div>

                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label"><strong>Car Model</strong></label>
                                                <input name="car_model" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_car->car_model}}">
                                            </div>
        
                                            <!-- Plate Number -->
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label"><strong>Plate Number</strong></label>
                                                <input name="plate_num" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_car->plate_num}}">
                                            </div>

                                            <!-- Car color -->
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label"><strong>Car Color</strong></label>
                                                <input name="car_color" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_car->car_color}}">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- rental fare -->
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><strong>Rental Fare (per hour)</strong></label>
                                        <input name="rental_fare" type="number" class="form-control" id="exampleFormControlInput1" value="{{$data_car->rental_fare}}">
                                    </div>

                                    <!-- cab fare -->
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"><strong>Cab Fare (per KM)</strong></label>
                                        <input name="cab_fare" type="number" class="form-control" id="exampleFormControlInput1" value="{{$data_car->cab_fare}}">
                                    </div>

                                    <button type="submit" class="btn btn-success float-end">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- base:js -->
        @include('user.dashboard.js')
</body>