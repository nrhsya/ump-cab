{{-- @extends('layouts.dashboardStyle') --}}

<head>
    <title>Car Rental List | UMPCab</title>

    <!-- css -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- NAVBAR -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
              <!-- SIDEBAR -->
            <!-- partial:partials/_sidebar.html -->
            @include('admin.sidebar')
            <!-- partial -->

            {{-- mainbody --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    <h2 class="text-center p-3" style="color:black;">Registered Car List</h2>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card shadow p-3">
                            <div class="card-body">
                                {{-- back button --}}
                                <div class="mb-3">
                                    <button type="button" class="btn btn-success btn-rounded btn-icon" onclick="window.location.href='/ReportInterface'">
                                        <i class="mdi mdi-arrow-left"></i>
                                      </button>
                                </div>
                    
                                <h4 class="card-title">List of registered cars</h4>

                                <!-- List of Car Rentals -->
                                <div class="table-wrapper-scroll-y my-custom-scrollbar mt-3">
                                    <!-- table to display list of Car rentals registered into the system -->
                                    <table class="table table-hover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th><strong>No.</strong></th>
                                                <th><strong>Name</strong></th>
                                                <th><strong>IC</strong></th>
                                                <th><strong>Drivers License</strong></th>
                                                <th colspan="2" class="text-center"><strong>ACTIONS</strong></th>
                                            </tr>
                                        </thead>
                                        
                                        @if ($cars->count() > 0)
                                            @foreach ($cars as $car)
                                                <tr>
                                                    <td>{{$cars->firstItem() + $loop->iteration}}</td>
                                                    <td>{{$car->user->name}}</td>
                                                    <td class="text-center"><img id="myImg" src="icimage/{{$car->ic}}" alt="IC picture"></td>
                                                    <td class="text-center"><img id="myImg" src="licenseimage/{{$car->drivers_license}}" alt="Drivers License picture"></td>
                                                    <td class="text-center"><a href="CarList/{{$car->id}}/editRegisteredCar" class="btn btn-success">Update</a></td>
                                                    <td class="text-center"><a href="CarList/{{$car->id}}/deleteRegisteredCar" class="btn btn-danger" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</a></td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <td colspan="6" class="text-center">No cars have been approved yet</td>
                                        @endif
                                    </table>
                                    {{-- Paginate --}}
                                    <div class="d-flex justify-content-center">
                                        {{ $cars->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.js')
</body>