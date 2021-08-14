@extends('layouts.app')

@section('content')
    <x-header pageheader="{{ $innertitle }}" subpageheader=""
        pagedescription="Take a look at our recently completed projects executed with a touch of excellence and professionalism." />

    <div class="projects my-5">
        <div class="container">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex align-items-stretch my-4" data-aos="fade-up">
                        <div class="card">
                            <div class="card-pix">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img loading="lazy"
                                                src="{{ url('storage/images/projects/' . $project->image_main) }}"
                                                class="img-fluid bg-secondary" alt="our project" title="Our Projects"
                                                height="350" width="500">
                                        </div>
                                        @foreach (json_decode($project->images) as $img)
                                            <div class="carousel-item">
                                                <img loading="lazy" src="{{ url('storage/images/projects/' . $img) }}"
                                                    class="img-fluid bg-secondary" alt="our project" title="Our Projects"
                                                    height="350" width="500">
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>

                            <div class="card-body">
                                <h3 class="card-title">{{ $project->title }}</h3>
                                <p class="card-text"> {{ $project->sub_title }} </p>
                                <a href="{{ route('admin.show', $project->slug) }}"> Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <x-cta cta="You can also enjoy this too. Take the first step towards safe and steady electricity." page="Contact Us" />

@endsection
