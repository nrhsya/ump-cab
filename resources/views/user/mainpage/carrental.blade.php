<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<!-- Team Start -->
<div  id="carrental" class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-end mb-4">
            <div class="col-lg-6">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Car Rental Services</h6>
                <h1 class="section-title mb-3">Browse through available car rental services</h1>
            </div>
            <div class="col-lg-6">
                <h4 class="font-weight-normal text-muted mb-3">Choose the car of your choice and rent in one place</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel team-carousel position-relative">

                    {{-- car rental list --}}
                    {{-- @foreach ($data_car as $car)
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="carimage/{{$car->car_image}}" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary mb-2" href="#">View</a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">{{$car->car_model}}</h5>
                            <p class="text-white m-0">{{$car->plate_num}}</p>
                        </div>
                    </div>
                    @endforeach --}}
                    
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="images/bezza.png" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="/carList">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Perodua Bezza</h5>
                            <p class="text-white m-0">ABC1234</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="images/myvi.png" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="/carList">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Perodua Myvi</h5>
                            <p class="text-white m-0">JAA2312</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="images/bezza.png" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="/carList">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Perodua Bezza</h5>
                            <p class="text-white m-0">DEE1134</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->