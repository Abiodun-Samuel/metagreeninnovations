@extends('layouts.app')

@section('content')
    {{-- ====== Hero ===== --}}
    <div id="hero">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active carousel-one">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <h1>
                                    <span>Safe</span> <br> Energy Solutions
                                    {{-- <span>Safe</span>, <span>Steady</span> & <span>Sustainable</span> <br> Energy Solutions --}}
                                    for
                                    <br>
                                    <span id="typed_one"></span>
                                </h1>
                                <p class="hero-text">
                                    We provide quality solar energy systems at affordable price. We take care
                                    of the design, supply and installation. Do you wish to cut down the cost of your
                                    electricity
                                    bills?
                                </p>
                                <div class="hero-btn">
                                    <a href="{{ url('#start') }}" class="mybtn">Get Started</a>
                                    <a href="{{ route('contact') }}" class="mybtn mx-5"> Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-two">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <h1>
                                    <span>Steady</span> <br> Energy Solutions
                                    {{-- <span>Safe</span>, <span>Steady</span> & <span>Sustainable</span> <br> Energy Solutions --}}
                                    for
                                    <br>
                                    <span id="typed_two"></span>
                                </h1>
                                <p class="hero-text">
                                    We provide quality solar energy systems at affordable price. We take care
                                    of the design, supply and installation. Do you wish to cut down the cost of your
                                    electricity
                                    bills?
                                </p>
                                <div class="hero-btn">
                                    <a href="{{ url('#start') }}" class="mybtn">Get Started</a>
                                    <a href="{{ route('contact') }}" class="mybtn mx-5"> Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-three">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <h1>
                                    <span>Sustainable</span> <br> Energy Solutions
                                    {{-- <span>Safe</span>, <span>Steady</span> & <span>Sustainable</span> <br> Energy Solutions --}}
                                    for
                                    <br>
                                    <span id="typed_three"></span>
                                </h1>
                                <p class="hero-text">
                                    We provide quality solar energy systems at affordable price. We take care
                                    of the design, supply and installation. Do you wish to cut down the cost of your
                                    electricity
                                    bills?
                                </p>
                                <div class="hero-btn">
                                    <a href="{{ url('#start') }}" class="mybtn">Get Started</a>
                                    <a href="{{ route('contact') }}" class="mybtn mx-5"> Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ===== Hero Ends ===== --}}

    <!-- ====== About ====== -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch my-3" data-aos="fade-up">
                    <div class="content shadow-lg">

                        <h2>Why Choose Us</h2>
                        {{-- <p>
                            <i>
                                <svg width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                    <path
                                        d="M14.688 3l-.313.281L7.594 10H2v16h16.844c1.41 0 2.64-.996 2.937-2.375L23.438 16H27c1.645 0 3-1.355 3-3s-1.355-3-3-3H16.25l.188-.75c.203-.156.332-.223.625-.625c.468-.64.937-1.633.937-2.969C18 4.23 16.71 3 15.094 3zm.718 2.094c.422.082.594.254.594.562c0 .903-.273 1.461-.531 1.813c-.258.351-.438.437-.438.437l-.344.188l-.124.406l-.594 2.25l-.313 1.25H27c.566 0 1 .434 1 1c0 .566-.434 1-1 1h-5.188l-.187.781l-1.781 8.438c-.102.468-.524.781-1 .781H9V11.406zM4 12h3v12H4z" />
                                </svg>
                            </i>
                            We are the leading solar company in Nigeria, providing all range of customized, integrated
                            solar
                            solutions
                            and products to customers in all sectors.
                        </p> --}}
                        <p>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                    <path
                                        d="M14.688 3l-.313.281L7.594 10H2v16h16.844c1.41 0 2.64-.996 2.937-2.375L23.438 16H27c1.645 0 3-1.355 3-3s-1.355-3-3-3H16.25l.188-.75c.203-.156.332-.223.625-.625c.468-.64.937-1.633.937-2.969C18 4.23 16.71 3 15.094 3zm.718 2.094c.422.082.594.254.594.562c0 .903-.273 1.461-.531 1.813c-.258.351-.438.437-.438.437l-.344.188l-.124.406l-.594 2.25l-.313 1.25H27c.566 0 1 .434 1 1c0 .566-.434 1-1 1h-5.188l-.187.781l-1.781 8.438c-.102.468-.524.781-1 .781H9V11.406zM4 12h3v12H4z" />
                                </svg>
                            </i>
                            We provide quality products and services with sound technical knowledge, skills and
                            commitment to excellence.
                        </p>
                        <div>
                            <a href="{{ route('about') }}" class="mybtn yellow-1"> Read More </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch my-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box shadow-lg">
                        <h4>Our Mission</h4>
                        <p>Giving people access to sustainable and affordable power solutions
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch my-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box shadow-lg">
                        {{-- <div class="icon my-1"><img loading="lazy" src="{{ url('/images/vision.svg') }}"
                                alt="Our vision">
                        </div> --}}
                        <h4>Our Vision</h4>
                        <p>We are fully committed to providing every Nigerian a ready access to innovative,
                            competitive, environmentally friendly and reliable power and renewable energy
                            solutions anywhere and anytime.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ===== About Ends ====== -->

    {{-- Why Solar --}}
    <section id="why-solar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="why-box" data-aos="fade-right">
                        <img loading="lazy" title="solar Panel" class="img-fluid" src="{{ url('/images/why.jpg') }}"
                            alt="importance of solar">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 d-flex align-items-stretch my-3" data-aos="fade-left"
                            data-aos-delay="100">
                            <div class="why-box-content">
                                <img loading="lazy" src="{{ url('/images/services/start/solar-panel.svg') }}"
                                    alt="ABUNDANT ENERGY SOURCE">
                                <h3>Free & aboudant energy source</h3>
                                <p> Solar energy serves as an important source of renewable
                                    energy.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 d-flex align-items-stretch my-3" data-aos="fade-left"
                            data-aos-delay="200">
                            <div class="why-box-content">
                                <img loading="lazy" src="{{ url('/images/services/start/energetic.svg') }}"
                                    alt="constant power">
                                <h3>
                                    Reliable & Consistent Power Supply
                                </h3>
                                <p> Solar provides a consistent and regular means of power supply. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 d-flex align-items-stretch my-3" data-aos="fade-left"
                            data-aos-delay="300">
                            <div class="why-box-content">
                                <img loading="lazy" src="{{ url('/images/services/start/tool-box.svg') }}"
                                    alt="maintainance free">
                                <h3>maintanence free</h3>
                                <p>By going in for solar power, you will cut your cost of
                                    electricity at home or office</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 d-flex align-items-stretch my-3" data-aos="fade-left"
                            data-aos-delay="400">
                            <div class="why-box-content">
                                <img loading="lazy" src="{{ url('/images/services/start/earth-globe.svg') }}"
                                    alt="eco friendly">
                                <h3>
                                    eco friendly
                                </h3>
                                <p>Solar is environment friendly, as a result CO2 emissions are
                                    reduced, which contributes less to global warming</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Why Solar End --}}

    <!-- ======= Services ======= -->
    <section class="services">
        <div class="container">
            <div class="header">
                <h2>Services</h2>
                <p>We specialize in the provision of viable alternative Power backup and renewable energy solutions
                    using innovative and industry best practice. We do this through the following services</p>
            </div>

            <div class="row">
                @foreach ($services as $key => $service)
                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex align-items-stretch my-4" data-aos="fade-up"
                        data-aos-delay="{{ $key * 150 }}">
                        <div class="card text-center">
                            <figure>
                                <img loading="lazy" src="{{ url('/images/services/icon/' . $service->id . '.svg') }}"
                                    alt="service icon">
                            </figure>
                            <h3 class="card-title"> {{ $service->title }}</h3>
                            <div class="card-body">
                                <p class="card-text"> {{ $service->description }} </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ===== Services Ends ====== -->

    <!-- ===== Projects  ====== -->
    <section class="projects">
        <div class="container">

            <div class="header">
                <h2>Projects</h2>
                <p>Take a look at our recently completed projected executed with a touch of excellence and professionalism.
                </p>
            </div>

            <div class="row">
                @foreach ($projects as $key => $project)
                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex align-items-stretch my-4" data-aos="fade-up"
                        data-aos-delay="{{ $key * 100 }}">
                        <div class="card">
                            <div class="card-pix">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img loading="lazy"
                                                src="{{ url('storage/images/projects/' . $project->image_main) }}"
                                                class="img-fluid bg-secondary" alt="our project" title="Our Projects"
                                                height="350" width="500">
                                        </div>
                                        @foreach (json_decode($project->images) as $img)
                                            <div class="carousel-item">
                                                <img loading="lazy" src="{{ url('storage/images/projects/' . $img) }}"
                                                    class="img-fluid bg-secondary" alt="our project" title="Our Projects"
                                                    height="350" width="500">
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title mb-1">{{ $project->title }}</h3>
                                <span class="pb-3"> Posted {{ $project->updated_at->diffForHumans() }} </span>
                                <p class="card-text my-2"> {{ $project->sub_title }} </p>
                                <a href="{{ route('admin.show', $project->slug) }}"> Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="my-4">
                <a href="{{ route('projects') }}" class="mybtn yellow-1">View More</a>
            </div>
        </div>
    </section>
    <!-- ===== Projects Ends ===== -->

    <div class="cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 my-2 text-center">
                    <img src={{ asset('/images/contact.jpg') }} alt="contact us" class="img-fluid" loading="lazy">
                </div>
                <div class="col-lg-6 col-md-6 my-2">
                    <div class="d-flex justify-content-center align-items-center pt-5">
                        <div class="shadow-lg cta-text p-5 rounded">
                            <p class="mb-5"> If you'd like to know more about our services or you have any
                                inquiries,
                                click the button to
                                contact us. We'd love to hear from you! </p>
                            <a class="cta_btn" href="{{ route('contact') }}"> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Get Started --}}
    <section id="start">
        <div class="container">
            <div class="header">
                <h2>Get Started</h2>
                <p>
                    Are you ready to say goodbye to erratic power supply and also cut down your cost of electricity
                    drastically?
                    Begin your journey to steady power supply with us now.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="startbox text-center p-5 my-2">
                        <h3>Contact</h3>
                        <img loading="lazy" src="{{ url('/images/services/start/contact.svg') }}" alt="contact us now">
                        <p>To get started you can contact us below or give us a call right away.</p>

                        <a href="{{ url('/Contact Us') }}">Contact</a>
                        <a href="tel:+2348062175217">Call</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="50">
                    <div class="startbox text-center p-5 my-2">
                        <h3>Power Assessment</h3>
                        <img loading="lazy" src="{{ url('/images/services/start/assessment.svg') }}"
                            alt="Power assessment">
                        <p>Give us details of all the electrical appliances you wish to power with the solar system and we
                            will recommend the best system that will suit your need.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="startbox text-center p-5 my-2">
                        <h3> Contract & Payment</h3>
                        <img loading="lazy" src="{{ url('/images/services/start/negotiation.svg') }}"
                            alt="Contract and payment">
                        <p> Afterwards, we will send you a quote and an agreement form. Sign the form and make payment. <br>
                            <em> (Payment validates order)</em>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="150">
                    <div class="startbox text-center p-5 my-2">
                        <h3>Installation </h3>
                        <img loading="lazy" src="{{ url('/images/services/start/installation.svg') }}"
                            alt="installation">
                        <p> Once Payment has been made. Our team of proffessional engineers will install your solar system.
                        </p>

                        <a href="{{ url('/Contact Us') }}">Contact</a>

                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Get Started --}}

    {{-- ==== Partners ===== --}}
    <section id="patner">
        <div class="container">
            <div class="header">
                <h2> Our Partners</h2>
            </div>
            <div class="row">
                {{-- Clients --}}
                <div data-aos="fade-up">
                    <div class="partners text-center">
                        <img loading="lazy" class="img-fluid figure  m-3" src="{{ url('images/clients/lento.jpg') }}"
                            alt="Our Partners">
                        <img loading="lazy" class="img-fluid figure m-3" src="{{ url('images/clients/famicare.jpg') }}"
                            alt="Our Partners">
                        <img loading="lazy" class="img-fluid figure m-3" src="{{ url('images/clients/felicity.jpg') }}"
                            alt="Our Partners">
                        <img loading="lazy" class="img-fluid figure m-3" src="{{ url('images/clients/samba.jpg') }}"
                            alt="Our Partners">
                        <img loading="lazy" class="img-fluid figure m-3" src="{{ url('images/clients/wandel.jpg') }}"
                            alt="Our Partners">
                        <a href="{{ url('https://www.maldynsolution.com') }}">
                            <img loading="lazy" class="img-fluid figure m-3"
                                src="{{ url('images/clients/maldyn.jpg') }}" alt="Our Partners">
                        </a>
                        <img loading="lazy" class="img-fluid figure m-3" src="{{ url('images/clients/genus.jpg') }}"
                            alt="Our Partners">
                        <a href="{{ url('https://www.electrokristron.com') }}">
                            <img loading="lazy" class="img-fluid figure m-3"
                                src="{{ url('images/clients/electron.jpg') }}" alt="Our Partners">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ==== Partners ===== --}}

    {{-- ==== Testimonials ===== --}}
    <section class="testimonials">
        <div class="container">
            <div class="header">
                <h2>Customer Testimonials</h2>
                <p>Read what our valued customers have to say about us.</p>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="my-slider">
                        @foreach ($clients as $key => $client)
                            <div class="card shadow rounded p-4 m-4 border-0" data-aos="fade-up"
                                data-aos-delay="{{ $key * 100 }}">
                                <img class="img-fluid"
                                    src="{{ url('storage/images/testimonials/' . $client->image) }}"
                                    alt="{{ $client->name }}" title="{{ $client->name }}">
                                <h3>{{ $client->name }}</h3>
                                <span>({{ $client->address }})</span> <br>
                                <span class="pb-3"> Posted {{ $client->updated_at->diffForHumans() }} </span>
                                <p>&#34;{{ $client->comments }}&#34;</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ===== Testimonials Ends ===== --}}
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/CSSRulePlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script>
        // Typejs
        var typejs_one = document.getElementById('typed_one')
        var typejs_two = document.getElementById('typed_two')
        var typejs_three = document.getElementById('typed_three')
        if (typejs_one || typejs_two || typejs_three) {
            var typed_one = new Typed("#typed_one", {
                strings: [
                    "Homes.",
                    "Hospitals.",
                    "Offices.",
                    "SMEs.",
                    "Churches.",
                    "And More.",
                ],
                smartBackspace: true,
                typeSpeed: 60,
                backSpeed: 30,
                loop: true,
                loopCount: Infinity,
            });
            var typed_two = new Typed("#typed_two", {
                strings: [
                    "Homes.",
                    "Hospitals.",
                    "Offices.",
                    "SMEs.",
                    "Churches.",
                    "And More.",
                ],
                smartBackspace: true,
                typeSpeed: 60,
                backSpeed: 30,
                loop: true,
                loopCount: Infinity,
            });
            var typed_three = new Typed("#typed_three", {
                strings: [
                    "Homes.",
                    "Hospitals.",
                    "Offices.",
                    "SMEs.",
                    "Churches.",
                    "And More.",
                ],
                smartBackspace: true,
                typeSpeed: 60,
                backSpeed: 30,
                loop: true,
                loopCount: Infinity,
            });
        }

        // load gsap
        var anim_img = document.querySelector('.anim-img')
        if (anim_img) {
            var rule = CSSRulePlugin.getRule("#hero h1:after");
            var tl = gsap.timeline({
                defaults: {
                    duration: 0.6
                }
            });
            tl.to(rule, {
                    cssRule: {
                        scaleY: 0
                    }
                })
                .from(".anim", {
                    y: 50,
                    stagger: 0.3,
                    opacity: 0
                })
                .from(".anim-img", {
                    x: 50,
                    opacity: 0
                });
        }

        // testimonials slider
        var slider = tns({
            container: '.my-slider',
            slideBy: 'page',
            autoplay: false,
            nav: false,
            mouseDrag: true,
            controlsText: ['&#9754;', '&#9755;'],
            responsive: {
                640: {
                    items: 1,
                },
                900: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
    </script>
@endpush
