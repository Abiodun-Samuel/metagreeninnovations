@extends('layouts.app')

@section('content')

    <div class="innerheader py-5">
        <div class="container py-5">
            <h3> <a href="{{ route('home') }}">Home</a> | <a href="{{ route('projects') }}"> Project </a> |
                <span>{{ $project->sub_title }}</span>
            </h3>
        </div>
    </div>

    <div class="projectdetails my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 my-4">
                    <div class="projectdetails">

                        <h4>Project Details</h4>

                        <hr>

                        <p> <b>Title:</b> <span> {{ $project->title }}</span> </p>
                        <p> <b>Location: </b> <span> {{ $project->location }} </span> </p>
                        <p> <b>Date: </b> <span> {{ $project->date }} </span> </p>
                        <p> <b>Components: </b>
                            <span>
                                <ul class="ml-5">
                                    @for ($i = 0; $i < count($components); $i++)
                                        <li>{{ $components[$i] }}</li>
                                    @endfor
                                </ul>
                            </span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-7 my-4">
                    <h4>Project Gallery</h4>
                    <div class="project-gallery">

                        @for ($i = 0; $i < count($images); $i++)
                            <a class="venobox" data-gall="gallery01"
                                href="{{ url('storage/images/projects/' . $images[$i]) }}">
                                <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary" src="{{ url('storage/images/projects/' . $images[$i]) }}">
                            </a>
                        @endfor

                        {{-- <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Buena Vista Estate Project 1/image2.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Buena Vista Estate Project 1/image2.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Buena Vista Estate Project 1/image3.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Buena Vista Estate Project 1/image3.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Buena Vista Estate Project 1/image4.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Buena Vista Estate Project 1/image4.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Buena Vista Estate Project 1/image5.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Buena Vista Estate Project 1/image5.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Buena Vista Estate Project 1/image8.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Buena Vista Estate Project 1/image8.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Buena Vista Estate Project 1/image6.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Buena Vista Estate Project 1/image6.jpg') }}">
                        </a>
                        <a class="venobox" data-gall="gallery01"
                            href="{{ url('/images/projects/Buena Vista Estate Project 1/image7.jpg') }}">
                            <img loading="lazy" width="500" height="350" class="img-fluid bg-secondary"
                                src="{{ url('/images/projects/Buena Vista Estate Project 1/image7.jpg') }}">
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.css" />
@endpush
@push('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.js"></script>
@endpush
