@extends('layouts.app')

@section('content')

    <x-header pageheader="{{ $innertitle }}" subpageheader=""
        pagedescription="We specialize in the provision of viable alternative Power backup and renewable energy solutions using innovative and industry best practice. We do this through the following services" />

    <div class="servicepage ">

        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex align-items-stretch my-4" data-aos="fade-up"
                        data-aos-delay="{{ $service->aos }}">
                        <div class="card text-center">
                            <figure>
                                <img loading="lazy" src="{{ url('/images/services/icon/'.$service->id.'.svg') }}" alt="service icon">
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

    <x-cta
        cta="If you'd like to know more about our services or have any inquiries, click the button to contact us. We'd love to hear from you!"
        page="Contact Us" />

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

@endsection
