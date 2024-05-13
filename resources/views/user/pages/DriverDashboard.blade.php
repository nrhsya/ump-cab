<head>
    <title>My Cars | UMPCab</title>

    <!-- css -->
    @include('user.dashboard.css')
</head>

<body>

    {{-- alert message --}}
    {{-- <div class = "container">
        <!-- to alert the users -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <span type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </span>
                <strong>{{session('success')}}</strong>
            </div>
        @endif
    </div> --}}
    {{-- <div class="alert alert-warning alert-dismissible" role="alert">
        <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
        <strong>Warning!</strong> Still on beta stage.
      </div>     --}}

    <div class="container-scroller">
        {{-- alert message --}}
        
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
                <h2 class="text-center p-3" style="color:black;">My Car</h2>

                <div class="row">
                    {{-- registered car list --}}
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card rounded shadow p-3 mb-5">
                            {{-- <div class="p-2 text-center rounded" style="background-color: #11ADA4; color: white;">
                                <h3>Registered Car</h3>
                            </div> --}}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h4 class="card-title">Registered Car Details:</h4>
                                        <span>View your registered car here</span>
                                    </div>

                                    {{-- register car for rental --}}
                                    @if ($data_car->count() == 0)
                                        <div class="col-md-3">
                                            <button type="button" class="btn btn-warning btn-lg btn-block" data-coreui-toggle="modal" data-coreui-target="#registerCar" data-bs-toggle="tooltip" title="Only one car is allowed to be registered">Register Car</button>
                                        </div>
                                    @endif
                                </div>

                                @if ($data_car->count() > 0)
                                @foreach ($data_car as $car)
                                <div class="row mt-2">
                                    <div class="col-md-5 d-none d-lg-block mb-3">
                                        <div class="p-4">
                                          <img
                                            src="carimage/{{$car->car_image}}"
                                            class="card-img-top"
                                            alt="Car Image"
                                          />
                                        </div>
                                    </div>

                                    <div class="col-md-7 d-none d-lg-block mb-3">
                                        <div class="card p-4 shadow">
                                            <h2><strong>{{$car->car_model}}</strong></h2>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="nav-link">
                                                        <i class="bi bi-patch-check-fill menu-icon"></i>
                                                        <span class="menu-title">Plate Number: <strong>{{$car->plate_num}}</strong></span>
                                                    </div>
        
                                                    <div class="nav-link">
                                                        <i class="bi bi-patch-check-fill menu-icon"></i>
                                                        <span class="menu-title">Rental Fare (per hour): <strong>RM {{$car->rental_fare}}</strong></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="nav-link">
                                                        <i class="bi bi-patch-check-fill menu-icon"></i>
                                                        <span class="menu-title">Cab Fare (per KM): <strong>RM{{$car->cab_fare}}</strong></span>
                                                    </div>
        
                                                    <div class="nav-link">
                                                        <i class="bi bi-patch-check-fill menu-icon"></i>
                                                        <span class="menu-title">Color: <strong>{{$car->car_color}}</strong></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @if ($car->reg_status == 'Approved')
                                            <div class="p-4 m-2 text-center">
                                                <a href="{{url('registerRental',$car->id)}}" onclick="return confirm('Confirm that you want to register your car for rental?')" class="btn btn-warning" data-bs-toggle="tooltip" title="Make your car available for rental">Register for rental</a>
                                                <a href="{{url('registerCab',$car->id)}}" onclick="return confirm('Confirm that you want to register your car for carpool?')" class="btn btn-info" data-bs-toggle="tooltip" title="Be a driver for cab service">Register for carpool</a>
                                                <i data-bs-toggle="tooltip" title="* You are only allowed to register for rental or carpool once your car registration is approved." class="bi bi-info-circle-fill"></i>
                                            </div>
                                        @endif

                                        <div class="text-center m-2">
                                            <p><strong>Your Car Registration Status:</strong></p>
                                            @if ($car->reg_status == 'Approved')
                                                <button type="button" class="btn btn-success" disabled>{{$car->reg_status}}</button><br>
                                            @endif
                                            @if ($car->reg_status == 'Rejected')
                                                <button type="button" class="btn btn-danger" disabled>{{$car->reg_status}}</button>
                                            @endif
                                            @if ($car->reg_status == 'Waiting For Approval')
                                                <button type="button" class="btn btn-secondary" disabled>{{$car->reg_status}}</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <a href="DriverDashboard/{{$car->id}}/editCar" class="btn btn-success">Edit</a>
                                <a href="DriverDashboard/{{$car->id}}/deleteCar" class="btn btn-danger" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</a>
                                    @if ($car->reg_status == 'Approved')
                                        <p class="float-right">View users who have book your car in the <strong><a href="/carRequest">User Request</a></strong> page</p>
                                    @endif
                                @endforeach
                                @else
                                    <div class="col-md-12 d-none d-lg-block m-3 p-3 text-center">
                                        <p><strong>You have not registered any car !</strong></p>
                                    </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>

                {{-- CAR REGISTRATION HISTORY SECTION --}}
                {{-- <div class="row"> --}}
                    {{-- registered car rental list --}}
                    {{-- <div class="col-md-6 grid-margin stretch-card">
                        <div class="card rounded shadow p-3 mb-5">
                            <div class="p-2 text-center rounded" style="background-color: #11ADA4; color: white;">
                                <h3>Car Registration History</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Registered Car Rental History:</h4>
                                    </div>

                                    <div class="col-md-6">
                                        <button data-coreui-toggle="modal" data-coreui-target="#registerCarRentalModal" type="button" class="btn btn-warning btn-lg btn-block">Register Car for Rental</button>
                                    </div>
                                </div>
                                
                                <div class="table-responsive pt-3">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr style="background-color:#0958A3;color:white;">
                                                <th>No.</th>
                                                <th>Registered Date & Time</th>
                                                <th colspan="2">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>20-01-2022 08.00am</td>
                                                <td><a href="#" class="btn btn-success">View</a></td>
                                                <td><a href="#" class="btn btn-danger" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><hr style="border:1px solid black;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Registered Cabs History:</h4>
                                    </div>

                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-warning btn-lg btn-block" data-coreui-toggle="modal" data-coreui-target="#registerCabModal">Register Car for Cab services</button>
                                    </div>
                                </div>
                                <div class="table-responsive pt-3">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr style="background-color:#0958A3;color:white;">
                                            <th>No.</th>
                                            <th>Registered Date & Time</th>
                                            <th colspan="2">ACTIONS</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>20-01-2022 08.00am</td>
                                            <td><a href="#" class="btn btn-success">View</a></td>
                                            <td><a href="#" class="btn btn-danger" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    
                {{-- </div> --}}
            </div>
        </div>
    </div>

    

    {{-- modal to register new car --}}
    <div class="modal fade" id="registerCar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register Car</h5>
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <form action="/DriverDashboard/registerCar" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Full name -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Name</b></label>
                                    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" value="{{ Auth::user()->name }}" disabled>
                                </div>

                                {{-- Gender --}}
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Gender</b></label>
                                    <input name="gender" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Gender" value="{{ Auth::user()->gender }}" disabled>
                                </div>

                                {{-- Date of birth --}}
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Date of Birth</b></label>
                                    <input name="dob" type="date" class="form-control" id="exampleFormControlInput1" placeholder="20/01/2000" value="{{ Auth::user()->dob }}" disabled>
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Email</b></label>
                                    <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="email@gmail.com" value="{{ Auth::user()->email }}" disabled>
                                </div>

                                {{-- drivers license --}}
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>DRIVERS LICENSE*</b></label>
                                    <p>Please provide proof of your drivers license before proceeding with the car registration</p>
                                    <p class="text-danger">Only <strong>.png</strong> file is allowed</p>
                                    <input name="drivers_license" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
                                </div>

                                {{-- ic --}}
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>IC*</b></label>
                                    <p>Please provide proof of your IC before proceeding with the car registration</p>
                                    <p class="text-danger">Only <strong>.png</strong> file is allowed</p>
                                    <input name="ic" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter IC">
                                </div>
                            </div>

                            <div class="col-md-6">    
                                {{-- car status --}}
                                <input name="status" type="hidden" class="form-control" id="" placeholder="Your Name" value="Vacant">

                                {{-- car registration status --}}
                                <input name="reg_status" type="hidden" class="form-control" id="" placeholder="Your Name" value="Waiting For Approval">

                                <!-- Car Model -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Car Model</b></label>
                                    <select name="car_model" class="form-control" aria-label="car_model">
                                        <option disabled selected>Choose Cars</option> <!-- display all car models from DB -->
                                        {{-- @foreach ($data_fare as $fare)
                                        <option value="{{$fare->id}}">{{$fare->car_model}}</option>
                                        @endforeach --}}
                                        <option value="Honda Civic">Honda Civic</option>
                                        <option value="Honda Accord">Honda Accord</option>
                                        <option value="Honda Odyssey">Honda Odyssey</option>
                                        <option value="Honda Jazz">Honda Jazz</option>
                                        <option value="Perodua Axia">Perodua Axia</option>
                                        <option value="Perodua Bezza">Perodua Bezza</option>
                                        <option value="Perodua Myvi">Perodua Myvi</option>
                                        <option value="Perodua Alza">Perodua Alza</option>
                                        <option value="Perodua Ativa">Perodua Ativa</option>
                                        <option value="Perodua Aruz">Perodua Aruz</option>
                                        <option value="Proton Saga">Proton Saga</option>
                                        <option value="Proton Iriz">Proton Iriz</option>
                                        <option value="Proton Persona">Proton Persona</option>
                                        <option value="Proton Exora">Proton Exora</option>
                                    </select>
                                </div>

                                <!-- Car Color -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Car Color</b></label>
                                    <input name="car_color" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Red"> {{-- nnti buat disabled --}}
                                </div>
                                
                                <!-- Rental Fare -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>RENTAL FARE (per hour)</b></label>
                                    <input name="rental_fare" type="number" class="form-control" id="exampleFormControlInput1">
                                </div>

                                {{-- cab fare --}}
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>CAB FARE (per km)</b></label>
                                    <input name="cab_fare" type="number" class="form-control" id="exampleFormControlInput1">
                                </div>

                                {{-- car image --}}
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>CAR IMAGE</b></label>
                                    <input name="car_image" type="file" class="form-control" id="exampleFormControlInput1">
                                </div>

                                {{-- plate number --}}
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>PLATE NUMBER</b></label>
                                    <input name="plate_num" type="text" class="form-control" id="exampleFormControlInput1">
                                </div>
                            </div>
                        </div>

                        {{-- <button type="submit" class="btn btn-success">Register</button> --}}
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Register</button>
                    <button type="button" class="btn btn-danger" data-coreui-dismiss="modal">Cancel</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    

      {{-- modal to register existing car for rental --}}
      <div class="modal fade" id="registerCarRentalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register Car for rental</h5>
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        {{csrf_field()}}
                            

                            <!-- Full name -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>Name</b></label>
                                <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Car Model"> {{-- nnti buat disabled --}}
                            </div>

                            {{-- Gender --}}
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>Gender</b></label>
                                <select name="gender" class="form-control" aria-label="gender">
                                    <option disabled selected>Choose Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            {{-- Date of birth --}}
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>Date of Birth</b></label>
                                <input name="dob" type="date" class="form-control" id="exampleFormControlInput1" placeholder="20/01/2000"> {{-- nnti buat disabled --}}
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>Email</b></label>
                                <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="email@gmail.com"> {{-- nnti buat disabled --}}
                            </div>

                            <!-- IC Number -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>IC Number</b></label>
                                <input name="ic_num" type="text" class="form-control" id="exampleFormControlInput1" placeholder="000111031122">
                            </div>

                            {{-- drivers license --}}
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>DRIVERS LICENSE*</b></label>
                                <p>Please provide proof of your drivers license before proceeding with the car registration</p>
                                <input name="drivers_license" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
                            </div>

                            <!-- Car Model -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>Car Model</b></label>
                                <input name="car_model" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Car Model"> {{-- nnti buat disabled --}}
                            </div>

                            <!-- Car Color -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>Car Color</b></label>
                                <input name="car_color" type="color" class="form-control" id="exampleFormControlInput1" placeholder="Red"> {{-- nnti buat disabled --}}
                            </div>
                            
                            <!-- Rental Fare -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>Rental Fare per hour</b></label>
                                <input name="rental_fare" type="number" class="form-control" id="exampleFormControlInput1" placeholder="RM 0.00"> {{-- nnti buat disabled --}}
                            </div>
            
                            <!-- Rental Duration -->
                            {{-- <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>Rental Duration</b></label>
                                <div class="row">
                                    <div class="col-6">
                                        
                                        <input name="course_desc" type="datetime-local" class="form-control" id="exampleFormControlInput1" placeholder="From">
                                    </div>

                                    <div class="col-6">
                                        
                                        <input name="course_desc" type="datetime-local" class="form-control" id="exampleFormControlInput1" placeholder="Until">                      
                                    </div>
                                </div>
                            </div> --}}
            
                            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Apply</button>
                    <button type="button" class="btn btn-danger" data-coreui-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal to register existing car for cab services --}}
    <div class="modal fade" id="registerCabModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register Car for Cab Service</h5>
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        {{csrf_field()}}
                            
                            <!-- Car Model -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>Car Model</b></label>
                                <input name="course_code" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Car Model" disabled>
                            </div>
                            
                            <!-- Rental Fare -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>Cab Fare</b></label>
                                <input name="course_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="RM 0.00" disabled>
                            </div>
            
                            <!-- Pick-Up & Drop-Off -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>Location</b></label>
                                <div class="row">
                                    <div class="col-6">
                                        
                                        <input name="course_desc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pick-Up">
                                    </div>
        
                                    <div class="col-6">
                                        
                                        <input name="course_desc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Drop-Off">                      
                                    </div>
                                </div>
                                
                            </div>
            
                            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Apply</button>
                    <button type="button" class="btn btn-danger" data-coreui-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    {{-- toggle tooltip --}}
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(element){
                return new bootstrap.Tooltip(element);
            });
        });
    </script>
    
    <!-- base:js -->
    @include('user.dashboard.js')
</body>