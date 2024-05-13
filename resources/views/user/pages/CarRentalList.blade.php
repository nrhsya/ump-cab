{{-- @extends('layouts.dashboardStyle') --}}

<head>
    <title>Car Rental List | UMPCab</title>

    <!-- css -->
    @include('user.dashboard.css')
</head>

<body>
    <div class="container-scroller">
        <!-- NAVBAR -->
        <!-- partial:partials/_navbar.html -->
        @include('user.dashboard.navbar')

        <div class="container-fluid page-body-wrapper">
              <!-- SIDEBAR -->
            <!-- partial:partials/_sidebar.html -->
            @include('user.dashboard.sidebar')
            <!-- partial -->

            {{-- mainbody --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    <h2 class="text-center p-3" style="color:black;">Car Rental List</h2>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card shadow p-3 mb-5">
                            <div class="card-body">
                                {{-- back button --}}
                                <div class="mb-3">
                                    <button type="button" class="btn btn-success btn-rounded btn-icon" onclick="window.location.href='/ReportInterface'">
                                        <i class="mdi mdi-arrow-left"></i>
                                      </button>
                                </div>
                    
                                <h4 class="card-title">List of registered car rental:</h4>

                                <!-- List of Car Rentals -->
                                <div class="table-wrapper-scroll-y my-custom-scrollbar mt-3">
                                    <!-- table to display list of Car rentals registered into the system -->
                                    <table class="table table-hover table-bordered" style="LINE-HEIGHT:35px;" width="100%">
                                        <tr style="background-color:#0958A3;color:white;">
                                            <th>No.</th>
                                            <th>Car ID</th>
                                            <th>Car Model</th>
                                            <th>Owner Name</th>
                                            <th>Plate Number</th>
                                            <th colspan="2">ACTIONS</th>
                                        </tr>
                                        
                                        <tr style="background-color:white;color:#0958A3;">
                                            <td>1</td>
                                            <td>C01</td>
                                            <td>Perodua Axia</td>
                                            <td>Muhammad Ali</td>
                                            <td>ABC1234</td>
                                            <td><a href="/EditCarList" class="btn btn-success">Update</a></td>
                                            <td><a href="#" class="btn btn-danger" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>