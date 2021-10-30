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

    <title> {{ $metatitle ?? 'Clients | Metagreen Innovations' }} </title>

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

    <section id="clients">
        <div class="container">
            <a href="{{ route('home') }}"
                class="nav-link text-light bg-primary my-2 px-3 py-1 d-inline-block">Homepage</a>

            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="clients p-4">
                        <a href="{{ route('home') }}"><img loading="lazy" class="mx-auto mb-5 bg-white"
                                src="{{ url('images/logo.jpg') }}" alt="Metagreen Innovations"
                                title="Metagreen Innovations" height="50" width="181"></a>

                        <h3>Thank You For Patronizing Us!</h3>
                        <p>Your feedback is very important to us and as you're probably well-aware, satisfied customers
                            are vital to the success of any business.
                            Also, we are always excited to share customer feedback on our website. If you are happy with
                            the work we completed for you, we would love to tell others about your experience! Would you
                            consider leaving a testimonial for us?
                            In just a few sentences describe your experience with us. Thanks </p>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p class="my-0">{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif

                        @if (session('status'))
                            <div class="alert alert-success">
                                <p>{{ session('status') }}</p>
                            </div>
                        @endif

                        <form class="mt-4" action="{{ route('clients.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <label for="name">Name*</label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name">

                            <label for="comment">Comments*</label>
                            <textarea name="comments" id="comments" rows="3">{{ old('comments') }}</textarea>

                            <label for="address">Address(State & City)*</label>
                            <input type="text" name="address" value="{{ old('address') }}" id="address">

                            <label for="image">Upload your picture* </label> <br>
                            <input type="file" name="image" id="image"><br>
                            <span>(formats: jpeg|jpg|png, file-size: less than 2048mb)</span>

                            <button type="submit">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

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
