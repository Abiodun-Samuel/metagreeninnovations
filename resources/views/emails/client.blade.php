@component('mail::message')

Testimonial posted by {{$data[0]}}

<p>"{{$data[1]}}"</p> <br>

<a href="{{route('admin.home')}}">Admin Panel</a>

{{ config('app.name') }}
@endcomponent
