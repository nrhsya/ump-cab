<head>
    <title>Car Requests | UMPCab</title>

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
                <h2 class="text-center p-3" style="color:black;">Car Rental and Carpool Request</h2>

                {{-- car rental request --}}
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card shadow p-3 mb-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="card-title">Car Rental Requests</h4>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning float-right" data-coreui-toggle="modal" data-coreui-target="#rentalHistory">History <i class="bi bi-clock-history"></i></button>
                                </div>
                            </div>
                            
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th><strong>Renter Name</strong></th>
                                        <th><strong>IC</strong></th>
                                        <th><strong>Drivers License</strong></th>
                                        <th><strong>From</strong></th>
                                        <th><strong>Until</strong></th>
                                        <th><strong>ACTIONS</strong></th>
                                    </tr>
                                </thead>
                                @if ($data_rental->count() > 0)
                                    {{-- @if ($data_rental->car_id == Auth::id()->car()->car_id) --}}
                                        @foreach ($data_rental as $rental)
                                        <tbody>
                                            <tr>
                                                <td>{{$rental->renter_name}}</td>
                                                <td class="text-center"><img id="myImg" src="icimage/{{$rental->ic}}" alt="IC picture"></td>
                                                <td class="text-center"><img id="myImg" src="licenseimage/{{$rental->drivers_license}}" alt="Drivers License picture"></td>
                                                <td>{{$rental->start_date}}</td>
                                                <td>{{$rental->end_date}}</td>
                                                {{-- <td><button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#rentalModal">View</button></td> --}}
                                                <td><button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#rentalModal-{{ $rental->id }}">View</button></td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    {{-- @endif --}}
                                @else
                                <tbody class="text-center">
                                    <tr>
                                        <td colspan="6">No car rental requests available</td>
                                    </tr>
                                </tbody>
                                @endif
                                
                            </table>
                        </div>
                    </div>
                </div>

                {{-- carpool (cab) request --}}
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card shadow p-3 mb-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="card-title">Carpool Requests</h4>
                                </div>

                                <div class="col-md-6">
                                    <button type="button" class="btn btn-warning float-right" data-coreui-toggle="modal" data-coreui-target="#cabHistory">History <i class="bi bi-clock-history"></i></button>
                                </div>
                            </div>
                            
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th><strong>No.</strong></th>
                                        <th><strong>Passenger Name</strong></th>
                                        <th><strong>Pick-Up Location</strong></th>
                                        <th><strong>Drop-Off Location</strong></th>
                                        <th><strong>Distance</strong></th>
                                        <th><strong>ACTIONS</strong></th>
                                    </tr>
                                </thead>
                                @if ($data_cab->count() > 0)
                                    @foreach ($data_cab as $cab)
                                        <tbody>
                                            <td>{{$data_cab->firstItem() + $loop->iteration}}</td>
                                            <td>{{$cab->passenger_name}}</td>
                                            <td>{{$cab->pickup_location}}</td>
                                            <td>{{$cab->dropoff_location}}</td>
                                            <td>{{$cab->total_distance}} KM</td>
                                            <!-- <td><a href="/requestDetail" class="btn btn-success">View</a></td> -->
                                            {{-- <!-- <td><button class="btn btn-success"  data-coreui-toggle="modal" data-coreui-target="#cabModal-{{ $booking->id }}">View Request</button></td> --> --}}
                                            {{-- <td><button class="btn btn-success"  data-coreui-toggle="modal" data-coreui-target="#cabModal">View Request</button></td> --}}
                                            <td><button class="btn btn-success"  data-coreui-toggle="modal" data-coreui-target="#cabModal-{{ $cab->id }}">View Request</button></td>
                                        </tbody>
                                    @endforeach
                                @else
                                    <tbody class="text-center">
                                        <tr>
                                            <td colspan="5">No cab requests available</td>
                                        </tr>
                                </tbody>
                                @endif
                            </table>
                            {{-- Paginate --}}
                            <div class="d-flex justify-content-center">
                                {{ $data_cab->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->

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
                                <th><strong>Renter Name</strong></th>
                                <th><strong>IC</strong></th>
                                <th><strong>Drivers License</strong></th>
                                <th><strong>From</strong></th>
                                <th><strong>Until</strong></th>
                                <th><strong>ACTIONS</strong></th>
                            </tr>
                        </thead>
                        @if ($rental_history->count() > 0)
                            @foreach ($rental_history as $rental)
                            <tbody>
                                <tr>
                                    <td>{{$rental->renter_name}}</td>
                                    <td class="text-center"><img id="myImg" src="icimage/{{$rental->ic}}" alt="IC picture"></td>
                                    <td class="text-center"><img id="myImg" src="licenseimage/{{$rental->drivers_license}}" alt="Drivers License picture"></td>
                                    <td>{{$rental->start_date}}</td>
                                    <td>{{$rental->end_date}}</td>
                                    <td><button type="button" class="btn btn-success" data-coreui-toggle="modal" data-coreui-target="#rentalModal-{{ $rental->id }}">View</button></td>
                                </tr>
                            </tbody>
                            @endforeach
                        @else
                        <tbody class="text-center">
                            <tr>
                                <td colspan="6">No car rental requests available</td>
                            </tr>
                        </tbody>
                        @endif
                        
                    </table>
                </div>
            </form>
            </div>
        </div>
    </div>

    {{-- cab request history modal --}}
    <div class="modal fade" id="cabHistory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cab Request History</h5>
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th><strong>Passenger Name</strong></th>
                                <th><strong>Pick-Up Location</strong></th>
                                <th><strong>Drop-Off Location</strong></th>
                                <th><strong>Distance</strong></th>
                                <th><strong>ACTIONS</strong></th>
                            </tr>
                        </thead>
                        @if ($cab_history->count() > 0)
                            @foreach ($cab_history as $cab)
                                <tbody>
                                    <td>{{$cab->passenger_name}}</td>
                                    <td>{{$cab->pickup_location}}</td>
                                    <td>{{$cab->dropoff_location}}</td>
                                    <td>{{$cab->total_distance}} KM</td>
                                    
                                    @if ($cab->status == 'Accepted')
                                        <td><button class="btn btn-warning">View Details</button></td>
                                    @endif

                                    @if ($cab->status == 'Completed')
                                        <td><button class="btn btn-success" disabled>Completed</button></td>
                                    @endif
                                </tbody>
                            @endforeach
                        @else
                            <tbody class="text-center">
                                <tr>
                                    <td colspan="5">No cab requests available</td>
                                </tr>
                            </tbody>
                        @endif
                    </table>
                </div>
            </form>
            </div>
        </div>
    </div>

    {{-- car rental request modal --}}
    @foreach ($data_rental as $rental)
    <div class="modal fade" id="rentalModal-{{ $rental->id }}" tabindex="-1" aria-labelledby="rentalModal-{{ $rental->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Car Rental Request Details</h5>
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <form action="/myBooking/{{$rental->id}}/acceptRental" method="POST">
                        {{csrf_field()}}

                        <div class="row">
                            {{-- Renter details --}}
                            <div class="col-6">
                                <input name="rental_status" type="hidden" class="form-control" id="" placeholder="Your Name" value="Ongoing">
                                {{-- Driver's License --}}
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Drivers License</b></label>
                                    <input name="drivers_license" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Drivers License" value="{{$rental->drivers_license}}" disabled>
                                </div>

                                <!-- Renter Name -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Renter Name</b></label>
                                    <input name="renter_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="KALAIVANI A/P RAMANI" value="{{$rental->renter_name}}" disabled>
                                </div>

                                <!-- Renter Email -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Renter Email</b></label>
                                    <input name="renter_email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="kalaivani@gmail.com" value="{{$rental->renter_email}}" disabled>
                                </div>

                                <!-- Renter Phone Number -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Renter Phone Number</b></label>
                                    <input name="renter_phone_num" type="text" class="form-control" id="exampleFormControlInput1" placeholder="012-3456789" value="{{$rental->renter_phone_num}}" disabled>
                                </div>
                            </div>

                            {{-- Rental details --}}
                            <div class="col-6">
                                <!-- Car Model -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Car Model</b></label>
                                    <input name="course_code" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Perodua Axia" value="{{$rental->car->name}}" disabled>
                                </div>

                                <!-- Rental Duration -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Rental Duration</b></label>
                                    <div class="row">
                                        <div class="col-6">
                                            {{-- From --}}
                                            <input name="start_date" type="text" class="form-control" id="exampleFormControlInput1" placeholder="2023-01-18 21:19:00" value="{{$rental->start_date}}" disabled>
                                        </div>

                                        <div class="col-6">
                                            {{-- Until --}}
                                            <input name="end_date" type="text" class="form-control" id="exampleFormControlInput1" placeholder="2023-01-19 21:19:00" value="{{$rental->end_date}}" disabled>             
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Rental Fare -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Rental Amount</b></label>
                                    <input name="rental_amount" type="text" class="form-control" id="exampleFormControlInput1" placeholder="RM 100.00" value="RM {{$rental->rental_amount}}" disabled>
                                </div>
                            </div>
                        </div>

                        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                    {{-- </form> --}}
                </div>
                <div class="modal-footer">
                    <button type="Submit" class="btn btn-success">Approve</button>
                    <a href="https://api.whatsapp.com/send?phone=6{{$rental->renter_phone_num}}" class="btn btn-warning">Contact Renter (Whatsapp)</a>
                    {{-- <button type="button" class="btn btn-success">Contact Renter</button> --}}
                    {{-- <button type="button" class="btn btn-danger">Reject</button> --}}
                </div>
            </form>
            </div>
        </div>
    </div>
    @endforeach

    {{-- cab request modal --}}
    @foreach ($data_cab as $cab)
    <div class="modal fade" id="cabModal-{{ $cab->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cab Request Details</h5>
                <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
            </div>
            <div class="modal-body">
                <form action="/requestDetail/{{$cab->id}}/acceptCab" method="POST">
                    {{csrf_field()}}
                        <div class="row">
                            {{-- hidden fields --}}
                            {{-- <input name="car_id" type="text" class="form-control" id="exampleFormControlInput1" value="{{Auth::user()->car_id}}" readonly> --}}
                            <input name="car_id" type="hidden" class="form-control" id="exampleFormControlInput1" value="{{$car_list->id}}" readonly>
                            <input name="total_cab_fare" type="hidden" class="form-control" id="exampleFormControlInput1" value="{{$car_list->cab_fare}}" readonly>
                            <input name="status" type="hidden" class="form-control" id="exampleFormControlInput1" value="Accepted" readonly>
                            {{-- <input name="total_cab_fare" type="hidden" class="form-control" value={{$car_list->cab_fare}} readonly> --}}

                            {{-- Passenger Details --}}
                            <div class="col-6">
                                <!-- Passenger Name -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Passenger Name</b></label>
                                    {{-- <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="KALAIVANI A/P RAMANI" value="{{$rental->renter_name}}" disabled> --}}
                                    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Passenger Name" value="{{$cab->passenger_name}}" readonly>
                                </div>

                                <!-- Passenger Email -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Passenger Email</b></label>
                                    {{-- <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="kalaivani@gmail.com" value="{{$rental->renter_email}}" readonly> --}}
                                    <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Passenger Email" value="{{$cab->passenger_email}}" readonly>
                                </div>

                                <!-- Passenger Phone Number -->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Passenger Phone Number</b></label>
                                    {{-- <input name="phone_num" type="text" class="form-control" id="exampleFormControlInput1" placeholder="012-3456789" value="{{$rental->renter_phone_num}}" readonly> --}}
                                    <input name="phone_num" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Passenger Phone Number" value="{{$cab->passenger_phone_num}}" readonly>
                                </div>
                            </div>

                            {{-- car Details --}}
                            <div class="col-6">
                                <!-- Pick-Up & Drop-Off -->
                                <div class="mb-3">
                                    <div class="mb-3">
                                        {{-- Pick-up --}}
                                        <label for="exampleFormControlInput1" class="form-label"><b>Pick-Up Location</b></label>
                                        <input name="pickup_location" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pick-Up" value="{{$cab->pickup_location}}" readonly>
                                    </div>
        
                                    <div class="mb-3">
                                        {{-- Drop-off --}}
                                        <label for="exampleFormControlInput1" class="form-label"><b>Drop-Off Location</b></label>
                                        <input name="dropoff_location" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Drop-Off" value="{{$cab->dropoff_location}}" readonly>                      
                                    </div>

                                    <div class="mb-3">
                                        <!-- Distance -->
                                        <label for="exampleFormControlInput1" class="form-label"><b>Distance</b></label>
                                        <input name="total_distance" type="text" class="form-control" id="total_distance" placeholder="Drop-Off" value="{{$cab->total_distance}} KM" readonly>                      
                                    </div>

                                    <div class="mb-3">
                                        <input name="cab_fare" type="hidden" class="form-control" id="cab_fare" placeholder="Cab Fare" value="{{$car_list->cab_fare}}" readonly>                      
                                        <input name="total_cab_fare" type="hidden" class="form-control" id="displayFare" readonly>            
                                    </div>
                                    <p id="displayFare"></p>
                                    {{-- <button type="button" class="btn btn-info" onclick="calcCabFare()">Calculate cab fare</button> --}}
                                </div>
                            </div>
                        </div>
        
                        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                    {{-- </form> --}}
            </div>
            <div class="modal-footer">
              {{-- <a href="/requestDetail" type="button" class="btn btn-success">Accept Request</a> --}}
              {{-- <a href="requestDetail/{{$cab->id}}/cabBookingDetail" type="submit" class="btn btn-success">Accept Request</a> --}}
              <button type="submit" class="btn btn-success">Accept Request</button>
              <button type="button" class="btn btn-danger" data-coreui-dismiss="modal">Cancel</button>
            </div>
        </form>
          </div>
        </div>
    </div>
    @endforeach
    
    <!-- base:js -->
    @include('user.dashboard.js')

    <script>
        // calculate total cab fare
        function calcCabFare()
        {
            var cab_fare = document.getElementById('cab_fare').value;
            var total_distance = document.getElementById('total_distance').value;
            var total_cab_fare = cab_fare * total_distance;

            var displayCabFare = total_cab_fare.toFixed(2);
            document.getElementById('displayFare').value = 'displayCabFare';
            // var cab_fare = parseInt(document.cab_fare.value);
            // var total_distance = parseInt(document.total_distance.value);
            // var total_cab_fare = cab_fare * total_distance;

            // var displayCabFare = total_cab_fare.toFixed(2);
            // document.getElementById('displayFare').value = displayCabFare;
        }
    </script>
</body>