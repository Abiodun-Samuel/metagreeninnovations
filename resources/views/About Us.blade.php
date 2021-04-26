@extends('layouts.app')

@section('content')

    <x-header pageheader="{{ $innertitle }}" subpageheader="" pagedescription="" />

    <div class="aboutpage my-5">
        <div class="container">
            <h3>
                Introduction
            </h3>
            <div class="row my-3">
                <div class="col-lg-4 col-md-6 p-3 my-3" data-aos="fade-up">
                    <p>
                        Metagreen Innovations is a reputable renewable energy company based in Nigeria. We started
                        operations
                        in the year 2017 and had since established our brand as a force to reckon with in the energy sector.
                        We are
                        one of the leading solar companies providing all range of customized, integrated solar solutions and
                        products to customers in all sectors. We are a well-known source in renewable energy market starting
                        from
                        conception, feasibility, load auditing, designing and execution.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 my-3" data-aos="fade-up" data-aos-delay="50">
                    <img class="img-fluid bg-secondary mt-5 mb-3" loading" src="{{ url('/images/solar2.jpg') }}"
                        alt="solar panel" width="495" height="350">
                </div>
                <div class="col-lg-4 col-md-6 p-3 my-3" data-aos="fade-up" data-aos-delay="100">
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
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-md-6 col-sm-6 my-4 align-items-stretch" data-aos="fade-up">
                    <h4>
                        OUR MISSION
                    </h4>
                    <img class="img-fluid my-3" loading" src="{{ url('/images/mission.svg') }}" alt="our mission"
                        width="80" height="80">
                    <p>
                        Giving people access to sustainable and affordable power solutions.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 my-4 align-items-stretch" data-aos="fade-up" data-aos-delay="50">
                    <h4>OUR VISION</h4>
                    <img class="img-fluid my-3" loading" src="{{ url('/images/vision.svg') }}" alt="our mission"
                        width="80" height="80">
                    <p>
                    <p>Fully committed to providing every Nigerian a ready access to innovative, competitive,
                        environmentally friendly and reliable power and renewable energy solutions anywhere and anytime.</p>
                </div>
            </div>
        </div>
    </div>

    <x-cta cta="We have wide range of services to suit your projects, Check them out!" page="Services" />

    <div class="team my-3">
        <div class="container">
            <div class="header">
                <h2>Team</h2>
                <p> We are a team of well-trained professionals.</p>
            </div>
            <div class="row">
                {{-- ceo --}}
                <div class="col-lg-3 col-md-4 col-sm-6 my-5 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-pix">
                            <img loading="lazy" src="{{ url('images/team/ceo.jpg') }}" class="img-fluid"
                                alt="Olorunnibi Ezekiel Dunsin">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Olorunnibi Ezekiel Dunsin</h4>
                            <span>(CEO)</span>
                            <p class="card-text">Mr. Olorunnibi is an entrepreneur by passion. By training, he is an
                                Electrical & Electronics Engineer. Being the CEO of Metagreen Innovations, he has executed
                                many
                                medium and large scale inverter and solar system installations in Nigeria since 2017.</p>
                        </div>
                    </div>


                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 my-5 d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="50">
                    <div class="card">
                        <div class="card-pix">
                            <img loading="lazy" src="{{ url('images/team/adegoke.jpg') }}" class="img-fluid"
                                alt="team member">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Adegoke Seun John</h4>
                            <span>(Lead Engineer)</span>
                            <p class="card-text"> Mr. Adegoke has over 5years experience in the industry. He is the Lead
                                Engineer at Metagreen Innovations(Electrical and Solar).</p>
                        </div>
                    </div>


                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 my-5 d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="card">
                        <div class="card-pix">
                            <img loading="lazy" src="{{ url('images/team/tiamiyu.jpg') }}" class="img-fluid"
                                alt="team member">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Tiamiyu Toheeb Oyetunde</h4>
                            <span>(Techical Support and Head of Logistics)</span>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 my-5 d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="150">
                    <div class="card">
                        <div class="card-pix">
                            <img loading="lazy" src="{{ url('images/team/oladeinde.jpg') }}" class="img-fluid"
                                alt="team member">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Oladeinde Jamiu</h4>
                            <span>(Technical Support)</span>
                            <p class="card-text">Mr. Oladeinde is an Eletrical Engineer with almost a decade experience. He
                                is our Technical Support.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
