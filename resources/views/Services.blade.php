@extends('layouts.app')

@section('content')
    <x-header pageheader="{{ $innertitle }}" subpageheader=""
        pagedescription="We specialize in the provision of viable alternative Power backup and renewable energy solutions using innovative and industry best practice. We do this through the following services" />

    <div class="servicepage ">

        <div class="container">
            <div class="row">
                @foreach ($services as $key => $service)
                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex align-items-stretch my-4" data-aos="fade-up"
                        data-aos-delay="{{ $key * 100 }}">
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

    </div>

    <section class="services-text">
        <div class="container">
            <h4>CONCEPTUALIZATION</h4>
            <p>
                We at Metagreen Innovations believe that solar energy is the most attractive source for generating power
                especially in our country. The public, at large, have realized that Solar Energy is the best proven and
                economically viable option in the long run. Key benefits of solar energy systems are as follows;
            </p>
            <ul class=" ml-5">
                <li>Quick installation</li>
                <li>Reduction in electricity bill</li>
                <li>Uninterrupted supply</li>
                <li>Nominal maintenance</li>
                <li>Long operative life</li>
                <li>Low operational cost</li>
                <li>No additional wiring cost</li>
                <li>Low line losses</li>
                <li>No fuel cost</li>
                <li>Unattended operation</li>
                <li>Extendibility at any time</li>
                <li>Free from noise pollution</li>
                <li>Improved quality of life</li>
                <li>Environmental friendly</li>
            </ul>
        </div>
    </section>

    <div class="cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 my-2 text-center">
                    <img src={{ asset('/images/contact.jpg') }} alt="contact us" class="img-fluid" loading="lazy">
                </div>
                <div class="col-lg-6 col-md-6 my-2">
                    <div class="d-flex justify-content-center align-items-center pt-5">
                        <div class="shadow-lg cta-text p-5 rounded">
                            <p class="mb-5"> If you'd like to know more about our services or have any inquiries,
                                click the button to contact us. We'd love to hear from you!</p>
                            <a class="cta_btn" href="{{ route('contact') }}"> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
