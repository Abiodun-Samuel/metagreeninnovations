@extends('layouts.app')

@section('content')

    <div class="projectdetails">

        @include('layouts.innerheader')

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 my-2">
                    <div class="projectdetails">

                        <h4>Project Details</h4>

                        <hr>

                        <p> <b>Title:</b> <span>Design, Supply and Installation</span> </p>
                        <p> <b>Location: </b> <span>Buena Vista Estate, Lekki, Lagos State Nigeria </span> </p>
                        <p> <b>Date: </b> <span> December 2020.</span> </p>
                        <p> <b>Components: </b>
                            <span>
                                <ul class="ml-5">
                                    <li>2 Units of 10KVA Inverter (20KVA).</li>
                                    <li>24 Units of 200AH Tubular Batteries.</li>
                                    <li>50 Modules of 280Watts Solar Panels.</li>
                                    <li>2 Units of 100Amps & 1 Unit of 60Amp MPPT Charge Controller.</li>
                                    <li>Other Complimentary Assessories.</li>
                                </ul>
                            </span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-8 col-md-7 my-2">
                    <h4>Project Gallery</h4>
                    <a class="venobox" data-gall="gallery01"
                        href="{{ url('/images/projects/buena-vista-estate/image-bg.jpg') }}"><img class="img-fluid"
                            src="{{ url('/images/projects/buena-vista-estate/image-sm.jpg') }}"></a>
                    <a class="venobox" data-gall="gallery01"
                        href="{{ url('/images/projects/buena-vista-estate/image-bg1.jpg') }}"><img
                            src="{{ url('/images/projects/buena-vista-estate/image-sm1.jpg') }}"></a>
                    <a class="venobox" data-gall="gallery01"
                        href="{{ url('/images/projects/buena-vista-estate/image-bg1.jpg') }}"><img
                            src="{{ url('/images/projects/buena-vista-estate/image-sm1.jpg') }}"></a>
                </div>
            </div>
        </div>
    </div>

@endsection
