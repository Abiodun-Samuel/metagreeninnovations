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
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>

<body>

    {{-- ========== Header Section ========== --}}
    <header class="header">
        <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
            <div class="container">

                {{-- Nav Toggler --}}
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                {{-- logo --}}
                <a href="{{ url('/') }}"> <img class="navbar-brand" src="{{ url('images/logo.jpg') }}"
                        alt="Metagreen Innovation Logo"></a>

                {{-- Quotation Button 1 --}}
                <div class="quote d-md-none">
                    <a href="{{ url('forms/Request For Quotation') }}">
                        Quotation
                    </a>
                </div>

                {{-- Nav links --}}
                <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/aboutus') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/projects') }}">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>

                {{-- Quotation Button 2 --}}
                <div class="quote d-none d-md-block">
                    <a href="{{ url('/forms/Request For Quotation') }}">Quotation</a>
                </div>

            </div>
        </nav>
    </header>
    {{-- ========== Header Section Ends ========== --}}



    @yield('content')


    {{-- Fixed buttons --}}
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    {{-- loader --}}
    <div id="loader"></div>


    {{-- ========== JS Libraries ========== --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js">
    </script>

    {{-- ========== Custom JS ========== --}}
    <script src="{{ url('js/script.js') }}"></script>

</body>

</html>
