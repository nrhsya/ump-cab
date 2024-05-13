@extends('layouts.master')

<head>
    <title>Car Details | UMPCab</title>

    <script src="js/calc.js"></script>

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
            font-size: 60px;
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

        .checked {
            color: #ffd900;
        }
    </style>
</head>

<x-app-layout>

<div>
    <p class="text-center p-2" style="color:black;background-color:#FCDA37;">
        <a href="/carList" id="customButton" class="float-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </a>
        <strong>Car Details</strong>
    </p>
</div>

<div class="container-fluid rounded bg-white m-2">
    <div class="row text-center m-4">
        <span>To proceed with the car rental, please fill in the required details inside the <strong>Renter Details</strong> and <strong>Rental Details</strong> tab</span>
    </div>
    <div class="row p-2">
        {{-- car details --}}
        <div class="col-md-5">
            <div class="row">
                <!-- Car Image -->
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
            
                          <!-- Bordered Tabs Justified -->
                          <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                            {{-- car image --}}
                            <li class="nav-item flex-fill" role="presentation">
                              <button class="nav-link w-100 active" id="car-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-car" type="button" role="tab" aria-controls="car" aria-selected="true"><strong>Car Image</strong></button>
                            </li>

                            {{-- car details --}}
                            <li class="nav-item flex-fill" role="presentation">
                              <button class="nav-link w-100" id="detail-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-detail" type="button" role="tab" aria-controls="detail" aria-selected="false"><strong>Car Details</strong></button>
                            </li>
                          </ul>

                          <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                            {{-- car image tab --}}
                            <div class="tab-pane fade show active" id="bordered-justified-car" role="tabpanel" aria-labelledby="car-tab">
                                <div class="booking4_mframe">
                                    <h2 class="text-center"><strong>{{$data_car->car_model}}</strong></h2>
                                    <img src="/carimage/{{$data_car->car_image}}" alt="Car Image">
                                </div>
                            </div>

                            {{-- car details tab --}}
                            <div class="tab-pane fade" id="bordered-justified-detail" role="tabpanel" aria-labelledby="detail-tab">
                                <div class="row rounded p-2">
                                    <h2><strong>{{$data_car->car_model}}</strong></h2>
                                    <div class="row">
                                        <div class="nav-link m-3">
                                            <i class="bi bi-patch-check-fill menu-icon"></i>
                                            <span class="menu-title text-black">Plate Number: <strong>{{$data_car->plate_num}}</strong></span>
                                        </div>

                                        <div class="nav-link m-3">
                                            <i class="bi bi-patch-check-fill menu-icon"></i>
                                            <span class="menu-title text-black">Rental Fare : <strong>RM{{$data_car->rental_fare}}</strong> per hour</span>
                                        </div>

                                        <div class="nav-link m-3">
                                            <i class="bi bi-patch-check-fill menu-icon"></i>
                                            <span class="menu-title text-black">Color: <strong>{{$data_car->car_color}}</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <a href="https://api.whatsapp.com/send?phone=6{{$data_car->user->phone_num}}" class="btn btn-success">Contact Car Owner (Whatsapp)</a>
                            </div>
                          </div><!-- End Bordered Tabs Justified -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- car rental form --}}
        <div class="col-md-7">
            <div class="row">
                {{-- driver details --}}
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                          <!-- Bordered Tabs Justified -->
                          <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="rating-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-rating" type="button" role="tab" aria-controls="rating" aria-selected="false"><strong>Review & Feedbacks</strong></button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                              <button class="nav-link w-100 active" id="renter-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-renter" type="button" role="tab" aria-controls="renter" aria-selected="true"><strong>Renter Details</strong></button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                              <button class="nav-link w-100" id="rental-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-rental" type="button" role="tab" aria-controls="rental" aria-selected="false"><strong>Rental Details</strong></button>
                            </li>
                          </ul>
                          
                          {{-- tabs --}}
                          <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                            {{-- feedback and reviews tab --}}
                            <div class="tab-pane fade" id="bordered-justified-rating" role="tabpanel" aria-labelledby="rating-tab">
                                <div class="p-3">
                                    @if ($data_rating->count() > 0)
                                        @foreach ($data_rating as $rating)
                                            
                                            <div class="card shadow mb-3">
                                                <div class="card-body">
                                                    <p class="text-black"><strong>Rated {{$rating->rating}} out of 5</strong></p>
                                                    {{-- {{ number_format($rating_value) }} --}}
                                                    <div class="rating">
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        {{-- <span>{{$rating->count()}}</span> --}}
                                                    </div>
                                                    <p class="text-sm text-gray float-right">By: {{$rating->name}}</p>
                                                    <p class="text-black text-sm">{{$rating->feedback}}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p class="text-center text-sm"><strong>No rating yet</strong></p>
                                    @endif
                                </div>
                                {{-- Paginate --}}
                                <div class="d-flex justify-content-center">
                                    {{ $data_rating->links() }}
                                </div>
                            </div>

                            {{-- renter detail tab (driver) --}}
                            <div class="tab-pane fade show active" id="bordered-justified-renter" role="tabpanel" aria-labelledby="renter-tab">
                                <div class="card-body text-center">
                                    <span style="color:red;"><strong>Please fill in the required information in order to proceed with the booking</strong></span>
                                </div>
                                <form class="row g-3" action="/ConfirmPage/rentCarBooking" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        {{-- car details (hidden from user) --}}
                                        <input name="car_id" type="hidden" class="form-control" id="" placeholder="Your Name" value="{{$data_car->id}}">
                                        {{-- <input name="rental_status" type="hidden" class="form-control" id="" placeholder="Your Name" value="Ongoing"> --}}
                                        <input name="rental_status" type="hidden" class="form-control" id="" placeholder="Your Name" value="Waiting">

                                        <div class="col-md-6">
                                            <label for="floatingName">Driver's License *</label>
                                            <p class="text-sm">Please provide proof of your drivers license before proceeding with the car rental</p>
                                            <input name="drivers_license" type="file" class="form-control" id="floatingName" placeholder="Your Name">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="floatingName">IC *</label>
                                            <p class="text-sm">Please provide proof of your IC before proceeding with the car rental</p>
                                            <input name="ic" type="file" class="form-control" id="floatingName" placeholder="Your Name">
                                        </div>
            
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                            <input name="renter_name" type="text" class="form-control" id="floatingPassword" placeholder="Name">
                                            <label for="floatingPassword">Name</label>
                                            </div>
                                        </div>
            
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input name="renter_email" type="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                                                <label for="floatingEmail">Email</label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6 mb-10">
                                            <div class="form-floating">
                                            <input name="renter_phone_num" type="text" class="form-control" id="floatingEmail" placeholder="Your Email">
                                            <label for="floatingEmail">Phone Number</label>
                                            </div>
                                        </div>
                            </div>

                            {{-- rental detail tab --}}
                            <div class="tab-pane fade" id="bordered-justified-rental" role="tabpanel" aria-labelledby="rental-tab">
                                <div class="card-body text-center">
                                    <span style="color:red;"><strong>Please fill in the required information in order to proceed with the booking</strong></span>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input name="start_date" type="datetime-local" class="form-control" id="start_date" placeholder="Your Name">
                                            <label for="floatingName">Rent From</label>
                                        </div>
                                    </div>
        
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input name="end_date" type="datetime-local" class="form-control" id="end_date" placeholder="Password" onblur="document.getElementById('rental_duration').value = (new Date(this.value) - new Date(start_date.value))/(1000*60*60);calcRentalAmount()">
                                            <label for="floatingPassword">Rent Until</label>
                                        </div>
                                    </div>
        
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input name="rental_duration" type="number" class="form-control" id="rental_duration" placeholder="Rental Duration" onchange="changeDate()" readonly>
                                            <label for="floatingPassword">Rental Duration (Hour)</label>
                                        </div>
                                    </div>

                                    {{-- rental fare per hour --}}
                                    <input name="rental_fare" type="hidden" class="form-control" id="rental_fare" placeholder="Rental Fare" value="{{$data_car->rental_fare}}">

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input name="rental_amount" type="number" class="form-control" id="rental_amount" placeholder="Rental Amount" readonly>
                                            <label for="floatingPassword">Rental Amount (RM)</label>
                                        </div>
                                    </div>

                                    <span class="m-2 text-sm">* The rental duration and rental amount will be generated after you choose your rental date</span>
                                </div>
                                    <button type="submit" class="btn btn-success p-2 m-2 float-right">Book This Car</button>
                                    <button type="reset" class="btn btn-danger p-2 m-2 float-right" >Clear Form</button>
                                </form>
                            </div>
                          </div>
                          <!-- End Bordered Tabs Justified -->
                                {{-- <button type="submit" class="btn btn-success p-2 m-2 float-right">Book This Car</button>
                                <button type="reset" class="btn btn-danger p-2 m-2 float-right" >Clear Form</button> --}}
            
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </div>
</div>

<script>
    // calculate rental amount
    function calcRentalAmount() {
        duration = document.getElementById("rental_duration").value;
        fare = document.getElementById("rental_fare").value;
        rental_amount = duration * fare;

        document.getElementById("rental_amount").value = rental_amount;
    }
</script>

{{-- sweet alert js --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('success'))
    <script>
      swal("Successful" ,"{{ session('success') }}", "success")
    </script>
@endif

</x-app-layout>