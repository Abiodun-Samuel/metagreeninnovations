@extends('layouts.app')

@section('content')

    <x-header pageheader="{{ $innertitle }}" subpageheader=""
        pagedescription="We specialize in the provision of viable alternative Power backup and renewable energy solutions using innovative and industry best practice. We do this through the following services" />

    <div class="servicepage ">

        <div class="container">
            <div class="row">
                <x-service aos="0" title="Supply of inverter and solar system components"
                    description="We sell and supply inverters of different capacities, inverter batteries, solar panels and charge controllers are available at competitive prices."
                    icon="6" />
                <x-service aos="50" title="Solar System design and installation"
                    description="One of the factors that contribute to a failed solar system is poor design from the onset. We design using standard approach and carry out installations using industry best practice."
                    icon="7" />
                <x-service aos="100" title="Inverter | ups System Sizing and Installation"
                    description="Sizing an inverter is an important part of any installation, big or small. Batteries send DC electricity to your inverter, you need to have an inverter size that can handle the load and convert it to AC power. This requires knowing how to size an inverter properly. We can help you with this"
                    icon="6" />
                <x-service aos="150" title="Solar street lighting projects design and execution"
                    description="Get your street illuminated with solar lights at affordable cost. You will surely need our solutions."
                    icon="7" />
                <x-service aos="200" title="Supply & installation of Solar Water Pumps & Heating Systems"
                    description="Solar pumps and solar water heating systems are a great way to cut down electricity bills. Thinking of embracing the technology? Metagreen innovations comes handy here."
                    icon="6" />
                <x-service aos="250" title="General consultancy"
                    description="We are available to listen to you and advise you on issues that relate to your electricity needs. Our business acumen may just be what you need to bridge the gap in solving your energy problems."
                    icon="7" />
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
