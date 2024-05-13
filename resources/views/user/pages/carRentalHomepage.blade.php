<head>
    <title>Car Rental Homepage | UMPCab</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</head>

<x-app-layout>
<div class="text-center p-2" style="background-color:#0958A3;color:white;width:100%;">
    <h2><b>Car List</b></h2>
</div>

<!-- Search -->
{{-- <div class="p-3" style="background-color:#e2e9e9;">
    <form class="form-sample">
      <div class="row">
        
        <div class="col-md-6">
          <p class="card-description">
            <b>Pick-Up Details</b>
          </p>
          <div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Pick-Up Location</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" />
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Pick-Up Date</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" />
              </div>
            </div>
          </div>
        </div>

        
        <div class="col-md-6">
          <p class="card-description">
            <b>Drop-Off Details</b>
          </p>
          <div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Drop-Off Location</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" />
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Drop-Off Date</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <button type="button" class="btn btn-success btn-block" onclick="window.location.href='/carList'"><b>Search</b></button>
    </form>
</div> --}}

<!-- Search Ends -->

{{-- <div class="text-center p-2" style="background-color:#0958A3;color:white;width:100%;">
    <h1><b>All Cars</b></h1>
</div> --}}

<!-- Filter Button -->
{{-- <div class="dropdown p-2">
    <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <b>Filter By</b>
    </a>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="">Car Type</a></li>
        <li><a class="dropdown-item" href="">Price Range</a></li>
    </ul>
</div> --}}

<div class="container-fluid p-2 m-2">
    <div class="row">
      <!-- Gallery item -->
      <div class="col-4">
        <div class="bg-white rounded shadow-lg"><img src="images/myvi.png" alt="Perodua myvi" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Car Name</a></h5>
            <p class="small text-muted mb-0">Car Details</p>
            <a class="btn btn-success btn-lg btn-block mt-4" href="/carRentalDetails"><b>View Details</b></a>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-4">
        <div class="bg-white rounded shadow-lg"><img src="images/myvi.png" alt="Perodua Myvi" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Car Name</a></h5>
            <p class="small text-muted mb-0">Car Description</p>
            <a class="btn btn-success btn-lg btn-block mt-4" href="/carRentalDetails"><b>View Details</b></a>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-4">
        <div class="bg-white rounded shadow-lg"><img src="images/myvi.png" alt="Perodua myvi" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Car Name</a></h5>
            <p class="small text-muted mb-0">Car Description</p>
            <a class="btn btn-success btn-lg btn-block mt-4" href="/carRentalDetails"><b>View Details</b></a>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      {{-- <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="images/myvi.png" alt="Perodua myvi" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Car Name</a></h5>
            <p class="small text-muted mb-0">Car Description</p>
            <a class="btn btn-success btn-lg btn-block mt-4" href="/carRentalDetails"><b>View Details</b></a>
          </div>
        </div>
      </div> --}}
      <!-- End -->

      <!-- Gallery item -->
      <!-- <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-5.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Pineapple</a></h5>
            <p class="small text-muted mb-0">Car Description</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-primary px-3 rounded-pill font-weight-normal">New</div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- End -->

      <!-- Gallery item -->
      <!-- <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-6.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Yellow banana</a></h5>
            <p class="small text-muted mb-0">Car Description</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- End -->

      <!-- Gallery item -->
      <!-- <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-7.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Teal Gameboy</a></h5>
            <p class="small text-muted mb-0">Car Description</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPEG</span></p>
              <div class="badge badge-info px-3 rounded-pill font-weight-normal">Hot</div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- End -->

      <!-- Gallery item -->
      <!-- <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-8.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Color in Guatemala.</a></h5>
            <p class="small text-muted mb-0">Car Description</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- End -->

      <!-- Gallery item -->
      <!-- <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-1.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Car Name</a></h5>
            <p class="small text-muted mb-0">Car Description</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- End -->

      <!-- Gallery item -->
      <!-- <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-2.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
            <p class="small text-muted mb-0">Car Description</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-primary px-3 rounded-pill font-weight-normal">Trend</div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- End -->

      <!-- Gallery item -->
      <!-- <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-3.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
            <p class="small text-muted mb-0">Car Description</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- End -->

      <!-- Gallery item -->
      <!-- <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-4.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
            <p class="small text-muted mb-0">Car Description</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPEG</span></p>
              <div class="badge badge-success px-3 rounded-pill font-weight-normal">Hot</div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- End -->

    </div>
</div>

{{-- <a class="btn btn-success btn-lg btn-block mt-4" href="/"><b>Return to Mainpage</b></a> --}}

{{-- <div class="row text-center rounded p-4" id="customBg">
    <!-- Back button to mainpage -->
    <a class="btn btn-success btn-lg btn-block mt-4" href="/"><b>Return to Mainpage</b></a>
    <a id="customButton" href="/"><b>Back to Mainpage</b><br><br></a><br><br>
</div> --}}

</x-app-layout>