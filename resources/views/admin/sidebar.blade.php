<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css");
    </style>
</head>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="user-profile">
        <div class="user-image">
        {{-- <img src="admin/images/profile.png"> --}}
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
        @else
            <span class="inline-flex rounded-md">
                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                    {{ Auth::user()->name }}

                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </span>
        @endif
        </div>

        <!-- user name -->
        <div class="user-name">
            {{ Auth::user()->name }}
        </div>

        <!-- user role -->
        <div class="user-designation">
            - Administrator -
        </div>
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/AdminDashboard">
                {{-- <i class="icon-box menu-icon"></i> --}}
                <i class="bi bi-house menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/ReportInterface">
                {{-- <i class="icon-box menu-icon"></i> --}}
                <i class="bi bi-journal-check menu-icon"></i>
                <span class="menu-title">View Report</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="/manageCar">
                {{-- <i class="icon-box menu-icon"></i> --}}
                {{-- <i class="bi bi-house menu-icon"></i> --}}
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Manage Car</span>
            </a>
        </li>
    </ul>
</nav>