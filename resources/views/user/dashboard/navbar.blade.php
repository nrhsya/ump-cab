<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    {{-- <a class="navbar-brand brand-logo" href="/"><img src="admin/images/logo.svg" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="/"><img src="admin/images/logo-mini.svg" alt="logo"/></a> --}}
    <a class="navbar-brand brand-logo" href="/"><img src="admin/images/UMPCablogowhite.png" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="/"><img src="admin/images/UMPCablogowhite.png" alt="logo"/></a>
  </div>

  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>

    <button class="navbar-toggler navbar-toggler align-self-center" type="button" onclick="window.location.href='/'">
      HOME
    </button>

    <button class="navbar-toggler navbar-toggler align-self-center" type="button" onclick="window.location.href='/carList'">
      CAR RENTAL
    </button>

    <button class="navbar-toggler navbar-toggler align-self-center" type="button" onclick="window.location.href='/cabServiceHomepage'">
      CAB SERVICES
    </button>
    
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-flex mr-4 ">
        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="icon-cog"></i>
        </a>

        <!-- Logout Button -->
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header"><strong>Logged In As:</strong></p>

          @if (Route::has('login'))
            @auth
          <p class="mb-0 font-weight-normal float-left dropdown-header">- {{ Auth::user()->name }} -</p>

          <p class="mb-0 font-weight-normal float-left dropdown-header"><strong>Settings:</strong></p>

          <a class="dropdown-item preview-item" href="{{ route('profile.show') }}">               
              <i class="icon-head"></i> Profile
          </a>

            <a class="dropdown-item preview-item" 
            href="{{ route('logout') }}" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="icon-inbox"></i>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                Logout
            </a>
            @endauth
          @endif
        </div>
      </li>
      
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>