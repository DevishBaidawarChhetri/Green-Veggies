<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#93da7e">
    <title>Green Veggies - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('webfonts/all.css') }}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body id="body" onload="loader();">
<div id="loader">
    <img class="spinner-image" src="{{asset('images/logo.png')}}" alt="Logo">
    <div class="spinner"></div>
</div>
<div id="wrapper">
    <div class="nav-holder">
        <nav class="navbar navbarr navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{!! url('/') !!}">
                <img src="{{asset('images/logoo.png')}}" width="auto" height="70" class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler bg-success pt-2 pb-2 text-white" style="font-size: 16px" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span>MENU</span>
            </button>
            <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::path() === '/' ? 'active': '' }}">
                        <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'about' ? 'active': '' }}">
                        <a class="nav-link" href="{{ url('/about') }}"><i class="fas fa-address-card"></i> About</a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'contacts' ? 'active': '' }}">
                        <a class="nav-link" href="{{url('/contacts')}}"><i class="fas fa-phone-alt"></i> Contact</a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'contacts#contact-map' ? 'active': '' }}">
                        <a class="nav-link" href="{{ url('/contacts#contact-map') }}"><i class="fas fa-map-marked-alt"></i> Maps</a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'products' ? 'active': '' }}">
                        <a class="nav-link" href="{{ url('/products') }}"><i class="fas fa-box"></i> Products</a>
                    </li>
                    @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="far fa-user-circle"></i> Logout</a>
                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    @else
                        <li class="nav-item {{ Request::path() === 'login' ? 'active': '' }}">
                            <a class="nav-link" href="{{ url('/login') }}"><i class="far fa-user-circle"></i> Login</a>
                        </li>
                        <li class="nav-item {{ Request::path() === 'register' ? 'active': '' }}">
                            <a class="nav-link" href="{{ url('/register') }}"><i class="fas fa-user-plus"></i> Register</a>
                        </li>
                    @endif
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-question"></i> FAQs</a></li>
                </ul>
            </div>
        </nav>
    </div>
    {{--  Dynamic Section Begins  --}}

    @if($errors->any())
        <p class="container mt-3 alert-danger alert text-center"><i class="far fa-times-circle"></i> {{ __('Please fill up the form properly!') }}</p>
    @endif

    @yield('main-section')

    {{--    Dynamic Section Ends --}}
    <div class="footer-holder">
        <div class="footer-top">
            <div class="icon-social">
                <ul>
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <i class="mx-2 fab fa-facebook-f fb"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com" target="_blank">
                            <i class="mx-2 fab fa-twitter tw"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com" target="_blank">
                            <i class="mx-2 fab fa-youtube yt"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com" target="_blank">
                            <i class="mx-2 fab fa-instagram ig"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-top footer-middle">
            <div class="footer-nav">
                <ul class="foot-nav">
                    <li>
                        <a href="{{ url('/') }}">
                           Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/products') }}">
                            Products
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contacts') }}">
                            Contact
                        </a>
                    </li>
                </ul>
                <ul class="foot-sub">
                    <li>
                        <form method="POST" class="d-flex newsletter-w3pvt subscribe-form" name="subscribe" action="{{ url('/subscriptions') }}">
                            @csrf
                            <input type="email" id="email" class="email @error('email') is-invalid @enderror" name="email" placeholder="Enter your email here">
                            <button type="submit" class="btn" onclick="return subscribeValidation()">Subscribe</button>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="text-center">Copyright &copy; 2020 <a href="#">Green Veggies.</a> All rights reserved.</p>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<script src="{{asset('js/particle/particles.js')}}"></script>
<script src="{{asset('js/particle/app.js')}}"></script>
<script>
    // hide alert messages
    $(".alert").fadeTo(3000, 500).slideUp(500, function(){
        $(".alert").slideUp(500);
    });
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f01b45c760b2b560e6fc4a4/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
