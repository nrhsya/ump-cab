{{-- @extends('layouts.master') --}}

<head>
    <title>Car Rental List | UMPCab</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>

    <style>
        /* Import Google Font - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    ::selection{
    color: #fff;
    background: #17A2B8;
    }

    .wrapper{
    width: 100%;
    background: #fff;
    border-radius: 10px;
    padding: 20px 25px 40px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.1);
    }

    h2{
    font-size: 24px;
    font-weight: 600;
    }

    p{
    margin-top: 5px;
    font-size: 16px;
    }

    .price-input{
    width: 100%;
    display: flex;
    margin: 30px 0 35px;
    }

    .price-input .field{
    display: flex;
    width: 100%;
    height: 45px;
    align-items: center;
    }

    .field input{
    width: 100%;
    height: 100%;
    outline: none;
    font-size: 19px;
    margin-left: 12px;
    border-radius: 5px;
    text-align: center;
    border: 1px solid #999;
    -moz-appearance: textfield;
    }

    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    }

    .price-input .separator{
    width: 130px;
    display: flex;
    font-size: 19px;
    align-items: center;
    justify-content: center;
    }

    .slider{
    height: 5px;
    position: relative;
    background: #ddd;
    border-radius: 5px;
    }

    .slider .progress{
    height: 100%;
    left: 25%;
    right: 25%;
    position: absolute;
    border-radius: 5px;
    background: #17A2B8;
    }

    .range-input{
    position: relative;
    }
    
    .range-input input{
    position: absolute;
    width: 100%;
    height: 5px;
    top: -5px;
    background: none;
    pointer-events: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    }

    input[type="range"]::-webkit-slider-thumb{
    height: 17px;
    width: 17px;
    border-radius: 50%;
    background: #17A2B8;
    pointer-events: auto;
    -webkit-appearance: none;
    box-shadow: 0 0 6px rgba(0,0,0,0.05);
    }

    input[type="range"]::-moz-range-thumb{
    height: 17px;
    width: 17px;
    border: none;
    border-radius: 50%;
    background: #17A2B8;
    pointer-events: auto;
    -moz-appearance: none;
    box-shadow: 0 0 6px rgba(0,0,0,0.05);
    }

    /*  CUSTOM SCROLLBAR  */

    .my-custom-scrollbar
	{
		position: left;
		height: 500px;
		overflow: auto;
	}
	
  .table-wrapper-scroll-y
	{
		display: block;
	}

	hr{
        height: 1px;
        background-color: white;
        border: none;
    }

    /* ---------------------------------------------------
            Form
        ----------------------------------------------------- */
        .height {
            height: 10vh;
        }

        .form {
            position: relative;
        }

        .form .fa-search {
            position: absolute;
            top: 20px;
            left: 20px;
            color: #9ca3af
        }

        .form span {
            position: absolute;
            right: 17px;
            top: 13px;
            padding: 2px;
            border-left: 1px solid #d1d5db
        }

        .left-pan {
            padding-left: 7px
        }

        .left-pan i {
            padding-left: 10px
        }

        .form-input {
            height: 55px;
            text-indent: 33px;
            border-radius: 10px
        }

        .form-input:focus {
            box-shadow: none;
            border: none;
        }

        .search_border {
            border: 3px solid gray;
            border-radius: 5px;
        }

        .container-fluid {
            padding: 60px 50px;
        }

        table th {

        }

        table tr {
            background-color:white;
            color:#0958A3;
        }

    </style>

    <!-- put logo on browser tab -->
    <link rel="icon" href="images/UMPCablogowhite.png">
</head>

<x-app-layout>

<h2 class="text-center p-2" style="background-color:#FCDA37;"><b>Cars for Rental</b></h2>

{{-- <div class="container-fluid rounded bg-white"> --}}
    <div class="row bg-gray-100">
        <!-- Left Side (Filter) -->
        <div class="col-md-2 rounded">
            {{-- <div class="form-check m-2">
                <h1 class="text-center"><strong>FILTERS</strong></h1>
            </div> --}}

            <!-- Filter by Price Range -->
            <div class="p-3 m-2 shadow">
                <h3 class="text-sm"><b>SORT PRICE:</b></h3>
                <a href="highLow" class="m-2 btn btn-warning">High to Low</a>
                <a href="lowHigh" class="m-2 btn btn-danger">Low to High</a>
            </div>
        </div>

        <!-- Right Side (Search Results) -->
        <div class="col-md-10">          
            {{-- sort button --}}
            {{-- <div class=" active"> --}}
                {{-- <div class="form-check m-2">
                    <h1 class="text-center"><strong>CARS</strong></h1>
                </div> --}}
                <div class="container">
                    <div class="row m-2">
                        @if ($data_car->count() > 0)
                        @foreach ($data_car as $car)
                        <div class="col-xs-3 col-sm-3 col-lg-3 col-md-3 mb-3">
                            <div class="card p-2">
                                <img
                                    src="carimage/{{$car->car_image}}"
                                    class="card-img-top"
                                    alt="Car Image"
                                />
                                
                                <div class="card-body">
                                    <h5 class="card-title"><strong>{{$car->car_model}}</strong></h5>
                                    <p class="card-text">
                                    RM {{$car->rental_fare}} <span>/ hour</span>
                                    </p>
                                    <a href="carRentalDetails/{{$car->id}}/viewCarDetails" class="btn btn-primary m-2">View</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-md-12 text-center">
                            <strong>No cars available</strong>
                        </div>
                        @endif
                    
                    </div>
                </div>
                {{-- Paginate --}}
                <div class="d-flex justify-content-center">
                    {{ $data_car->links() }}
                </div>
            {{-- </div> --}}
        </div>
    </div>
{{-- </div> --}}

@include('user.dashboard.js')

</x-app-layout>