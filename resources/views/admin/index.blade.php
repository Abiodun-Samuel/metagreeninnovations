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

    <title> {{ $metatitle ?? 'Admin | Metagreen Innovations' }} </title>

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
    <link rel="stylesheet" href="{{ url('/css/app.css?ver=1.231') }}">
    @stack('styles')

    {{-- ========== Custom CSS  ========== --}}
    <link rel="stylesheet" href="{{ url('style.css?ver=1.2') }}" />
    {{-- <link rel="stylesheet" href="{{ url('/css/style.css?ver=1.0') }}" /> --}}

</head>

<body>

    @yield('auth')

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

    <script src="{{ url('script.js?ver=1.0') }}"></script>
    {{-- <script src="{{ url('/js/script.js?ver=1.0') }}"></script> --}}

</body>

</html>
