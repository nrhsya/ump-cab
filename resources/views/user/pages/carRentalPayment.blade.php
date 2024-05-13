@extends('layouts.master')

<head>
    <title>Car Rental Payment | UMPCab</title>
</head>

<x-app-layout>

<div>
    <h1 class="text-center p-3" style="background-color:#FCDA37;">
        Car Rental Payment Details
    </h1>
</div>

<div class="row">
    <!-- Left Side -->
    <div class="col-9">
        <!-- Car Details Summary -->
        <div class="row p-5" style="user-select: auto;background-color:#e2e9e9;">
            <div class="booking2_model_title" style="user-select: auto;"><b><h1>Car Details</h1></b></div>
            <div class="product_model_detail" style="user-select: auto;">Please confirm the details of the car: </div><br><br>

            <div class="container">
                <p>Car Information</p>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div class="booking2_model_title"><strong>Perodua  Myvi </strong></div>
                                <div class="product_model_type">Myvi</div>
                                <div class="booking4_mframe"><img src="{{URL::asset('/image/myvi.png')}}"></div>
                                <hr>
                                <div class="product_model_detail text-center"><b>Vehicle Details</b></div>
                                <hr>
                                <div class="row border rounded">
                                    <span>
                                        <img src="{{URL::asset('/image/Icons/people.png')}}">X 5 Passengers&nbsp;
                                        <img src="{{URL::asset('/image/Icons/car_door.png')}}">&nbsp;X 4 Doors&nbsp;
                                        <img src="{{URL::asset('/image/Icons/luggage.png')}}">&nbsp;X 4 Luggage&nbsp;
                                        <img src="{{URL::asset('/image/Icons/snowflake.png')}}">&nbsp;AirConditioned&nbsp;								 
                                        <img src="{{URL::asset('/image/Icons/auto.png')}}">Auto
                                    </span>									 						 
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <!-- Driver/Renter Details -->
        <div class="row p-5" style="user-select: auto;background-color:#FCDA37;">
            <!-- Driver/Renter Details Form -->
            <div class="row" style="user-select: auto;">
                <div class="booking2_model_title" style="user-select: auto;"><b><h1>Driver Details</h1></b></div>
                <div class="product_model_detail" style="user-select: auto;">Please enter the drivers details below to complete your booking.</div>
            </div>

            <!-- First Name -->
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">First Name</span>
                </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="First Name">
            </div>

            <!-- Last Name -->
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Last Name</span>
                </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Second Name">
            </div>

            <!-- Phone Number -->
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Phone Number</span>
                </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Phone Number">
            </div>

            <!-- Email -->
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Email">
            </div>

            <!-- Additional Message -->
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Additional Message</span>
                </div>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
        </div>

        <!-- Payment Methods -->
        <div class="row p-5" style="user-select: auto;background-color:#11ADA4;">
            <div class="booking2_model_title" style="user-select: auto;"><b><h1>Choose Payment Method</h1></b></div>
            <div class="product_model_detail" style="user-select: auto;">Please choose the payment method you wish to use: </div><br><br>

            <div class="container">
                <div class="row">
                    <!-- Left side -->
                    <div class="col-5 m-5 g-5">
                        <!-- Credit Card -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="creditCard" value="creditCard">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <h3>Credit Card</h3>
                            </label><br>
                            <form>
                                <div class="form-group"><br>
                                    <!-- Cardholder's Name -->
                                    <label for="exampleInputEmail1">Cardholders Name * </label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cardholder's Name"><br>

                                    <!-- Card Number -->
                                    <label for="exampleInputEmail1">Card Number * </label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Card Number"><br>

                                    <div class="row g-5 align-items-center">
                                        <div class="col-auto">
                                            <!-- Expiration Date -->
                                            <label for="exampleInputEmail1">Expiration Date * </label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Expiration Date">
                                        </div>

                                        <div class="col-auto">
                                            <!-- CVC -->
                                            <label for="exampleInputEmail1">CVC * </label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CVC">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div><br>

                        <!-- Online Banking -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="onlineBanking" value="onlineBanking">
                            <label class="form-check-label" for="flexRadioDefault2">
                                <h3>Online Banking</h3>
                            </label>
                            <form>
                                <div class="form-group"><br>
                                    <label for="sel1"><b>Select a bank: </b></label>
                                    <select class="form-control" id="sel1">
                                        <option>Bank Islam</option>
                                        <option>Maybank2U</option>
                                        <option>Hong Leong Bank</option>
                                        <option>Ambank</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Right side -->
                    <div class="col-5 m-5 g-5">
                        <!-- Paypal -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="paypal" value="paypal">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <h3>Paypal</h3>
                            </label>
                        </div><br>

                        <!-- Cash -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="cash" value="cash">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <h3>Cash</h3>
                            </label><br><br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter cash amount: </label>
                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="RMxx.xx">
                                <small id="emailHelp" class="form-text text-muted" style="color:#FCDA37;">Please make sure you have made the payment with the car owner!</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Terms & Conditions -->
        <div class="row p-5" style="user-select: auto;background-color:#0958A3;color:white;">
            <div class="booking2_model_title" style="user-select: auto;"><b><h1>Terms & Conditions</h1></b></div>
            <div class="product_model_detail" style="user-select: auto;">Please agree to the terms and conditions: </div><br><br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    I acknowledge that I have read and understood the <a href="#" style="color:red;">Terms and Conditions</a>.<br>
                    Please notethat it may take a few moments to process your reservation. Please do not attempt to refresh your request whilst this operation is in progress.
                </label>
            </div><br><br>
            <!-- Confirm Rent -->
            <div class="col-12 text-center">
                <a class="btn btn-success btn-lg" id="backButton" href=""><b>Confirm Booking</b><br><br></a><br><br>
            </div>
        </div>

    </div>

    <!-- Right Side -->
    <div class="col-3">
        <div class="row justify-content-center">
            <div class="col-11">
                <div class="card">
                    <div class="card-header">{{ __('Rental Info') }}</div>

                    <div class="card-body">
                    <p>Pick-Up & Drop-off Details</p>

                    <div class="row">
                        <div class="col">
                            <hr>
                            <div class="booking4_model_title text-center"><b>PICK UP</b></div><hr>
                            <div>Location: </div>
                            <strong>KLIA 2 - Low Cost</strong><br><br>
                            <div>Date & Time: </div>
                            <strong>2022 Mar 19 10:00 AM</strong>
                        </div>

                        <div class="col">
                            <hr>
                            <div class="booking4_model_title text-center"><b>DROP OFF</b></div><hr>
                            <div>Location: </div>
                            <strong>KLIA 2 - Low Cost</strong><br><br>
                            <div>Date & Time: </div>
                            <strong>2022 Mar 20 10:00 AM</strong>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Rental Charge Summary -->
        <div class="row justify-content-center mt-5">
            <div class="col-11">
                <div class="card">
                    <div class="card-header">{{ __('Rental Charge') }}</div>

                    <div class="card-body">

                        <div class="product_model_detail" style="user-select: auto;">Please make sure that the amount to be paid is correct: </div><br><br>
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th scope="col">Rental Charge</th>
                                <td>RM 89.00</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Discount Applied</th>
                                <td>RM 0</td>
                            </tr>
                            <tr>
                                <th scope="row">Total Rental Charge</th>
                                <td>RM 89.00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>