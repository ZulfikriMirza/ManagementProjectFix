<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--===============================
        LINK ALL CSS FILES 
        ===============================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Home/css/home.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Home/css/home_projects.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Home/css/home_chooseUs.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Home/css/home_gallery.css') }}" />
    <link rel="stylesheet" href="{{ asset('Home/css/home_listjasa.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Home/css/home_testimony.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Home/css/home_footer.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}" />

    <!--===============================
        SLICK CSS FILE -> For Image Carousel
        ===============================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Home/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Home/slick/slick-theme.css') }}" />

    <!--===============================
        FONT AWESOME FILE
        ===============================-->
    <link href="{{ asset('Home/fontawesome_css/all.css') }}" rel="stylesheet" type="text/css" />

    <!--===============================
        AOS JS CDN
        ===============================-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Arsitek - HOME</title>
</head>

<body>
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

    @include('navbar.index')
    @include('Home.landingPage')
    @include('Home.project')
    @include('Home.gallery')
    @include('Home.chooseUs')
    @include('Home.listJasa')
    @include('Home.testimony')
    @include('Home.footer')

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--===============================
        SLICK JS FILE -> For Image Carousel
        ===============================-->
    <script src="{{ asset('Home/slick/slick.min.js') }}"></script>
    <!--===============================
        AOS JS -> Animate On Scroll
        ===============================-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--===============================
        ADDITIONAL NECESSARY JS FILE -> For Image Carousel
        ===============================-->
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "089630009643", // WhatsApp number
                call_to_action: "Tanya Kami", // Call to action
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->
</body>

</html>
