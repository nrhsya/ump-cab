<head>
    <title>Edit User List | UMPCab</title>

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
                    <h2 class="text-center p-3" style="color:black;">Update User</h2>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card shadow p-3 mb-5">
                            <div class="card-body">
                                {{-- back button --}}
                                <div class="mb-3">
                                    <button type="button" class="btn btn-success btn-rounded btn-icon" onclick="window.location.href='/UserList'">
                                        <i class="mdi mdi-arrow-left"></i>
                                      </button>
                                </div>

                                <!-- form to insert data -->
                                <form action="/UserList/{{$data_user->id}}/updateUser" method="POST">
                                    {{ csrf_field() }}
                                        <!-- User ID -->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">User ID</label>
                                            <input name="id" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_user->id}}" disabled>
                                        </div>
                                        
                                        <!-- Name -->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                                            <input name="name" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_user->name}}">
                                        </div>
    
                                        <!-- Phone Number -->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                                            <input name="phone_num" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_user->phone_num}}">
                                        </div>
    
                                        <!-- Email -->
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                                            <input name="email" type="email" class="form-control" id="exampleFormControlInput1"  value="{{$data_user->email}}">
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

            