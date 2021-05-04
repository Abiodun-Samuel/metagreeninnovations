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
                        <p> <b>Location: </b> <span>Buena Vista Estate, Lekki, Lagos State Nigeria. </span> </p>
                        <p> <b>Date: </b> <span> March 2021.</span> </p>
                        <p> <b>Components: </b>
                            <span>
                                <ul class="ml-5">
                                    <li>2 Units of 10KVA Inverter (20KVA).</li>
                                    <li>24 Units of 200AH Tubular Batteries.</li>
                                    <li>50 Modules of 280Watts Solar Panels.</li>
                                    <li>2 Units of 120Amps MPPT Charge Controller.</li>
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
                            href="{{ url('/images/projects/Buena Vista Estate Project 2/image1.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Buena Vista Estate Project 2/image1.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Buena Vista Estate Project 2/image2.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Buena Vista Estate Project 2/image2.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Buena Vista Estate Project 2/image3.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Buena Vista Estate Project 2/image3.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Buena Vista Estate Project 2/image4.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Buena Vista Estate Project 2/image4.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Buena Vista Estate Project 2/image5.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Buena Vista Estate Project 2/image5.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Buena Vista Estate Project 2/image6.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Buena Vista Estate Project 2/image6.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Buena Vista Estate Project 2/image7.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Buena Vista Estate Project 2/image7.jpg') }}">
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
