<!DOCTYPE html>
<html lang="en">

<head>

  <!-- css -->
  @include('user.dashboard.css')
  
</head>
<body>
  <div class="container-scroller">

    <!-- NAVBAR -->
    <!-- partial:partials/_navbar.html -->
    @include('user.dashboard.navbar')
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- SIDEBAR -->
      <!-- partial:partials/_sidebar.html -->
      @include('user.dashboard.sidebar')
      <!-- partial -->

      <!-- mainbody -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Welcome back, <strong><i>{{ Auth::user()->name }}</i></strong></h4>
              <p id="time" class="font-weight-normal mb-2 text-muted">APRIL 1, 2019</p>
            </div>
          </div>

          <div class="row m-3 justify-content-around">
            {{-- rent cars --}}
            <div class="col-md-5">
              <div class="card shadow">
                <div class="card-body">
                  <h4 class="card-title">Car Rental</h4>
                    <div class="row">
                      <div class="col-md-7">
                        <p>Need to go somewhere and enjoy your time with friends? Book cars for rental right now</p>
                      </div>
  
                      <div class="col-md-5">
                        <img class="h-85 w-100" src="images/rental.png">
                      </div>
                    </div>
                    <button type="button" class="btn btn-success btn-block" onclick="window.location.href='/carList'">Book Car for rental</button>
                </div>
              </div>
            </div>

            {{-- book cab --}}
            <div class="col-md-5">
              <div class="card shadow">
                <div class="card-body">
                  <h4 class="card-title">Cab Service</h4>
                    <div class="row">
                      <div class="col-md-7">
                        <p>Need a car ride to go somewhere? Book a cab service right now</p>
                      </div>
  
                      <div class="col-md-5">
                        <img class="h-85 w-100" src="images/taxi.png">
                      </div>
                    </div>
                    <button type="button" class="btn btn-warning btn-block" onclick="window.location.href='/cabServiceHomepage'">Book a carpool</button>
                </div>
              </div>
            </div>
          </div>

          <div class="row m-3 justify-content-around">
            {{-- register car --}}
            <div class="col-md-5">
              <div class="card shadow">
                <div class="card-body">
                  <h4 class="card-title">Register Car</h4>
                  <div class="row">
                    <div class="col-md-7">
                      <p>Want to register your car for rental / carpool? Register right now</p>
                    </div>

                    <div class="col-md-5">
                      <img class="h-85 w-100" src="images/register.png">
                    </div>
                  </div><br>
                  <button type="button" class="btn btn-warning btn-block" onclick="window.location.href='/DriverDashboard'">Register car</button>
                </div>
              </div>
            </div>

            {{-- view bookings --}}
            <div class="col-md-5">
              <div class="card shadow">
                <div class="card-body">
                  <h4 class="card-title">My Bookings</h4>
                  <div class="row">
                    <div class="col-md-7">
                      <p>View a list of your previous and current bookings</p>
                    </div>

                    <div class="col-md-5">
                      <img class="h-85 w-100" src="images/booking.png">
                    </div>
                  </div><br>
                  
                  <button type="button" class="btn btn-info btn-block" onclick="window.location.href='/myBooking'">View My Bookings</button>
                </div>
              </div>
            </div>
          </div>
          
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        {{-- <footer class="footer shadow-lg">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © UMPCab 2022</span>
          </div>
        </footer> --}}
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
      
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  @include('user.dashboard.js')
</body>

</html>


