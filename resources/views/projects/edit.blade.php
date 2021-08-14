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
    <div id="admin">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img loading="lazy" class="img-fluid bg-light" src="{{ url('images/logo.jpg') }}"
                        alt="Metagreen Innovations" title="Metagreen Innovations" height="50" width="181">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link text-light">Homepage</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="nav-link border-0 text-danger bg-transparent outline-0" type="submit">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row my-3 d-flex justify-content-center">
                <div class="col-lg-6 col-md-6 my-4">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    {{-- edit projects --}}
                    <div class="project">
                        <div class="card-header mb-2">
                            Edit <h2>{{ $project->sub_title }}</h2>
                        </div>
                        <div class="card-body">
                            <form class="my-2" method="post" action="{{ route('admin.update', $project->slug) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <fieldset>
                                    <legend>
                                        Upload project images
                                    </legend>
                                    <div class="input-group increment">
                                        <input type="file" name="images[]" class="form-control"
                                            value="{{ $project->images }}" multiple>
                                        <div class="input-group-btn">
                                            <button class="btn btn-success" type="button">
                                                + Add
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>

                                <hr>

                                <div class="form-row my-2">
                                    <div class="col-lg-6">
                                        <input class="w-100 my-1" type="text" name="title" id="title"
                                            value="{{ $project->title }}" placeholder="Project Title">
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="w-100 my-1" type="text" name="sub_title"
                                            value="{{ $project->sub_title }}" placeholder="Project Sub-title">
                                    </div>
                                </div>

                                <div class="form-row my-2">
                                    <div class="col-lg-6">
                                        <input class="w-100 my-1" type="text" name="location"
                                            value="{{ $project->location }}" placeholder="Project Location">

                                    </div>
                                    <div class="col-lg-6">
                                        <input class="w-100 my-1" type="text" name="date" id="date"
                                            value="{{ $project->date }}" placeholder="Project Date">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-lg-12">
                                        <p>Add Project Components</p>

                                        @for ($i = 0; $i < count($components); $i++)
                                            <div class="clone_components">
                                                <div class="input-group compo my-1"><input type="text"
                                                        name="components[]" class="form-control"
                                                        value="{{ $components[$i] }}" required>
                                                    <div class="input-group-btn"><button
                                                            class="btn bg-danger text-light del_component"
                                                            type="button">- Remove</button></div>
                                                </div>
                                            </div>
                                        @endfor

                                        <div class="input-group-btn">
                                            <button class="btn bg-success text-light add_component" type="button">
                                                + Add
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary py-2 mt-2 w-100">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
    <script>
        $(document).ready(function() {

            $(".btn-success").click(function() {
                $(".increment").after(
                    '<div class="clone hide"><div class="control-group input-group" style="margin-top:5px"><input type="file" name="images[]" class="form-control" required><div class="input-group-btn"><button class="btn btn-danger" type ="button">- Remove</button></div></div></div>'
                );
            });

            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".control-group").remove();
            });

            $(".add_component").click(function() {
                $(".add_component").after(
                    '<div class="clone_components"><div class="input-group compo my-1"><input type="text" name="components[]" class="form-control" required><div class="input-group-btn"><button class="btn bg-danger text-light del_component" type ="button">- Remove</button></div></div></div>'
                );
            });

            $("body").on("click", ".del_component", function() {
                $(this).parents(".compo").remove();
            });



        });
    </script>

</body>

</html>
