@extends('layouts.master')

<head>
    <title>Register Car for Rental | UMPCab</title>

    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Regal Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<x-app-layout>

<h2 class="text-center p-2" style="background-color:#FCDA37;">Register Car</h2>

<div class="row p-3 m-3" style="user-select: auto;background-color:#e2e9e9;">
    <h3><b>CAR DETAILS</b></h3>
    <hr>

    <div class="container mt-2 p-3">
        <div class="row justify-content-center">
            <!-- form to insert data -->
            <form action="/DriverDashboard/registerCar" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <!-- Drivers License -->
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label"><b>DRIVERS LICENSE*</b></label>
                    <p>Please provide proof of your drivers license before proceeding with the car registration</p>
                    <input name="drivers_license" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
                </div>

                <!-- Owner Name -->
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label"><b>OWNER NAME</b></label>
                    <input name="owner_name" type="text" class="form-control" id="exampleFormControlInput1">
                </div>

                <!-- Car Model -->
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label"><b>Car Model</b></label>
                    <select name="car_model" class="form-select" aria-label="car_model">
                        <option selected>Choose Cars</option> <!-- display all car models from DB -->
                        <option value="Honda City">Honda City</option>
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
                    {{-- Car Model dropdown with search --}}
                    {{-- <label for="select" class="font-semibold block py-2">Choose Car Model:</label>
                
                    <div class="relative">
                        <div class="h-10 bg-white flex border border-gray-200 rounded items-center">
                            <input value="Javascript" name="select" id="select" class="px-4 appearance-none outline-none text-gray-800 w-full" checked />
                    
                            <button class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-gray-600">
                                <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                            <label for="show_more" class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-gray-600">
                                <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="18 15 12 9 6 15"></polyline>
                                </svg>
                            </label>
                        </div>
                    
                        <input type="checkbox" name="show_more" id="show_more" class="hidden peer" checked />
                        <div class="absolute rounded shadow bg-white overflow-hidden hidden peer-checked:flex flex-col w-full mt-1 border border-gray-200">
                            <div class="cursor-pointer group">
                                <a class="block p-2 border-transparent border-l-4 group-hover:border-blue-600 group-hover:bg-gray-100">Python</a>
                            </div>
                            <div class="cursor-pointer group border-t">
                                <a class="block p-2 border-transparent border-l-4 group-hover:border-blue-600 border-blue-600 group-hover:bg-gray-100">Javascript</a>
                            </div>
                            <div class="cursor-pointer group border-t">
                                <a class="block p-2 border-transparent border-l-4 group-hover:border-blue-600 group-hover:bg-gray-100">Node</a>
                            </div>
                            <div class="cursor-pointer group border-t">
                                <a class="block p-2 border-transparent border-l-4 group-hover:border-blue-600 group-hover:bg-gray-100">PHP</a>
                            </div>
                        </div>
                    </div> --}}
                </div>

                {{-- car rental fare based on car model--}}
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label"><b>RENTAL FARE</b></label>
                    <input name="rental_fare" type="number" class="form-control" id="exampleFormControlInput1">
                </div>

                {{-- cab fare based on car model --}}
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label"><b>CAB FARE</b></label>
                    <input name="cab_fare" type="number" class="form-control" id="exampleFormControlInput1">
                </div>


                <!-- Car Image -->
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label"><b>CAR IMAGE</b></label>
                    <input name="car_image" type="file" class="form-control" id="exampleFormControlInput1">
                </div>

                <!-- Plate Number -->
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label"><b>PLATE NUMBER</b></label>
                    <input name="plate_num" type="text" class="form-control" id="exampleFormControlInput1">
                </div>

                <!-- nnti remove this one sbb payment wil be calculated automatically in the system -->
                <!-- Payment Rate Per Hour -->
                <!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><b>PAYMENT RATE PER HOUR</b></label>
                    <input name="driverPhoneNum" type="number" class="form-control" id="exampleFormControlInput1">
                </div> -->

                {{-- <a id="customButton" style="background-color:#0958A3;" type="submit">REGISTER</a> --}}
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

<!-- base:js -->
<script src="../../vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="../../js/off-canvas.js"></script>
<script src="../../js/hoverable-collapse.js"></script>
<script src="../../js/template.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="../../vendors/select2/select2.min.js"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="../../js/file-upload.js"></script>
<script src="../../js/typeahead.js"></script>
<script src="../../js/select2.js"></script>
<!-- End custom js for this page-->

</x-app-layout>