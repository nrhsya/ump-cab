{{-- @extends('layouts.dashboardStyle') --}}

<head>
    <title>Car List | UMPCab</title>

    <!-- css -->
    @include('admin.css')

    <style>
        #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {  
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)} 
        to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
        from {transform:scale(0)} 
        to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        }

        .close:hover,
        .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>
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
                    <h2 class="text-center p-3" style="color:black;">Car Registration List</h2>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card shadow p-3 mb-5">
                            <div class="card-body">
                                {{-- back button --}}
                                <div class="mb-3">
                                    <button type="button" class="btn btn-success btn-rounded btn-icon" onclick="window.location.href='/ReportInterface'">
                                        <i class="mdi mdi-arrow-left"></i>
                                      </button>
                                </div>

                                <div class="row">
                                    <div class="col-md-9">
                                        <h4 class="card-title">List of cars:</h4>
                                    </div>
                                </div>

                                <!-- List of cars -->
                                <table class="table table-hover">
                                    <thead class="thead-light text-center">
                                        <tr>
                                            <th><strong>No.</strong></th>
                                            <th><strong>Name</strong></th>
                                            {{-- <th><strong>Student ID</strong></th> --}}
                                            <th><strong>IC</strong></th>
                                            <th><strong>Drivers License</strong></th>
                                            <th colspan="2"><strong>ACTIONS</strong></th>
                                        </tr>
                                    </thead>
                                    @if ($cars->count() > 0)
                                        @foreach ($cars as $car)
                                        <tr>
                                            <td>{{$cars->firstItem() + $loop->iteration}}</td>
                                            <td>{{$car->user->name}}</td>
                                            {{-- <td>RM {{$car->}}</td> --}}
                                            {{-- <td class="text-center">{{$car->user->ic_num}}</td> --}}
                                            <td class="text-center"><img id="myImg" src="icimage/{{$car->ic}}" alt="IC picture"></td>
                                            <td class="text-center"><img id="myImg" src="licenseimage/{{$car->drivers_license}}" alt="Drivers License picture"></td>
                                            {{-- <td>{{$car->drivers_license}}</td> --}}
                                            <td><a href="{{url('approveCar',$car->id)}}" class="btn btn-success">Approve</a></td>
                                            {{-- <td><a href="manageCar/{{$car->id}}/editUser" class="btn btn-success">Update</a></td> --}}
                                            <td><a href="{{url('rejectCar',$car->id)}}" class="btn btn-danger" onClick = "return confirm('Are you sure you want to reject this request?')">Reject</a></td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <td colspan="5" class="text-center">No one has registered any car yet</td>
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

    {{-- modal to view drivers license --}}
    {{-- <div id="license" class="modal">
        <span class="imageclose">×</span>
            <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div> --}}

    {{-- modal to view ic --}}
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
            <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
    </script>

    <!-- base:js -->
    @include('admin.js')
    @include('user.dashboard.js')
</body>