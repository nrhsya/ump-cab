{{-- @extends('layouts.dashboardStyle') --}}

<head>
    <title>Report | UMPCab</title>

    <!-- css -->
    @include('admin.css')
</head>

{{-- @section('content') --}}
<body>
    <div class="container-scroller">
        <!-- NAVBAR -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <!-- SIDEBAR -->
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')

        <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-sm-12 mb-4 mb-xl-0">
                  <h4 class="font-weight-bold text-dark">Welcome back, <strong><i>{{ Auth::user()->name }}</i></strong></h4>
                  <p id="time" class="font-weight-normal mb-2 text-muted">APRIL 1, 2019</p>
                </div>
              </div>
              
                <h2 class="text-center p-3" style="color:black;">Report</h2>

                <div class="row justify-content-around">
                    {{-- total users --}}
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card shadow p-3 mb-5">
                          <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <h4 class="card-title">Total Users</h4>
                            </div>
                            <p>The total number of users registered into this system</p>
                            <h1 class="text-center">{{$total_user}}</h1>
                            {{-- <h1 class="text-center">30</h1> --}}
                            <p class="text-center">users</p>
                            <img class="h-85 w-100" src="images/crowds.png">
                          </div>

                          {{-- to users list button --}}
                          <button type="button" onclick="window.location.href='/UserList'" class="btn btn-success btn-lg btn-block">View User List</button>
                        </div>
                    </div>

                    {{-- total car registered --}}
                    <div class="col-md-4 grid-margin stretch-card">
                      <div class="card shadow p-3 mb-5">
                        <div class="card-body">
                          <div class="d-flex justify-content-between mb-3">
                              <h4 class="card-title">Total Car Registered</h4>
                          </div>
                          <p>The total number of car registered and approved in this system</p>
                          <h1 class="text-center">{{$total_rental}}</h1>
                          {{-- <h1 class="text-center">15</h1> --}}
                            <p class="text-center">car registrations</p>
                          <img class="h-85 w-100" src="images/rental.png">
                        </div>

                        {{-- to car rental list button --}}
                        <button type="button" onclick="window.location.href='/CarList'" class="btn btn-success btn-lg btn-block">View Cars</button>
                      </div>
                    </div>
                </div>

                {{-- <div class="container mt-3 text-center">
                    <div class="row justify-content-center">
                        <div class="col-3 container-fluid rounded p-3" style="background-color:#e2e9e9;">
                            <h3 class="mb-4">TOTAL USERS</h3>
                            <h1><strong>100</strong></h1>
                            <a href="/UserList" id="customButton" class="mt-5">View User List</a>
                        </div>

                        <div class="col-3 container-fluid rounded p-3" style="background-color:#e2e9e9;">
                            <h3 class="mb-4">TOTAL CAR RENTALS REGISTERED</h3>
                            <h1><strong>3</strong></h1>
                            <a href="/CarRentalList" id="customButton" class="mt-5">View Car Rental List</a>
                        </div>

                        <div class="col-3 container-fluid rounded p-3" style="background-color:#e2e9e9;">
                            <h3 class="mb-4">TOTAL CAB SERVICE REGISTERED</h3>
                            <h1><strong>2</strong></h1>
                            <a href="/CabList" id="customButton" class="mt-5">View Cab Service List</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- base:js -->
    @include('admin.js')
</body>
{{-- @endsection --}}
