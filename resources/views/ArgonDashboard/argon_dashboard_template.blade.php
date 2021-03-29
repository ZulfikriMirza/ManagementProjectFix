<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('Argon_Dashboard/img/brand/favicon.png') }} " type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('Argon_Dashboard/vendor/nucleo/css/nucleo.css') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('Argon_Dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css') }} " type="text/css">

    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('Argon_Dashboard/css/argon.css?v=1.2.0') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('css/dashboard_navbar.css') }} " type="text/css">

    <!-- livewire laravel -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Additional CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }} " type="text/css">
    @yield('css')
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-dark bg-indigo " id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="{{ route('home') }}" style="color: #fff; text-transform:uppercase; font-weight:800;">
                    Home
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                @if(Auth::user()->level == 'admin')
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="ni ni-tv-2 text-white"></i>
                                <span class="nav-link-text">Pemesanan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.show') }}">
                                <i class="ni ni-single-02 text-white"></i>
                                <span class="nav-link-text">Profile</span>
                            </a>
                        </li>
                        <!-- Divider -->
                        <hr class="my-3 bg-white">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.home') }}">
                                <i class="ni ni-settings text-white"></i>
                                <span class="nav-link-text">Edit Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.showcase') }}">
                                <i class="ni ni-settings text-white"></i>
                                <span class="nav-link-text">Edit Showcase</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">
                                <i class="ni ni-settings text-white"></i>
                                <span class="nav-link-text">Edit About Us</span>
                            </a>
                        </li>

                        <!-- Divider -->
                        <hr class="my-3 bg-white">

                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <i class="ni ni-button-power text-white"></i>
                                    <span href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="nav-link-text ml-3">
                                        {{ __('Logout') }}
                                    </span>
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
                @else
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="ni ni-tv-2 text-white"></i>
                                <span class="nav-link-text">Pemesanan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.show') }}">
                                <i class="ni ni-single-02 text-white"></i>
                                <span class="nav-link-text">Profile</span>
                            </a>
                        </li>
                        <!-- Divider -->
                        <hr class="my-3 bg-white">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutus') }}">
                                <i class="ni ni-shop text-white"></i>
                                <span class="nav-link-text">About Us</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">
                                <i class="ni ni-badge text-white"></i>
                                <span class="nav-link-text">Contact</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('showcase') }}">
                                <i class="ni ni-send text-white"></i>
                                <span class="nav-link-text">Showcase</span>
                            </a>
                        </li>

                        <!-- Divider -->
                        <hr class="my-3 bg-white">

                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <i class="ni ni-button-power text-white"></i>
                                    <span href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="nav-link-text ml-3">
                                        {{ __('Logout') }}
                                    </span>
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-indigo border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center mr-auto">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle" style="width: 40px; height:40px; object-fit:cover;">
                                        @if (Auth::user()->profile_photo_url)
                                        <img src="{{  Auth::user()->profile_photo_url }}" style="width: 40px; height:40px; object-fit:cover;" />
                                        @else
                                        <img src=" https://ui-avatars.com/api/?name={{ Auth::user()->name }}&color=7F9CF5&background=EBF4FF" />
                                        @endif
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold" style="text-transform: capitalize;">{{ Auth::user()->name }}</span>
                                    </div>
                                </div>
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-text"> {{ session('success') }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif (session('error'))
        <div class="alert alert-danger ">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-text"> {{ session('error') }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @elseif($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @yield('content')
    </div>


    <!-- Additional Javascript -->
    @yield('js')

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('Argon_Dashboard/vendor/jquery/dist/jquery.min.js') }} "></script>
    <script src="{{ asset('Argon_Dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('Argon_Dashboard/vendor/js-cookie/js.cookie.js') }} "></script>
    <script src="{{ asset('Argon_Dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }} "></script>
    <script src="{{ asset('Argon_Dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }} "></script>
    <!-- Optional JS -->
    <script src="{{ asset('Argon_Dashboard/vendor/chart.js/dist/Chart.min.js') }} "></script>
    <script src="{{ asset('Argon_Dashboard/vendor/chart.js/dist/Chart.extension.js') }} "></script>
    <!-- Argon JS -->
    <script src="{{ asset('Argon_Dashboard/js/argon.js?v=1.2.0') }} "></script>

</body>

</html>