@extends('layouts.master')

<head>
    <title>Confirm Rental | UMPCab</title>

    <!-- put logo on browser tab -->
    <link rel="icon" href="images/UMPCablogowhite.png">
</head>

<x-app-layout>

<div>
    <p class="text-center p-2" style="color:black;background-color:#FCDA37;">
        <strong>Confirm Car Rental</strong>
    </p>
</div>

<div class="container-fluid rounded bg-white m-2">
    <div class="row">
        <div class="col-md-3">
            <div class="top_link" style="padding:10px;">
                <a href="/carList" id="customButton" style="border-radius:25px;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="col-md-9">
            <div class="row" width="100%" style="background-color:white;">
                {{-- breadcrumbs --}}
                <div class="flex items-center py-4 overflow-y-auto whitespace-nowrap">            
                    {{-- options --}}
                    <a href="/carRentalDetails" class="bg-warning rounded-pill p-3 flex items-center text-black -px-2 dark:text-gray-200 hover:-translate-y-1 hover:scale-110 hover:bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                
                        <span class="mx-2">Car Rental Details</span>
                    </a>
                
                    <span class="mx-5 text-gray-500 dark:text-gray-300 rtl:-scale-x-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                
                    {{-- rental details --}}
                    {{-- <a href="/RentalDetails" class="bg-warning rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 hover:-translate-y-1 hover:scale-110 hover:bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                
                        <span class="mx-2">Rental Details</span>
                    </a>
        
                    <span class="mx-5 text-gray-500 dark:text-gray-300 rtl:-scale-x-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span> --}}
        
                    {{-- Confirmation --}}
                    <a href="/ConfirmPage" class="border border-warning rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 hover:-translate-y-1 hover:scale-110 hover:bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                
                        <span class="mx-2"><strong>Confirmation</strong></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-2">
        <!-- Driver Details Form -->
        <div class="p-3" style="background-color:white;">
            <!-- form to insert data -->
        <form action="#" method="POST">
            <h3><b>CONFIRM YOUR RENTAL DETAILS</b></h3><hr>

            {{-- <div class="row p-3 rounded-pill shadow p-3 mb-5" style="background-color:#e2e9e9;"> --}}

            {{-- @foreach ($rent_car as $rent) --}}
            <div class="row p-3 mb-5">
                <div class="col-md-4">
                    {{-- car image --}}
                    <div class="booking4_mframe">
                        {{-- <img src="/carimage/{{$rent_car->car->car_image}}" alt="Car Image"> --}}
                        <img src="{{URL::asset('/images/myvi.png')}}" alt="Car Image">
                    </div>

                    {{-- car details --}}
                    <div class="row rounded p-2">
                        {{-- <h2><strong>{{$rent_car->car->car_model}}</strong></h2> --}}
                        <h2><strong>Perodua Myvi</strong></h2>
                        <div class="row">
                            <div class="nav-link">
                                <i class="bi bi-patch-check-fill menu-icon"></i>
                                {{-- <span class="menu-title text-black">Plate Number: <strong>{{$rent_car->car->plate_num}}</strong></span> --}}
                                <span class="menu-title text-black">Plate Number: <strong>ABC1234</strong></span>
                            </div>

                            <div class="nav-link">
                                <i class="bi bi-patch-check-fill menu-icon"></i>
                                {{-- <span class="menu-title text-black">Rental Fare : <strong>RM{{$rent_car->car->rental_fare}}</strong> per hour</span> --}}
                                <span class="menu-title text-black">Rental Fare : <strong>RM 50</strong> per hour</span>
                            </div>

                            <div class="nav-link">
                                <i class="bi bi-patch-check-fill menu-icon"></i>
                                {{-- <span class="menu-title text-black">Color: <strong>{{$rent_car->car->car_color}}</strong></span> --}}
                                <span class="menu-title text-black">Color: <strong>Purple</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-4">
                    <img src="{{URL::asset('/images/myvi.png')}}">
                    
                </div> --}}

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow p-3 mb-3">
                                <div class="card-body">
                                    {{-- driver details --}}
                                    <span><strong>DRIVER DETAILS</strong></span><hr>
                                    <p>
                                        {{-- {{$rent->name}}<br>
                                        {{$rent->phone_num}}<br>
                                        {{$rent->email}} --}}
                                        {{ Auth::user()->name }}<br>
                                        {{ Auth::user()->phone_num }}<br>
                                        {{ Auth::user()->email }}
                                    </p>

                                    {{-- rental details --}}
                                    <span><strong>RENTAL DETAILS</strong></span>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card shadow p-2">
                                                <div class="card-body">
                                                    <span>START:</span>
                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                                        </svg>
    
                                                        <span>20/01/2022</span>
                                                    </div>
                                                
                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
    
                                                        <span>8:00 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="card shadow p-2">
                                                <div class="card-body">
                                                    <span>END:</span>
                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                                        </svg>
    
                                                        {{-- <span>{{$rent->end_date}}</span> --}}
                                                        <span>21/01/2022</span>
                                                    </div>
                                                
                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
    
                                                        <span>10:00 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- rental details --}}
                            {{-- <div class="card shadow p-3 mb-2">
                                <div class="card-body">
                                    <span><strong>RENTAL DETAILS</strong></span>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card shadow p-2">
                                                <div class="card-body">
                                                    <span>START:</span>
                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                                        </svg>
    
                                                        
                                                        <span>20/01/2022</span>
                                                    </div>
                                                
                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
    
                                                        <span>8:00 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="card shadow p-2">
                                                <div class="card-body">
                                                    <span>END:</span>
                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                                        </svg>
    
                                                        <span>21/01/2022</span>
                                                    </div>
                                                
                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
    
                                                        <span>10:00 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <div class="col-md-6">
                            {{-- cost summary --}}
                            <div class="card shadow p-3 mb-2">
                                <div class="card-body">
                                    <span><strong>COST SUMMARY</strong></span><hr>
                                    {{-- rental cost --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            Rental
                                        </div>

                                        <div class="col-md-6">
                                            RM 100.00                                            
                                        </div>
                                    </div><hr>

                                    {{-- total --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5><strong>TOTAL</strong></h5>
                                        </div>

                                        <div class="col-md-6">
                                            RM 100.00
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- payment method --}}
                            <div class="card shadow p-3 mb-2">
                                <div class="card-body">
                                    <span><strong>PAYMENT METHOD</strong></span>
                                    <p>Choose your payment method:</p>
                                        <button type="button" class="m-2 btn btn-primary btn-lg btn-block">PayPal</button>
                                        <button type="button" class="m-2 btn btn-success btn-lg btn-block">Online Banking</button>

                                        <button type="button" class="m-2 btn btn-warning btn-lg">Cash</button>
                                        <button type="button" class="m-2 btn btn-info btn-lg" data-coreui-toggle="modal" data-coreui-target="#creditCard">Credit Card</button>
                                </div>
                            </div>
                        </div>
                        {{-- <h4 class="m-2 text-center"><strong> PERODUA MYVI</strong></h4>
                        <div class="col-md-12">
                            
                            <div class="bg-light rounded-pill p-2 m-2 flex items-center text-black -px-2 dark:text-blue-400">
                                <span>DRIVER DETAILS</span>
                                <p class="m-2">Name: xxxxxxx<br>
                                    Email: xxxx@xxxx.xxx<br>
                                    Phone Number: xxx-xxxxxxx
                                </p>
                            </div>

                            
                            <div class="bg-light rounded-pill p-2 m-2 flex items-center text-black -px-2 dark:text-blue-400">
                                <span>RENTAL DETAILS</span>
                                <p class="m-2">FROM 1 January UNTIL 3 January
                                </p>
                            </div>

                            
                            <div class="bg-light rounded-pill p-2 m-2 flex items-center text-black -px-2 dark:text-blue-400">
                                <span>PAYMENT DETAILS</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
                

                {{-- <div class="col-6 text-center">
                    <h4 class="m-2 text-center"><strong> PERODUA MYVI</strong></h4>
                    <div class="card bg-light">
                        <div class="card-body">
                            <!-- Driver details -->
                            <span>RENTER DETAILS</span>
                            <p>Name: xxxxxxx<br>
                                Email: xxxx@xxxx.xxx<br>
                                Phone Number: xxx-xxxxxxx
                            </p><hr>

                            <!-- Rental details -->
                            <span>RENTAL DURATION</span>
                            <p>FROM 1 January UNTIL 3 January
                            </p><hr>

                            <!-- Payment details -->
                            <span>PAYMENT DETAILS</span>
                            <p>Payment Method: xxxxxxx<br>
                                Payment Amount: RMxx.xx
                            </p>
                        </div>
                    </div>
                </div> --}}
                
                {{-- <a href="/myBooking" class="customButton2">Confirm Booking</a> --}}
                <button type="button" class="btn btn-success p-2 m-2 float-right" onclick="window.location.href='/myBooking'">Confirm Booking</button>
            </div>
            {{-- @endforeach --}}
        </form>
        </div>
    </div>
</div>

{{-- modals --}}

{{-- for credit card --}}
<div class="modal fade" id="creditCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Credit Card Credentials</h5>
                <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    {{csrf_field()}}
                        
                        <!-- Car Model -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>Car Model</b></label>
                            <input name="car_model" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Car Model"> {{-- nnti buat disabled --}}
                        </div>
                        
                        <!-- Rental Fare -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>Rental Fare</b></label>
                            <input name="rental_fare" type="text" class="form-control" id="exampleFormControlInput1" placeholder="RM 0.00"> {{-- nnti buat disabled --}}
                        </div>

                        <!-- Additional Details -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>Additional Details</b></label>
                            <textarea name="Address" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Additional details ..."></textarea>
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

@include('user.dashboard.js')

</x-app-layout>