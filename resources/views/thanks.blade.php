@extends('layouts.app')

@section('content')
    <section id="thank">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 py-5">
                    <img loading="lazy" class="img-fluid" src="{{ url('/images/thank.png') }}" alt="Thank You">

                    <P>Hi, <span>{{ $user ?? '' }}</span></P>
                    <p>{{ $message }}</p>

                    <div class="my-4">
                        <a class="mybtn yellow" href="{{ url('/') }} "> <i><svg aria-hidden="true" focusable="false"
                                    width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11H6.414l5.293-5.293l-1.414-1.414L2.586 12l7.707 7.707l1.414-1.414L6.414 13H21z"
                                        fill="#17202A" />
                                </svg></i>Homepage</a>
                    </div>

                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>

@endsection
