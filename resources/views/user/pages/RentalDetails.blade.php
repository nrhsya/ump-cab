@extends('layouts.master')

<head>
    <title>Rental Details | UMPCab</title>
</head>

<x-app-layout>

<div>
    <p class="text-center p-2" style="color:black;background-color:#FCDA37;">
        <strong>Rental Details</strong>
    </p>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="top_link p-3 m-2">
            <a href="/carList" id="customButton" style="border-radius:25px;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
    </div>

    <div class="col-md-9">
        {{-- breadcrumbs --}}
        <div class="row" width="100%" style="background-color:white;">
            {{-- breadcrumbs --}}
            <div class="flex items-center py-4 overflow-y-auto whitespace-nowrap">            
                {{-- options --}}
                <a href="/carRentalDetails" class="bg-warning rounded-pill p-3 flex items-center text-black -px-2 dark:text-gray-200 hover:-translate-y-1 hover:scale-110 hover:bg-light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
            
                    <span class="mx-2">Options</span>
                </a>
            
                <span class="mx-5 text-gray-500 dark:text-gray-300 rtl:-scale-x-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
            
                {{-- rental details --}}
                <a href="/RentalDetails" class="border border-warning rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 hover:-translate-y-1 hover:scale-110 hover:bg-light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
            
                    <span class="mx-2"><strong>Rental Details</strong></span>
                </a>

                <span class="mx-5 text-gray-500 dark:text-gray-300 rtl:-scale-x-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>

                {{-- payment --}}
                {{-- <a href="/PaymentDetails" class="bg-warning rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 hover:-translate-y-1 hover:scale-110 hover:bg-light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
            
                    <span class="mx-2">Payment</span>
                </a>

                <span class="mx-5 text-gray-500 dark:text-gray-300 rtl:-scale-x-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </span> --}}

                {{-- Confirmation --}}
                <a href="/ConfirmPage" class="bg-warning rounded-pill p-3 flex items-center text-black -px-2 dark:text-blue-400 hover:-translate-y-1 hover:scale-110 hover:bg-light">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
            
                    <span class="mx-2">Confirmation</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row m-2">
    {{-- driver details --}}
    <div class="col-md-12">
        <div class="card shadow p-4">
            <div class="row">
                <div class="col-md-6">
                    <!-- Renter Details Form -->
                    <div class="card-body">
                        <h5 class="card-title"><strong>Driver Details (Renter)</strong></h5><br>
                        <form class="row g-3" action="/ConfirmPage/rentCarBooking" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="col-md-12">
                                <label for="floatingName">Driver's License</label>
                                <p>Please provide proof of your drivers license before proceeding with the car rental</p>
                                <input name="drivers_license" type="file" class="form-control" id="floatingName" placeholder="Your Name">
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                <input name="name" type="text" class="form-control" id="floatingPassword" placeholder="Name">
                                <label for="floatingPassword">Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="email" type="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                                    <label for="floatingEmail">Email</label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                <input name="phone_num" type="text" class="form-control" id="floatingEmail" placeholder="Your Email">
                                <label for="floatingEmail">Phone Number</label>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Rental Details Form -->
                    <div class="card-body">
                        <h5 class="card-title"><strong>Rental Details</strong></h5><br>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="start_date" type="date" class="form-control" id="floatingName" placeholder="Your Name">
                                    <label for="floatingName">Rent From</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="end_date" type="date" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Rent Until</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input name="rental_duration" type="number" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Rental Duration</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="additional_details" class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                                    <label for="floatingTextarea">Additional Details</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success p-3 float-right" onclick="window.location.href='/ConfirmPage'">PROCEED</button>
                    {{-- <button type="submit" class="btn btn-success p-3 float-right">PROCEED</button> --}}
                </form>
                </div>
            </div>
            
            {{-- <div class="text-center m-4">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div> --}}
        </div>
    </div>
</div>

</x-app-layout>