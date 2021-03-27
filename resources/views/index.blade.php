@extends('layouts.app')


@section('content')


    <section id="hero" class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="content">
                        <h1 class="hero-text1">
                            Grow Your <span>Business</span> Globally
                        </h1>
                        <h2 class="hero-text2">
                            <span>
                                Launch your business to the world with our custom-made,
                                creative and customer friendly websites.</span>
                        </h2>
                    </div>

                    <div class="hero-btn">
                        <a href="#about" class="btn-get-started">
                            Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 mb-5 hero-img">
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            {{-- <div class="swiper-slide first">
                                <img src="assets/img/1.svg" class="img-fluid" alt="" />
                            </div>
                            <div class="swiper-slide second">
                                <img src="assets/img/2.svg" class="img-fluid" alt="" />
                            </div>
                            <div class="swiper-slide third">
                                <img src="assets/img/3.svg" class="img-fluid" alt="" />
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
