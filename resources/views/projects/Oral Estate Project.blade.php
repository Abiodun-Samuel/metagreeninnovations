@extends('layouts.app')

@section('content')

    <x-header pageheader="Project" subpageheader=" | Oral Estate Project" />


    <div class="projectdetails">


        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 my-2">
                    <div class="projectdetails">

                        <h4>Project Details</h4>

                        <hr>

                        <p> <b>Title:</b> <span>Design, Supply and Installation</span> </p>
                        <p> <b>Location: </b> <span> Oral Estate, Lekki, Lagos State, Nigeria.</span> </p>
                        <p> <b>Date: </b> <span> November 2020.</span> </p>
                        <p> <b>Components: </b>
                            <span>
                                <ul class="ml-5">
                                    <li>5KVA Inverter.</li>
                                    <li>4 Units of 200AH Tubular Batteries.</li>
                                    <li>8 Modules of 280Watts Solar Panels.</li>
                                    <li>1 Unit of 80Amps MPPT Charge Controller.</li>
                                    <li> Other Complimentary Assessories.</li>
                                </ul>
                            </span>
                        </p>
                    </div>


                </div>

                <div class="col-lg-8 col-md-7 my-2">
                    <h4>Project Gallery</h4>
                    <a class="venobox" data-gall="gallery01"
                        href="{{ url('/images/projects/buena-vista-estate/image1.jpg') }}"><img class="img-fluid"
                            src="{{ url('/images/projects/buena-vista-estate/image-small.jpg') }}"></a>
                    <a class="venobox" data-gall="gallery01"
                        href="{{ url('/images/projects/buena-vista-estate/image2.jpg') }}"><img
                            src="{{ url('/images/projects/buena-vista-estate/image-small.jpg') }}"></a>
                </div>
            </div>
        </div>

    </div>


@endsection
