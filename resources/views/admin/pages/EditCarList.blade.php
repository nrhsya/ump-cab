<head>
    <title>Edit Car List | UMPCab</title>

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
                    <h2 class="text-center p-3" style="color:black;">Update Car</h2>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card shadow p-3 mb-5">
                            <div class="card-body">
                                {{-- back button --}}
                                <div class="mb-3">
                                    <button type="button" class="btn btn-success btn-rounded btn-icon" onclick="window.location.href='/CarList'">
                                        <i class="mdi mdi-arrow-left"></i>
                                      </button>
                                </div>

                                <!-- form to insert data -->
                                <form action="/CarList/{{$cars->id}}/updateRegisteredCar" method="POST">
                                    {{ csrf_field() }}                                
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Owner</label>
                                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" value="{{$cars->user->name}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Car Model</label>
                                        <input name="car_model" type="text" class="form-control" id="exampleFormControlInput1" value="{{$cars->car_model}}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Plate Number</label>
                                        <input name="plate_num" type="text" class="form-control" id="exampleFormControlInput1" value="{{$cars->plate_num}}">
                                    </div>

                                    <button type="submit" class="btn btn-success float-end">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- base:js -->
        @include('admin.js')
</body>