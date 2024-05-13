{{-- @extends('layouts.dashboardStyle') --}}

<head>
    <title>User List | UMPCab</title>

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
                    <h2 class="text-center p-3" style="color:black;">User List</h2>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card shadow p-3 mb-5">
                            <div class="card-body">
                                {{-- back button --}}
                                <div class="mb-3">
                                    <button type="button" class="btn btn-success btn-rounded btn-icon" onclick="window.location.href='/ReportInterface'">
                                        <i class="mdi mdi-arrow-left"></i>
                                      </button>
                                </div>
                                
                                <h4 class="card-title">List of users:</h4>

                                <!-- List of Users -->
                                <div class="table-wrapper-scroll-y my-custom-scrollbar mt-3">
                                    <!-- table to display list of users registered into the system -->
                                    <table class="table table-hover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th><strong>No.</strong></th>
                                                <th><strong>Name</strong></th>
                                                <th><strong>Email</strong></th>
                                                <th colspan="2"><strong>ACTIONS</strong></th>
                                            </tr>
                                        </thead>
                                        @if ($data_user->count() > 0)
                                            @foreach ($data_user as $user)
                                            <tr>
                                                <td>{{$data_user->firstItem() + $loop->iteration}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td><a href="UserList/{{$user->id}}/editUser" class="btn btn-success">Update</a></td>
                                                {{-- <td><a href="UserList/{{$user->id}}/editUser" class="btn btn-success">Update</a></td> --}}
                                                <td><a href="UserList/{{$user->id}}/deleteUser" class="btn btn-danger" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</a></td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5">No user data available</td>
                                            </tr>
                                        @endif
                                    </table>
                                    {{-- Paginate --}}
                                    <div class="d-flex justify-content-center">
                                        {{ $data_user->links() }}
                                    </div>
                                </div>
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