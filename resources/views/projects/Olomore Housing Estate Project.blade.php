@extends('layouts.app')

@section('content')

    <x-header pageheader="Projects" subpageheader=" | {{ $innertitle }}" pagedescription="" />

    <div class="projectdetails my-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 my-4">
                    <div class="projectdetails">

                        <h4>Project Details</h4>

                        <hr>

                        <p> <b>Title:</b> <span>Design, Supply and Installation.</span> </p>
                        <p> <b>Location: </b> <span>Olomore Housing Estate, Abeokuta, Ogun State, Nigeria. </span> </p>
                        <p> <b>Date: </b> <span> February 2021.</span> </p>
                        <p> <b>Components: </b>
                            <span>
                                <ul class="ml-5">
                                    <li>5KVA Inverter.</li>
                                    <li>4 Units of 200AH Tubular Batteries.</li>
                                    <li>8 Modules of 280Watts Solar Panels.</li>
                                    <li>1 Unit 80Amps MPPT Charge Controller.</li>
                                    <li>Other Complimentary Assessories.</li>
                                </ul>
                            </span>
                        </p>
                    </div>

                </div>

                <div class="col-lg-7 my-4">
                    <h4>Project Gallery</h4>
                    <div class="project-gallery">
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Olomore Housing Estate Project/image1.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Olomore Housing Estate Project/image1.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Olomore Housing Estate Project/image2.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Olomore Housing Estate Project/image2.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Olomore Housing Estate Project/image3.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Olomore Housing Estate Project/image3.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Olomore Housing Estate Project/image4.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Olomore Housing Estate Project/image4.jpg') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.css" />
@endsection
@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.js"></script>
@endsection
