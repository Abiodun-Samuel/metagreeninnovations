@extends('layouts.app')

@section('content')
    <section id="thank">
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 py-5">
                    <img class="img-fluid" src="{{ url('/images/thank.png') }}" alt="we have received your messsage">

                    <P>Hi, <span>{{ $user }}</span></P>
                    <p> Thank you for contacting us, we'd get back to you promptly.</p>

                    <a class="mybtn yellow my-3" href="{{ url('/') }} "> <i><svg aria-hidden="true" focusable="false"
                                width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path
                                    d="M21 11H6.414l5.293-5.293l-1.414-1.414L2.586 12l7.707 7.707l1.414-1.414L6.414 13H21z" />
                            </svg></i>Homepage</a>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </section>

@endsection
