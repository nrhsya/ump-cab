{{-- @extends('layouts.master') --}}

<head>
    <title>Car Rental Review | UMPCab</title>

    @include('user.dashboard.css')

    <style>
        .rating-css div {
            color: #ffe400;
            font-size: 30px;
            font-family: sans-serif;
            font-weight: 800;
            text-align: center;
            text-transform: uppercase;
            padding: 20px 0;
        }

        .rating-css input {
            display: none;
        }

        .rating-css input + label {
            font-size: 40px;
            text-shadow: 1px 1px 0 #8f8420;
            cursor: pointer;
        }

        .rating-css input:checked + label ~ label {
            color: #b4afaf;
        }

        .rating-css label:active {
            transform: scale(0.8);
            transition: 0.3s ease;
        }
    </style>
</head>

{{-- <x-app-layout> --}}
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
                <h2 class="text-center p-3" style="color: black">Car Rental Review</h2>   
                <div class="container-fluid rounded bg-white m-2">
                    <!-- Car Details Summary -->
                    
                        <div class="m-2">
                            <div style="background-color:white;">
                                <div class="clearfix p-2">
                                    <!-- Return to map button -->
                                    <div class="top_link p-1">
                                        {{-- back button --}}
                                        <div class="mb-3">
                                            <button type="button" class="btn btn-success btn-rounded btn-icon" onclick="window.location.href='/myBooking'">
                                                <i class="mdi mdi-arrow-left"></i>
                                            </button>
                                        </div>
                                    </div>
        
                                    <div class="row">
                                        <div class="col-md-6 p-3">
                                            <!-- Car Image -->
                                            {{-- <img src="{{URL::asset('/images/myvi.png')}}"> --}}
                                            <img src="carimage/{{$data_car->car_image}}" alt="Car Image">
                                            
                                        </div>
        
                                        <!-- Car rental details -->
                                        <div class="col-md-6">
                                            <div class="p-3" style="border-radius:25px;">
                                                {{-- <h4 class="card-title">PERODUA MYVI</h4> --}}
                                                <h4 class="card-title">{{$data_car->car_model}}</h4>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead style="background-color:#e2e9e9;">
                                                            <tr>
                                                                <th><strong>Start Date</strong></th>
                                                                <th><strong>End Date</strong></th>
                                                                <th><strong>Plate Number</strong></th>
                                                                <th><strong>Rental Duration (in Hours)</strong></th>
                                                                <th><strong>Rental Amount</strong></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{$data_car->start_date}}</td>
                                                                <td>{{$data_car->end_date}}</td>
                                                                <td>{{$data_car->car->plate_num}}</td>
                                                                <td>{{$data_car->rental_duration}}</td>
                                                                <td>RM {{$data_car->rental_amount}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                <form action="/RentalReview/rateRental" method="POST">
                                {{-- <form action="/RentalReview/{{$data_car->id}}/rateRental" method="POST"> --}}
                                    {{ csrf_field() }}

                                    <input name="car_id" type="hidden" class="form-control" id="" placeholder="Your Name" value="{{$data_car->car_id}}">
                                    <input name="car_rental_id" type="hidden" class="form-control" id="" placeholder="Your Name" value="{{$data_car->id}}">
                                    <input name="user_id" type="hidden" class="form-control" id="" placeholder="Your Name" value="{{Auth::id()}}">
                                    {{-- <input name="rental_status" type="hidden" class="form-control" id="" placeholder="Your Name" value="Completed"> --}}

                                    <div class="p-3" style="background-color:#e2e9e9;">
                                        <div>
                                            <b>Rate your car rental experience:</b>
                                        </div>

                                        <div class="rating-css">
                                            <div class="star-icon">
                                                <input type="radio" value="1" name="rating" checked id="rating1">
                                                <label for="rating1" class="fa fa-star"></label>
                                        
                                                <input type="radio" value="2" name="rating" checked id="rating2">
                                                <label for="rating2" class="fa fa-star"></label>
                                        
                                        
                                                <input type="radio" value="3" name="rating" checked id="rating3">
                                                <label for="rating3" class="fa fa-star"></label>
                                        
                                        
                                                <input type="radio" value="4" name="rating" checked id="rating4">
                                                <label for="rating4" class="fa fa-star"></label>
                                        
                                        
                                                <input type="radio" value="5" name="rating" checked id="rating5">
                                                <label for="rating5" class="fa fa-star"></label>
                                            </div>
                                        </div>

                                        <p>What do you think about the car rental?</p>       
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <textarea name="feedback" class="form-control" id="exampleTextarea1" placeholder="Please leave your feedback here" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg btn-block">Complete Review</button>
                                </div>
                            </div><br>
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

{{-- </x-app-layout> --}}