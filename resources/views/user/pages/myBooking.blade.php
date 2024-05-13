<head>
    <title>My Bookings | UMPCab</title>

    <!-- css -->
    @include('user.dashboard.css')
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
                <h2 class="text-center p-3" style="color: black">My Bookings</h2>   

                {{-- car rental bookings --}}
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card shadow p-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="card-title">List of car rental bookings:</h4>
                                </div>

                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning float-right" data-coreui-toggle="modal" data-coreui-target="#rentalHistory">History <i class="bi bi-clock-history"></i></button>
                                </div>
                            </div>
                            <div class="table-responsive pt-3">
                                <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            {{-- <th><strong>No.</strong></th> --}}
                                            <th><strong>Booking Type</strong></th>
                                            <th><strong>Booking Date</strong></th>
                                            <th><strong>Car Name</strong></th>
                                            <th><strong>Plate Number</strong></th>
                                            <th><strong>STATUS</strong></th>
                                        </tr>
                                    </thead>

                                        {{-- for car rental --}}
                                        @foreach ($data_booking as $booking)
                                        <tbody>
                                            <tr>
                                                {{-- <td>1</td> --}}
                                                <td>{{$booking->car->rental}}</td>
                                                <td>{{$booking->created_at}}</td>
                                                <td>{{$booking->car->car_model}}</td>
                                                <td>{{$booking->car->plate_num}}</td>
                                                @if ($booking->rental_status == 'Waiting')
                                                    <td><button type="button" class="btn btn-info" disabled>Waiting</button></td>    
                                                @endif

                                                @if ($booking->rental_status == 'Ongoing')
                                                    <td><a href="RentalReview/{{$booking->id}}/displayRentalDetails" class="btn btn-warning">Ongoing</a></td>
                                                @endif
                                                
                                                {{-- <td><a href="/RentalReview" class="btn btn-warning">Ongoing</a></td> --}}
                                            </tr>
                                        </tbody>
                                        @endforeach

                                        {{-- empty --}}
                                        {{-- @if ($data_booking->count() < 1 && $data_cab->count() < 1) --}}
                                        @if ($data_booking->count() < 1)
                                        <tbody>
                                            <tr>
                                                {{-- <td colspan="6" class="text-center">You have not made any car rental bookings</td> --}}
                                                <td colspan="6" class="text-center">You have no ongoing car rental bookings</td>
                                            </tr>
                                        </tbody>
                                        @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- cab bookings --}}
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card shadow p-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="card-title">List of cab bookings:</h4>  
                                </div>

                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning float-right" data-coreui-toggle="modal" data-coreui-target="#cabHistory">History <i class="bi bi-clock-history"></i></button>
                                </div>
                            </div>
                            <div class="table-responsive pt-3">
                                <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th><strong>Booking Type</strong></th>
                                            <th><strong>Booking Date</strong></th>
                                            <th><strong>Pick-Up Location</strong></th>
                                            <th><strong>Drop-Off Location</strong></th>
                                            <th><strong>STATUS</strong></th>
                                        </tr>
                                    </thead>
                                        @foreach ($data_cab as $cab)
                                        <tbody>
                                            <tr>
                                                <td>Cab Service</td>
                                                <td>{{$cab->created_at}}</td>
                                                <td>{{$cab->pickup_location}}</td>
                                                <td>{{$cab->dropoff_location}}</td>
                                                @if ($cab->status == 'Waiting')
                                                    <td><button type="button" class="btn btn-warning" data-bs-toggle="tooltip" title="No driver has accepted your request yet. Please wait!" disabled>Waiting</button></td>
                                                @endif

                                                @if ($cab->status == 'Accepted')
                                                <td><button class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#driverDetails">Accepted</button></td>
                                                @endif

                                                @if ($cab->status == 'Completed')
                                                <td><a href="CabReview/{{$cab->id}}/displayCabServiceDetails" class="btn btn-success" data-bs-toggle="tooltip" title="Rate your car ride">Rate Car Ride</a></td>
                                                @endif
                                            </tr>
                                        </tbody>
                                        @endforeach

                                        {{-- empty --}}
                                        @if ($data_cab->count() < 1)
                                        <tbody>
                                            <tr>
                                                <td colspan="6" class="text-center">You have no ongoing cab booking</td>
                                            </tr>
                                        </tbody>
                                        @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- rental history modal --}}
                <div class="modal fade" id="rentalHistory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Car Rental Request History</h5>
                                <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            {{-- <th><strong>No.</strong></th> --}}
                                            <th><strong>Booking Type</strong></th>
                                            <th><strong>Booking Date</strong></th>
                                            <th><strong>Car Name</strong></th>
                                            <th><strong>Plate Number</strong></th>
                                            <th><strong>STATUS</strong></th>
                                        </tr>
                                    </thead>

                                        {{-- for car rental --}}
                                        @foreach ($rental_history as $booking)
                                        <tbody>
                                            <tr>
                                                {{-- <td>1</td> --}}
                                                <td>{{$booking->car->rental}}</td>
                                                <td>{{$booking->created_at}}</td>
                                                <td>{{$booking->car->car_model}}</td>
                                                <td>{{$booking->car->plate_num}}</td>
                                                {{-- <td><a href="/RentalReview" class="btn btn-warning">Ongoing</a></td> --}}
                                                <td><button type="button" class="btn btn-success">Completed</button></td>
                                            </tr>
                                        </tbody>
                                        @endforeach

                                        {{-- empty --}}
                                        {{-- @if ($rental_history->count() < 1 && $data_cab->count() < 1) --}}
                                        @if ($rental_history->count() < 1)
                                        <tbody>
                                            <tr>
                                                {{-- <td colspan="6" class="text-center">You have not made any car rental bookings</td> --}}
                                                <td colspan="6" class="text-center">You have not made any car rental bookings</td>
                                            </tr>
                                        </tbody>
                                        @endif
                                </table>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

                {{-- view driver modal --}}
                <div class="modal fade" id="driverDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Driver Details</h5>
                                <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">                
                                    {{-- Car Details --}}
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <!-- Car Image -->
                                                <div class="p-4">
                                                <img
                                                    {{-- src="carimage/{{$driver_detail->car->car_image}}" --}}
                                                    src="images/myvi.png"
                                                    class="img-fluid w-60"
                                                    alt="Car Image"
                                                />
                                                </div>
                                            </div>                                                    
                                        </div>
                                    </div>

                                    {{-- Driver Details --}}
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="card-title">Car Details</div>
                                                <div class="mb-3">
                                                    {{-- Plate Num --}}
                                                    <label for="exampleFormControlInput1" class="form-label"><b>Plate Number</b></label>
                                                    {{-- <input name="plate_num" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pick-Up" value="{{$driver_detail->car->plate_num}}" readonly> --}}
                                                    <input name="plate_num" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pick-Up" value="ABC1234" readonly>
                                                </div>

                                                <div class="mb-3">
                                                    {{-- Car Model --}}
                                                    <label for="exampleFormControlInput1" class="form-label"><b>Car Model</b></label>
                                                    {{-- <input name="car_model" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Drop-Off" value="{{$driver_detail->car->car_model}}" readonly> --}}
                                                    <input name="car_model" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Drop-Off" value="Perodua Myvi" readonly>
                                                </div>

                                                {{-- Car color --}}
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label"><b>Car color</b></label>
                                                    {{-- <input name="car_color" type="text" class="form-control" id="total_distance" placeholder="Drop-Off" value="{{$driver_detail->car->car_color}}" readonly> --}}
                                                    <input name="car_color" type="text" class="form-control" id="total_distance" placeholder="Drop-Off" value="Red" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-title">Driver Details</div>
                                                <!-- Driver Name -->
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label"><b>Driver Name</b></label>
                                                    {{-- <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Driver Name" value="{{$driver_detail->car->user->name}}" readonly> --}}
                                                    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Driver Name" value="NUR HASYA BINTI MOHD NORDIN" readonly>
                                                </div>
                
                                                <!-- Driver Email -->
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label"><b>Driver Email</b></label>
                                                    {{-- <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Driver Email" value="{{$driver_detail->car->user->email}}" readonly> --}}
                                                    <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Driver Email" value="nurhasyamohdnordin@gmail.com" readonly>
                                                </div>
                
                                                <!-- Driver Phone Number -->
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label"><b>Driver Phone Number</b></label>
                                                    {{-- <input name="phone_num" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Driver Phone Number" value="{{$driver_detail->car->user->phone_num}}" readonly> --}}
                                                    <input name="phone_num" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Driver Phone Number" value="0123456789" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <a href="https://api.whatsapp.com/send?phone=6{{$driver_detail->car->user->phone_num}}" type="button" class="btn btn-success float-right" data-bs-toggle="tooltip" title="Contact your driver through Whatsapp">Contact Driver<br><br><i class="bi bi-whatsapp"></i></a> --}}
                                        <a href="https://api.whatsapp.com/send?phone=60123456789" type="button" class="btn btn-success float-right" data-bs-toggle="tooltip" title="Contact your driver through Whatsapp">Contact Driver<br><br><i class="bi bi-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- cab history modal --}}
                <div class="modal fade" id="cabHistory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cab Ride History</h5>
                                <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th><strong>Booking Type</strong></th>
                                            <th><strong>Booking Date</strong></th>
                                            <th><strong>Pick-Up Location</strong></th>
                                            <th><strong>Drop-Off Location</strong></th>
                                            <th><strong>STATUS</strong></th>
                                        </tr>
                                    </thead>
                                        @foreach ($cab_history as $cab)
                                        <tbody>
                                            <tr>
                                                <td>Cab Service</td>
                                                <td>{{$cab->created_at}}</td>
                                                <td>{{$cab->pickup_location}}</td>
                                                <td>{{$cab->dropoff_location}}</td>
                                                {{-- <td><button href="" class="btn btn-success" disabled>Completed</button></td> --}}
                                                <td><a href="CabReview/{{$cab->id}}/displayCabServiceDetails" class="btn btn-success" data-bs-toggle="tooltip" title="Rate your car ride">Rate Car Ride</a></td>
                                            </tr>
                                        </tbody>
                                        @endforeach

                                        {{-- empty --}}
                                        @if ($cab_history->count() < 1)
                                        <tbody>
                                            <tr>
                                                <td colspan="6" class="text-center">You have not made any cab bookings</td>
                                            </tr>
                                        </tbody>
                                        @endif
                                </table>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    
    <!-- base:js -->
    @include('user.dashboard.js')

    {{-- toggle tooltip --}}
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(element){
                return new bootstrap.Tooltip(element);
            });
        });
    </script>
</body>
