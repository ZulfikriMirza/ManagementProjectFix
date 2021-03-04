@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
@endsection

<header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light">
        <div class="container-fluid"> 
            <a class="navbar-brand logo" href="/">LOGO</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/showcase">Showcase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/listjasa">List Jasa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    
                