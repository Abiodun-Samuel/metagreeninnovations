@extends('layouts.app')

@section('content')
    {{-- ====== Hero ===== --}}
    <div id="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-text-box">
                    <h1 class="hero-header">
                        <span>Safe</span>, <span>Steady</span> & <span>Sustainable</span> Energy Solutions for <br>
                        <span id="typed"></span>
                    </h1>
                    <p class="hero-text anim">
                        We provide quality solar energy systems at affordable price. We take care
                        of the design, supply and installation. Do you wish to cut down the cost of your electricity bills?
                    </p>
                    <div class="hero-btn anim">
                        <a href="{{ url('#start') }}" class="mybtn">Get Started</a>
                        <a href="{{ url('/Contact Us') }}" class="mybtn mx-5"> Contact</a>
                    </div>
                </div>

                <div class="col-lg-6 hero-img-box">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner anim-img">
                            <div class="carousel-item active">
                                <img src="{{ url('/images/projects/Buena Vista Estate Project 1/image1.jpg') }}"
                                    class="img-fluid bg-secondary" alt="our project" title="Our Projects" height="350"
                                    width="500">
                            </div>
                            <div class="carousel-item ">
                                <img src="{{ url('/images/projects/Buena Vista Estate Project 1/image2.jpg') }}"
                                    class="img-fluid bg-secondary" alt="our project" title="Our Projects" height="350"
                                    width="500">
                            </div>
                            <div class="carousel-item ">
                                <img loading="lazy"
                                    src="{{ url('/images/projects/Buena Vista Estate Project 1/image3.jpg') }}"
                                    class="img-fluid bg-secondary" alt="our project" title="Our Projects" height="350"
                                    width="500">
                            </div>
                            <div class="carousel-item ">
                                <img loading="lazy"
                                    src="{{ url('/images/projects/Buena Vista Estate Project 1/image4.jpg') }}"
                                    class="img-fluid bg-secondary" alt="our project" title="Our Projects" height="350"
                                    width="500">
                            </div>
                            <div class="carousel-item ">
                                <img loading="lazy"
                                    src="{{ url('/images/projects/Buena Vista Estate Project 1/image4.jpg') }}"
                                    class="img-fluid bg-secondary" alt="our project" title="Our Projects" height="350"
                                    width="500">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ===== Hero Ends ===== --}}

    <!-- ====== About ====== -->
    <div class="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 my-3 ">
                    <div class="content">

                        <h2>Why Choose Us</h2>
                        <p>
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
                        </p>

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
                            <a href="{{ url('/About Us') }}" class="mybtn yellow-1"> Read More </a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 d-flex align-items-stretch my-3" data-aos="fade-up">
                    <div class="icon-box ">
                        <div class="icon my-1"><img src="{{ url('/images/mission.svg') }}" alt="Our mission">
                        </div>
                        <h4>Our Mission</h4>
                        <p>Giving people access to sustainable and affordable power solutions
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch my-3" data-aos="fade-up" data-aos-delay="50">
                    <div class="icon-box ">
                        <div class="icon my-1"><img src="{{ url('/images/vision.svg') }}" alt="Our vision">
                        </div>
                        <h4>Our Vision</h4>
                        <p>We are fully committed to providing every Nigerian a ready access to innovative,
                            competitive, environmentally friendly and reliable power and renewable energy
                            solutions anywhere and anytime.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ===== About Ends ====== -->

    {{-- Why Solar --}}
    <section id="why-solar">
        <div class="container">
            <h2>
                Why Solar?
            </h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div data-aos="fade-up" class="why-text">
                        <img src="{{ url('/images/services/start/solar-panel.svg') }}" alt="ABUNDANT ENERGY SOURCE">
                        <h3>FREE & ABUNDANT ENERGY SOURCE</h3>
                        <p> Solar energy serves as an important source of renewable
                            energy.</p>

                        <img src="{{ url('/images/services/start/energetic.svg') }}" alt="constant power">
                        <h3>
                            Reliable & Consistent Power Supply
                        </h3>
                        <p> Solar provides a consistent and regular means of power supply. </p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="why-box" data-aos-delay="100" data-aos="fade-up">

                        <img title="solar Panel" class="img-thumbnail " src="{{ url('/images/solar.jpg') }}"
                            alt="importance of solar">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">

                    <div data-aos="fade-up" data-aos-delay="200" class="why-text">
                        <img src="{{ url('/images/services/start/tool-box.svg') }}" alt="maintainance free">
                        <h3>MAINTENANCE FREE</h3>
                        <p>By going in for solar power, you will cut your cost of
                            electricity at home or office</p>
                        <img src="{{ url('/images/services/start/earth-globe.svg') }}" alt="eco friendly">
                        <h3>
                            ECO FRIENDLY
                        </h3>
                        <p>Solar is environment friendly, as a result CO2 emissions are
                            reduced, which contributes less to global warming</p>

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
                <x-service aos="0" title="Supply of inverter and solar system components"
                    description="We sell and supply inverters of different capacities, inverter batteries, solar panels and charge controllers are available at competitive prices." />
                <x-service aos="50" title="Solar System design and installation"
                    description="One of the factors that contribute to a failed solar system is poor design from the onset. We design using standard approach and carry out installations using industry best practice." />
                <x-service aos="100" title="Inverter | ups System Sizing and Installation"
                    description="Sizing an inverter is an important part of any installation, big or small. Batteries send DC electricity to your inverter, you need to have an inverter size that can handle the load and convert it to AC power. This requires knowing how to size an inverter properly. We can help you with this." />

                <x-service aos="150" title="Solar street lighting projects design and execution"
                    description="Get your street illuminated with solar lights at affordable cost. You will surely need our solutions." />
                <x-service aos="200" title="Supply & installation of Solar Water Pumps & Heating Systems"
                    description="Solar pumps and solar water heating systems are a great way to cut down electricity bills. Thinking of embracing the technology? Metagreen innovations comes handy here." />
                <x-service aos="250" title="General consultancy"
                    description="We are available to listen to you and advise you on issues that relate to your electricity needs. Our business acumen may just be what you need to bridge the gap in solving your energy problems." />
            </div>
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
                <x-project aos="0" folder="Oral Estate Project" description="5KVA Complete Solar System at Oral Estate"
                    image="image2" />
                <x-project aos="50" folder="Buena Vista Estate Project 1"
                    description="20KVA Complete Solar System at Buena Vista Estate (Project 1)." image="image4" />
                <x-project aos="100" folder="Lekki County Homes Project"
                    description="2KVA Complete System at Lekki County Homes." image="image2" />
            </div>

            <div class="my-5">
                <a href="{{ url('/Projects') }}" class="mybtn yellow-1">View More</a>
            </div>

        </div>
    </section>
    <!-- ===== Projects Ends ===== -->

    <x-cta
        cta="If you'd like to know more about our services or you have any inquiries, click the button to contact us. We'd love to hear from you!"
        page="Contact Us" />

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
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="startbox text-center p-5 my-2">
                        <h3>Contact</h3>
                        <img src="{{ url('/images/services/start/contact.svg') }}" alt="contact us now">
                        <p>To get started you can contact us below or give us a call right away.</p>

                        <a href="{{ url('/Contact Us') }}">Contact</a>
                        <a href="tel:+2348062175217">Call</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="50">
                    <div class="startbox text-center p-5 my-2">
                        <h3>Power Assessment</h3>
                        <img src="{{ url('/images/services/start/assessment.svg') }}" alt="Power assessment">
                        <p>Give us details of all the electrical appliances you wish to power with the solar system and we
                            will recommend the best system that will suit your need.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="startbox text-center p-5 my-2">
                        <h3> Contract & Payment</h3>
                        <img src="{{ url('/images/services/start/negotiation.svg') }}" alt="Contract and payment">
                        <p> Afterwards, we will send you a quote and an agreement form. Sign the form and make payment. <br>
                            <em> (Payment validates order)</em>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="150">
                    <div class="startbox text-center p-5 my-2">
                        <h3>Installation </h3>
                        <img src="{{ url('/images/services/start/installation.svg') }}" alt="installation">
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
    <section>
        <div class="container">
            <div class="header">
                <h2> Our Partners</h2>
            </div>
            <div class="row">
                {{-- Clients --}}
                <div data-aos="fade-up">
                    <div class="partners text-center">
                        <img class="img-fluid figure  m-3" src="{{ url('images/clients/lento.jpg') }}" alt="Our Clients">
                        <img class="img-fluid figure m-3" src="{{ url('images/clients/famicare.jpg') }}"
                            alt="Our Clients">
                        <img class="img-fluid figure m-3" src="{{ url('images/clients/felicity.jpg') }}"
                            alt="Our Clients">
                        <img class="img-fluid figure m-3" src="{{ url('images/clients/samba.jpg') }}" alt="Our Clients">
                        <img class="img-fluid figure m-3" src="{{ url('images/clients/wandel.jpg') }}" alt="Our Clients">
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

            <div class="row" data-aos="fade-up">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active">
                            <img src="{{ url('/images/testimonials/image1.jpg') }}" class="img-thumbnail" alt="">
                            <div class="text-center">
                                <h5> Mr. Eneje Ikenna (Oral Estate, Lekki) </h5>
                                <p>
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="2.5em" height="2.5em"
                                            viewBox="0 0 24 24">
                                            <path d="M10 7l-2 4h3v6H5v-6l2-4h3m8 0l-2 4h3v6h-6v-6l2-4h3z" fill="#d58943" />
                                        </svg>
                                    </i>
                                    <span>
                                        My experience with Metagreen Innovations was very satisfactory, Mr Ezekiel and his
                                        crew
                                        did a fantastic installation and handle everything in a very timely and professional
                                        manner. Great Job.
                                    </span>
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="2.5em" height="2.5em"
                                            viewBox="0 0 24 24">
                                            <path d="M14 17h3l2-4V7h-6v6h3M6 17h3l2-4V7H5v6h3l-2 4z" fill="#d58943" />
                                        </svg>
                                    </i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span>
                            <i aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="3em" height="3em" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#d58943" stroke-width="4" d="M17 2L7 12l10 10" />
                                </svg>
                            </i>
                        </span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span>
                            <i aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="3em" height="3em" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#d58943" stroke-width="4" d="M7 2l10 10L7 22" />
                                </svg>
                            </i>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>
    </section>
    {{-- ===== Testimonials ===== --}}
@endsection
