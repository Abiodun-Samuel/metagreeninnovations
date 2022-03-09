@extends('layouts.app')

@section('content')

    <x-header pageheader="{{ $innertitle }}" subpageheader=""
        pagedescription="We'd love to hear about your project and help you get started, Let's talk about how we can help you achieve your goals." />

    <div class="contact">
        <div class="container">
            <div class="row my-5">

                <div class="col-lg-7 my-3 d-flex align-items-stretch">

                    <form action="{{ route('sendmail') }}" method="POST" role="form" class="contact-form"
                        autocomplete="on" enctype="application/x-www-form-urlencoded">
                        @csrf

                        @if (Session::has('error'))
                            <div class="alert alert-danger">
                                <p> {{ Session::get('error') }} </p>
                            </div>
                        @endif

                        @if ($errors->all())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <ul class="list-unstyled">
                                        <li>
                                            <p>{{ $error }}</p>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        @endif

                        <em>* fields are required</em>
                        {{-- Name and Email --}}
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="name">Name * </label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="name"
                                    min="3" required />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">Email * </label>
                                <input type="email" class="form-control" value="{{ old('email') }}" name="email"
                                    id="email" required />
                            </div>
                        </div>

                        <div class="form-row">

                            {{-- Subject and phone --}}
                            <div class="form-group col-md-6">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" value="{{ old('subject') }}" name="subject"
                                    id="subject" min="2" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="phone">Your Phone *</label>
                                <input type="tel" class="form-control" value="{{ old('phone') }}" name="phone" id="phone"
                                    required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">How can we help you? *</label>
                            <textarea class="form-control" value="{{ old('message') }}" name="message" rows="5"
                                required></textarea>
                        </div>

                        <div class="form-group col-lg-12 my-3">
                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}">
                            </div>
                        </div>

                        <div class="text-center">
                            <button class="submit" type="submit"> SEND MESSAGE</button>
                        </div>

                        <p class="my-3">This site is protected by reCAPTCHA and the Google <a
                                href="{{ url('https://policies.google.com/privacy') }}">Privacy Policy</a> and <a
                                href="{{ url('https://policies.google.com/terms') }}">Terms of Service apply</a>.
                        </p>
                    </form>
                </div>

                <div class="col-lg-5 my-3 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1.3em" height="1.3em"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                    <g fill="none" stroke="#F5F5F5" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2">
                                        <circle cx="16" cy="11" r="4" />
                                        <path d="M24 15c-3 7-8 15-8 15s-5-8-8-15s2-13 8-13s11 6 8 13z" />
                                    </g>
                                    <rect x="0" y="0" width="32" height="32" fill="rgba(0, 0, 0, 0)" />
                                </svg>
                            </i>
                            <h4>Location:</h4>
                            <p>5, Taiwo Aroyeun St, Goshen Estate, Abeokuta, Ogun State, Nigeria.</p>
                        </div>

                        <div class="email">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1.3em" height="1.3em"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                    <path
                                        d="M28 6H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2zm-2.2 2L16 14.78L6.2 8zM4 24V8.91l11.43 7.91a1 1 0 0 0 1.14 0L28 8.91V24z"
                                        fill="#f5f5f5" />
                                    <rect x="0" y="0" width="32" height="32" fill="none" />
                                </svg>
                            </i>
                            <h4>Email:</h4>
                            <p>contact@metagreeninnovations.com</p>
                        </div>

                        <div class="phone">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1.25em" height="1.25em"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path
                                        d="M17.256 12.253c-.096-.667-.611-1.187-1.274-1.342c-2.577-.604-3.223-2.088-3.332-3.734C12.193 7.092 11.38 7 10 7s-2.193.092-2.65.177c-.109 1.646-.755 3.13-3.332 3.734c-.663.156-1.178.675-1.274 1.342l-.497 3.442C2.072 16.907 2.962 18 4.2 18h11.6c1.237 0 2.128-1.093 1.953-2.305l-.497-3.442zM10 15.492c-1.395 0-2.526-1.12-2.526-2.5s1.131-2.5 2.526-2.5s2.526 1.12 2.526 2.5s-1.132 2.5-2.526 2.5zM19.95 6c-.024-1.5-3.842-3.999-9.95-4C3.891 2.001.073 4.5.05 6s.021 3.452 2.535 3.127c2.941-.381 2.76-1.408 2.76-2.876C5.345 5.227 7.737 4.98 10 4.98s4.654.247 4.655 1.271c0 1.468-.181 2.495 2.76 2.876C19.928 9.452 19.973 7.5 19.95 6z"
                                        fill="#f5f5f5" <rect x="0" y="0" width="32" height="32" fill="none" />
                                </svg>
                            </i>
                            <h4>Call:</h4>
                            <p>+2348062175217, +2349015016567</p>
                        </div>

                        <div style="width: 100%">
                            <iframe loading="lazy" width="100%" height="200" frameborder="0" scrolling="yes"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Goshen%20Estate,%20asero%20Abeokuta,%20Ogun%20State,%20Nigeria+(My%20Business%20Name)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            </iframe>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection
