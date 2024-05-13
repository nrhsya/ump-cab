<nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary">UMPCab</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/" class="nav-item nav-link active">HOME</a>
                            <a href="/carList" class="nav-item nav-link">CAR RENTAL</a>
                            <a href="/cabServiceHomepage" class="nav-item nav-link">CAB SERVICE</a>
                            <a href="/" class="nav-item nav-link">FEEDBACKS</a>
                            <a href="#contactus" class="nav-item nav-link">CONTACT US</a>
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pag</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="blog.html" class="dropdown-item">Latest Blog</a>
                                    <a href="single.html" class="dropdown-item">Blog Detail</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                        </div>

                        @if (Route::has('login'))
                            @auth

                            <x-app-layout>
                            </x-app-layout>

                            @else

                            <!-- Login -->
                            <a href="{{ route('login') }}" class="btn btn-primary mr-3 d-none d-lg-block">Login</a>

                                @if (Route::has('register'))

                                <!-- Register -->
                                <a href="{{ route('register') }}" class="btn btn-primary mr-3 d-none d-lg-block">Register</a>

                                @endif
                            @endauth
                        @endif


                    </div>
                </nav>