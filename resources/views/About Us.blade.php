@extends('layouts.app')

@section('content')

    <x-header pageheader="{{ $innertitle }}" subpageheader="" pagedescription="" />

    <div class="aboutpage my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h3>
                        Introduction
                    </h3>
                    <p>
                        Metagreen Innovations is a reputable green/ renewable energy company based in Nigeria. We started
                        operations
                        in the year 2017 and had since established our brand as a force to reckon with in the energy sector.
                        We are
                        one of the leading solar companies providing all range of customized, integrated solar solutions and
                        products to customers in all sectors. We are a well-known source in renewable energy market starting
                        from
                        conception, feasibility, load auditing, designing and execution.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <p>
                        Technical knowledge, skill with quality products and commitments are the key factors leading us to
                        enhance
                        our customer database. Market knowledge, dedicated and well-trained professional teams have given us
                        the
                        opportunity to operate as one of the best sources in solar solutions for domestic, community,
                        industrial,
                        water pumping and street lights. All our personnel, design and installation teams comprise of
                        enthusiastic
                        people who share a common goal, of using solar energy for a brighter future for all.
                    </p>
                </div>
                <div class="col-lg-12">
                    <h4>
                        OUR MISSION
                    </h4>
                    <p>
                        Giving people access to sustainable and affordable power solutions.
                    </p>
                    <h4>OUR VISION</h4>
                    <p>Fully committed to providing every Nigerian a ready access to innovative, competitive,
                        environmentally friendly and reliable power and renewable energy solutions anywhere and anytime.</p>

                </div>

                <div class="col-lg-4 col-md-5 col-sm-6 mt-5 py-4">
                    <h4>About CEO</h4>

                    <img src="{{ url('/images/ceo.jpg') }}" alt="Ceo" class="img-thumbnail my-3">

                    <p>
                        <strong>Olorunnibi Ezekiel Dunsin</strong> is an entrepreneur by passion. By training, he is an
                        Electrical & Electronics Engineer. Being the CEO of Metagreen Innovations, he has executed many
                        medium and large scale inverter and solar system installations in Nigeria since 2017.
                    </p>

                </div>


            </div>
        </div>
    </div>

@endsection
