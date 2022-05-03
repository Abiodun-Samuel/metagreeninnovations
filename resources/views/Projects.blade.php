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
                                <h3 class="card-title mb-1">{{ $project->title }}</h3>
                                <span class="pb-3"> Posted {{ $project->updated_at->diffForHumans() }} </span>
                                <p class="card-text my-2"> {{ $project->sub_title }} </p>
                                <a href="{{ route('admin.show', $project->slug) }}"> Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 my-2 text-center">
                    <img src={{ asset('/images/contact.jpg') }} alt="contact us" class="img-fluid" loading="lazy">
                </div>
                <div class="col-lg-6 col-md-6 my-2">
                    <div class="d-flex justify-content-center align-items-center pt-5">
                        <div class="shadow-lg cta-text p-5 rounded">
                            <p class="mb-5"> You can also enjoy this too. Take the first step towards safe and
                                steady electricity.</p>
                            <a class="cta_btn" href="{{ route('contact') }}"> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
