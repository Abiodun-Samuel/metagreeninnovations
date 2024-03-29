<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name=”robots” content="none">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="description"
        content="Metagreen Innovations is a reputable leading solar company in Nigeria, providing all range of customized, integrated solar solutions and products to customers in all sectors. We provide quality products and services with sound technical knowledge, skills and commitment to excellence. We started operations in the year 2017 and had since established our brand as a force to reckon with in the energy sector. We are a well-known source in renewable energy market starting from conception, feasibility, load auditing, designing and execution.">

    <title> {{ $metatitle }} </title>

    {{-- ========== Favicons ========== --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('/images/site.webmanifest') }}">

    {{-- ========== Google Fonts ========== --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Montserrat:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- ========== CSS Libraries ========== --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/app.css?ver=1.03') }}">
    @stack('styles')

    {{-- ========== Custom CSS  ========== --}}
    {{-- <link rel="stylesheet" href="{{ url('style.css?ver=1.3') }}" /> --}}
    <link rel="stylesheet" href="{{ url('/css/style.css?ver=1.1') }}" />

</head>

<body>
    {{-- ========== Header Section ========== --}}
    <header>
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                {{-- Company Logo --}}
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="img-fluid" src="{{ url('images/logo.jpg') }}" alt="Metagreeen Innovations Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg aria-hidden="true" focusable="false" width="2.2em" height="2.2em" viewBox="0 0 24 24">
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2zm0 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2zm0 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2z"
                                    fill="#d58943" />
                            </g>
                        </svg>
                    </span>
                </button>
                {{-- Nav Links --}}
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link active" href="{{ route('home') }}"> HOME </a>
                        <a class="nav-link" href="{{ route('about') }}"> ABOUT </a>
                        <a class="nav-link" href="{{ route('services') }}"> SERVICES </a>
                        <a class="nav-link" href="{{ route('projects') }}"> PROJECTS </a>
                        <a class="nav-link" href="{{ route('contact') }}"> CONTACT </a>
                        @auth
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="nav-link auth-btn">LOGOUT</button>
                            </form>
                        @endauth
                        @guest
                            <a class="nav-link auth-btn" href="{{ route('login') }}"> LOGIN </a>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
    </header>
    {{-- ========== Header Section Ends ========== --}}

    @yield('content')

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    {{-- About Ceo --}}
                    <div class="col-lg-4 col-md-6 newsletter">
                        <h4>Newsletter</h4>

                        <p> Join the list of VIP members to recieve weekly updates, news and special deals directly into
                            your inbox. </p>

                        <form action="{{ route('subscribe') }}" method="post" autocomplete="on"
                            enctype="application/x-www-form-urlencoded">
                            @csrf

                            @error('email')
                                <div class="alert alert-danger">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control my-2" name="email" id="email"
                                    value="{{ old('email') }}">
                                <input class="my-2" type="submit" value="Subscribe">
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href=" {{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('projects') }}">Projects</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            <strong>Address:</strong> 5, Taiwo Aroyeun St, Goshen Estate, <br> Abeokuta, Ogun State,
                            Nigeria.
                            <br>

                            <strong>Phone 1:</strong> +2348062175217<br>
                            <strong>Phone 2:</strong> +2349015016567<br>
                            <strong>Email:</strong> contact@metagreeninnovations.com<br>
                        </p>

                        <div class="social-links">
                            {{-- whatsapp --}}
                            <a
                                href="https://api.whatsapp.com/send?phone=2349015016567&text=Welcome%20to%20Metagreen%20Innovations,%20How%20can%20we%20be%20of%20assistance?">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="2.8rem" height="2.8rem" preserveAspectRatio="xMidYMid meet"
                                        viewBox="0 0 24 24">
                                        <g class="icon-tabler" fill="none" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21" />
                                            <path
                                                d="M9 10a.5.5 0 0 0 1 0V9a.5.5 0 0 0-1 0v1a5 5 0 0 0 5 5h1a.5.5 0 0 0 0-1h-1a.5.5 0 0 0 0 1" />
                                        </g>
                                    </svg>
                                </i>
                            </a>

                            {{-- facebook --}}
                            <a href="https://m.facebook.com/metagreen.innovations">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" focusable="false" width="2.7rem" height="2.7rem"
                                        style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                        <path
                                            d="M25.566 2.433H6.433c-2.2 0-4 1.8-4 4v19.135c0 2.2 1.8 4 4 4h19.135c2.2 0 4-1.8 4-4V6.433c-.002-2.2-1.8-4-4.002-4zm-.257 14.483h-3.22v11.65h-4.818v-11.65h-2.41V12.9h2.41v-2.41c0-3.276 1.36-5.225 5.23-5.225h3.217V9.28h-2.012c-1.504 0-1.604.563-1.604 1.61l-.013 2.01h3.645l-.426 4.016z" />
                                    </svg>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                Copyright &copy; <span id="year"></span> <strong><span>Metagreen Innovations</span></strong>. All Rights
                Reserved
            </div>
            <div class="credits">
                Designed & Developed by <strong>
                    <a href="https://abiodunsamuel.com" target="_blanck"> <strong>Abiodun Digital Hub</strong> </a>
                </strong>
            </div>
        </div>
    </footer>

    {{-- Fixed buttons --}}
    <a href="" class="back-to-top">
        <i>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                focusable="false" width="4rem" height="4rem"
                style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path d="M4 21h16V8H4m10 7v3h-4v-3H7l5-5l5 5M3 3h18v4H3" fill="#245140" />
            </svg>
        </i>
    </a>

    @include('cookie-consent::index')

    {{-- ========== JS Libraries ========== --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script src="{{ url('js/app.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    @stack('scripts')

    {{-- <script src="{{ url('script.js?ver=1.0') }}"></script> --}}
    <script src="{{ url('/js/script.js?ver=1.1') }}"></script>

</body>

</html>
