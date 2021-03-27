<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> {{ $metatitle }} </title>

    {{-- ========== Favicons ========== --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('/images/site.webmanifest') }}">

    {{-- ========== Google Fonts ========== --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    {{-- ========== CSS Libraries ========== --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    {{-- ========== Custom CSS  ========== --}}
    <link rel="stylesheet" href="{{ url('css/pagestyle.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>

<body>

    {{-- ========== Header Section ========== --}}
    <header class="header sticky-top">
        <!-- site-navbar start -->
        <div class="navbar-area ">
            <div class="container">
                <nav class="site-navbar">

                    <!-- Company logo -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ url('images/logo.jpg') }}" alt="Metagreeen Logo">
                    </a>

                    <ul>

                        <!-- Navigation Links -->
                        <li><a href="{{ url('/') }}">home</a></li>
                        <li><a href="{{ url('/about') }}">about</a></li>
                        <li><a href="{{ url('/service') }}">service</a></li>
                        <li><a href="{{ url('/project') }}">projects</a></li>
                        <li><a href="{{ url('/contact') }}">contact</a></li>

                        {{-- Header socials --}}
                        <div class="header-socials">

                            <hr>
                            {{-- whatsapp --}}
                            <a href="">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" focusable="false" width="3em" height="3em"
                                        style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                        <path
                                            d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8c0 24.9 7 49.2 20.2 70.1l3.1 5l-13.3 48.6l49.9-13.1l4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8c0-35.2-15.2-68.3-40.1-93.2c-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8c-12.6 1.9-22.4.9-47.5-9.9c-39.7-17.2-65.7-57.2-67.7-59.8c-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5c2.6 0 5.3 0 7.6.1c2.4.1 5.7-.9 8.9 6.8c3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6c15.3 26.3 30.6 35.4 53.9 47.1c4 2 6.3 1.7 8.6-1c2.3-2.6 9.9-11.6 12.5-15.5c2.6-4 5.3-3.3 8.9-2c3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5c29.9 30 47.9 69.8 47.9 112.2c0 87.4-72.7 158.5-160.1 158.5z"
                                            fill="#25D366" />
                                    </svg>
                                </i>
                            </a>

                            {{-- facebook --}}
                            <a href="">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" focusable="false" width="3rem" height="3rem"
                                        style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                        <path
                                            d="M25.566 2.433H6.433c-2.2 0-4 1.8-4 4v19.135c0 2.2 1.8 4 4 4h19.135c2.2 0 4-1.8 4-4V6.433c-.002-2.2-1.8-4-4.002-4zm-.257 14.483h-3.22v11.65h-4.818v-11.65h-2.41V12.9h2.41v-2.41c0-3.276 1.36-5.225 5.23-5.225h3.217V9.28h-2.012c-1.504 0-1.604.563-1.604 1.61l-.013 2.01h3.645l-.426 4.016z"
                                            fill="#4267B2" />
                                    </svg>
                                </i>
                            </a>

                            {{-- instagram --}}
                            <a href="">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" focusable="false" width="2.5rem" height="2.5rem"
                                        style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 1025 1024">
                                        <path
                                            d="M320.428 512q0-80 56-136t136-56t136 56t56 136t-56 136t-136 56t-136-56t-56-136zm704-64v448q0 53-37.5 90.5t-90.5 37.5h-768q-53 0-90.5-37.5T.428 896V128q0-53 37.5-90.5t90.5-37.5h768q53 0 90.5 37.5t37.5 90.5v192h-256q-45-59-112-93.5t-144-34.5t-144 34.5t-112 93.5h-256v128h198q-6 32-6 64q0 87 43 160.5t116.5 116.5t160.5 43t160.5-43t116.5-116.5t43-160.5q0-32-6-64h198z"
                                            fill="#FD1D1D" />
                                    </svg>
                                </i>
                            </a>

                            {{-- phone --}}
                            <a href="tel:+2348062175217">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" focusable="false" width="3em" height="3em"
                                        style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                        <path
                                            d="M17.256 12.253c-.096-.667-.611-1.187-1.274-1.342c-2.577-.604-3.223-2.088-3.332-3.734C12.193 7.092 11.38 7 10 7s-2.193.092-2.65.177c-.109 1.646-.755 3.13-3.332 3.734c-.663.156-1.178.675-1.274 1.342l-.497 3.442C2.072 16.907 2.962 18 4.2 18h11.6c1.237 0 2.128-1.093 1.953-2.305l-.497-3.442zM10 15.492c-1.395 0-2.526-1.12-2.526-2.5s1.131-2.5 2.526-2.5s2.526 1.12 2.526 2.5s-1.132 2.5-2.526 2.5zM19.95 6c-.024-1.5-3.842-3.999-9.95-4C3.891 2.001.073 4.5.05 6s.021 3.452 2.535 3.127c2.941-.381 2.76-1.408 2.76-2.876C5.345 5.227 7.737 4.98 10 4.98s4.654.247 4.655 1.271c0 1.468-.181 2.495 2.76 2.876C19.928 9.452 19.973 7.5 19.95 6z"
                                            fill="#626262" />
                                    </svg>
                                </i>
                            </a>
                        </div>

                    </ul>

                    {{-- Request for quote button --}}
                    <a class="button-1" href="{{ url('/forms/Request For Quotation') }}">
                        Quote
                    </a>

                    <!-- nav-toggler -->
                    <button class="nav-toggler">
                        <span></span>
                    </button>
                </nav>
            </div>
        </div>
    </header>
    {{-- ========== Header Section Ends ========== --}}

    @yield('content')


    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    {{-- About Ceo --}}
                    <div class="col-lg-4 col-md-6 footer-info">
                        <h3> Metagreen Innovations </h3>

                        <img src="{{ url('images/logo.jpg') }}" alt="">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt eius sint vitae esse
                            atque ad facere quisquam quas vero error! Inventore ipsa dicta cumque tempore quaerat
                            explicabo nulla fugiat accusantium?
                        </p>
                        <p class="mt-2">Ezekiel Dunsin Olorunnibi <em>(B.Eng Electrical/ Electronics Engineering)</em>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href=" {{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/service') }}">Services</a></li>
                            <li><a href="{{ url('/project') }}">Projects</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Fajol Estate, Obantoko, <br>
                            Abeokuta, Ogun State, Nigeria
                            <br>

                            <strong>Phone 1:</strong> +2348062175217<br>
                            <strong>Phone 2:</strong> +2349015016567<br>
                            <strong>Email:</strong> contact@metagreeninnovations.com<br>
                        </p>

                        <div class="social-links">
                            {{-- whatsapp --}}
                            <a href="">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" focusable="false" width="2em" height="2em"
                                        style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                        <path
                                            d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8c0 24.9 7 49.2 20.2 70.1l3.1 5l-13.3 48.6l49.9-13.1l4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8c0-35.2-15.2-68.3-40.1-93.2c-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8c-12.6 1.9-22.4.9-47.5-9.9c-39.7-17.2-65.7-57.2-67.7-59.8c-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5c2.6 0 5.3 0 7.6.1c2.4.1 5.7-.9 8.9 6.8c3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6c15.3 26.3 30.6 35.4 53.9 47.1c4 2 6.3 1.7 8.6-1c2.3-2.6 9.9-11.6 12.5-15.5c2.6-4 5.3-3.3 8.9-2c3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5c29.9 30 47.9 69.8 47.9 112.2c0 87.4-72.7 158.5-160.1 158.5z"
                                            fill="#25D366" />
                                    </svg>
                                </i>
                            </a>

                            {{-- facebook --}}
                            <a href="">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" focusable="false" width="3rem" height="3rem"
                                        style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                        <path
                                            d="M25.566 2.433H6.433c-2.2 0-4 1.8-4 4v19.135c0 2.2 1.8 4 4 4h19.135c2.2 0 4-1.8 4-4V6.433c-.002-2.2-1.8-4-4.002-4zm-.257 14.483h-3.22v11.65h-4.818v-11.65h-2.41V12.9h2.41v-2.41c0-3.276 1.36-5.225 5.23-5.225h3.217V9.28h-2.012c-1.504 0-1.604.563-1.604 1.61l-.013 2.01h3.645l-.426 4.016z"
                                            fill="#4267B2" />
                                    </svg>
                                </i>
                            </a>

                            {{-- instagram --}}
                            <a href="">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" focusable="false" width="2.5rem" height="2.5rem"
                                        style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 1025 1024">
                                        <path
                                            d="M320.428 512q0-80 56-136t136-56t136 56t56 136t-56 136t-136 56t-136-56t-56-136zm704-64v448q0 53-37.5 90.5t-90.5 37.5h-768q-53 0-90.5-37.5T.428 896V128q0-53 37.5-90.5t90.5-37.5h768q53 0 90.5 37.5t37.5 90.5v192h-256q-45-59-112-93.5t-144-34.5t-144 34.5t-112 93.5h-256v128h198q-6 32-6 64q0 87 43 160.5t116.5 116.5t160.5 43t160.5-43t116.5-116.5t43-160.5q0-32-6-64h198z"
                                            fill="#FD1D1D" />
                                    </svg>
                                </i>
                            </a>
                        </div>

                    </div>

                    {{-- Newsletter --}}
                    {{-- <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p></p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div> --}}

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Metagreen Innovations</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed & Developed by <strong>
                    <a href="https://abiodundigitalhub.tech/">Abiodun Digital Hub</a>
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

    {{-- Preloader --}}
    <div id="loader">
        <h3 class="text-center ">Metagreen Innovations</h3>
    </div>

    {{-- ========== JS Libraries ========== --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js">
    </script>

    {{-- ========== Custom JS ========== --}}
    <script src="{{ url('js/script.js') }}"></script>

</body>

</html>
