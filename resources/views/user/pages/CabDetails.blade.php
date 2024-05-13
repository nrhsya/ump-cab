@extends('layouts.master')

<head>
    <title>Cab Details | UMPCab</title>

    @include('user.dashboard.css')
</head>
<x-app-layout>

<div>
    {{-- back to map page --}}
    <p class="text-center p-1" style="color:black;background-color:#FCDA37;">
        <a href="/cabServiceHomepage" id="customButton" class="float-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </a>
        <strong>Cab Details</strong>
    </p>
</div>

<div class="container-fluid rounded bg-white m-2">
    <!-- Car Details Summary -->
    <div class="m-2">
        <div style="background-color:white;">
            <div class="p-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow p-2">
                            <div class="card-body">

                                {{-- <h4 class="text-center"><b>PERODUA MYVI</b></h4> --}}
                                <h4 class="text-center m-3"><b>{{$data_car->car_model}}</b></h4>

                                <!-- Cab Image -->
                                <div class="booking4_mframe">
                                    {{-- <img src="{{URL::asset('/images/myvi.png')}}"> --}}
                                    <img src="/carimage/{{$data_car->car_image}}" alt="Car Image">
                                </div>
                                
                            </div>
                            {{-- <button type="button" class="btn btn-warning btn-lg btn-block"><strong>RM 40.00</strong></button> --}}
                            {{-- <button type="button" class="btn btn-warning btn-lg btn-block p-2"><p class="text-lg"><strong>RM {{$data_car->cab_fare}}</strong></p></button> --}}
                            <p class="text-lg text-black text-center bg-yellow p-3"><strong>RM {{$data_car->cab_fare}}</strong></p>
                        </div>
                    </div>

                    <!-- Cab details -->
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="card-body">
                
                              <!-- Bordered Tabs Justified -->
                              <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                                {{-- driver details --}}
                                <li class="nav-item flex-fill" role="presentation">
                                  <button class="nav-link w-100 active" id="driver-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-driver" type="button" role="tab" aria-controls="driver" aria-selected="true"><strong>Driver Details</strong></button>
                                </li>

                                {{-- journey details --}}
                                <li class="nav-item flex-fill" role="presentation">
                                  <button class="nav-link w-100" id="journey-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-journey" type="button" role="tab" aria-controls="journey" aria-selected="false"><strong>Journey Details</strong></button>
                                </li>
                              </ul>

                              <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                                {{-- driver details tab --}}
                                <div class="tab-pane fade show active" id="bordered-justified-driver" role="tabpanel" aria-labelledby="driver-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            {{-- <p class="text-center text-sm">DRIVER DETAILS</p> --}}
                                            <div class="bg-light m-3 rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 shadow">
                                                <button class="btn rounded-circle btn-success p-2">
                                                    <i class="bi bi-person"></i>
                                                </button>
                                                
                                                {{-- <span class="mx-2">Nur Hasya Binti Mohd Nordin</span> --}}
                                                <span class="mx-2 text-sm">{{$data_car->user->name}}</span>
                                            </div>
    
                                            <div class="bg-light m-3 rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 shadow">
                                                <a class="btn rounded-circle btn-success p-2" href="https://api.whatsapp.com/send?phone=6{{$data_car->user->phone_num}}&text=Hi I Have Booked A Ride With You">
                                                    <i class="bi bi-telephone-fill"></i>
                                                </a>
                                                  
                                                {{-- <span class="mx-2">011-14909117</span> --}}
                                                <span class="mx-2 text-sm">{{$data_car->user->phone_num}}</span>
                                            </div>
                                        </div>
    
                                        <div class="col-md-6">
                                            {{-- <p class="text-center">CAR DETAILS</p> --}}
                                            <div class="bg-light m-3 rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 shadow">
                                                <button class="btn rounded-circle btn-success p-2">
                                                    <i class="bi bi-123"></i>
                                                </button>
                                                  
                                                {{-- <span class="mx-2">Plate Number: ABC1234</span> --}}
                                                <span class="mx-2 text-sm">{{$data_car->plate_num}}</span>
                                            </div>
    
                                            <div class="bg-light m-3 rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 shadow">
                                                <button class="btn rounded-circle btn-success p-2">
                                                    <i class="bi bi-palette"></i>
                                                </button>
                                                  
                                                {{-- <span class="mx-2">Black</span> --}}
                                                <span class="mx-2 text-sm">{{$data_car->car_color}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- journey details tab --}}
                                <div class="tab-pane fade" id="bordered-justified-journey" role="tabpanel" aria-labelledby="journey-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-center text-sm text-black"><strong>PICK-UP DETAILS</strong></p>
                                            <div class="bg-light mb-2 rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 shadow">
                                                <button class="btn rounded-circle btn-success p-2">
                                                    <i class="bi bi-geo-alt-fill"></i>
                                                </button>
                                                  
                                                <span class="mx-2">KK5, UMP Pekan</span>
                                            </div>
    
                                            <div class="bg-light mb-2 rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 shadow">
                                                <button class="btn rounded-circle btn-success p-2">
                                                    <i class="bi bi-clock-fill"></i>
                                                </button>
                                                  
                                                <span class="mx-2">08:00 PM</span>
                                            </div>
    
                                            <div class="bg-light mb-2 rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 shadow">
                                                <button class="btn rounded-circle btn-success p-2">
                                                    <i class="bi bi-calendar-check-fill"></i>
                                                </button>
                                                  
                                                <span class="mx-2">23 November 2022</span>
                                            </div>
                                        </div>
    
                                        <div class="col-md-6">
                                            <p class="text-center text-sm text-black"><strong>DROP-OFF DETAILS</strong></p>
                                            <div class="bg-light mb-2 rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 shadow">
                                                <button class="btn rounded-circle btn-success p-2">
                                                    <i class="bi bi-geo-alt-fill"></i>
                                                </button>
                                                  
                                                <span class="mx-2">Terminal Sentral Kuantan (TSK)</span>
                                            </div>
    
                                            <div class="bg-light mb-2 rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 shadow">
                                                <button class="btn rounded-circle btn-success p-2">
                                                    <i class="bi bi-clock-fill"></i>
                                                </button>
                                                  
                                                <span class="mx-2">10:00 PM</span>
                                            </div>
    
                                            <div class="bg-light mb-2 rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 shadow">
                                                <button class="btn rounded-circle btn-success p-2">
                                                    <i class="bi bi-calendar-check-fill"></i>
                                                </button>
                                                  
                                                <span class="mx-2">23 November 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div><!-- End Bordered Tabs Justified -->
                            </div>
                            <div class="text-center">
                                {{-- <a id="customBtn" class="float-right mt-2" href="/CabPayment"><b>PROCEED BOOKING</b></a> --}}
                                <button type="button" class="btn btn-success m-2 rounded-pill" onclick="window.location.href='/CabPayment'">Proceed Booking</button>
    
                                {{-- cancel booking --}}
                                <button type="button" class="btn btn-danger m-2 rounded-pill" onclick="window.location.href='/cabServiceHomepage'">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>