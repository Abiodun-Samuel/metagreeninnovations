@extends('layouts.app')

@section('content')

    <x-header pageheader="{{ $innertitle }}" subpageheader="" pagedescription="Take a look at our recently completed projected executed with a touch of excellence and professionalism" />

    <div class="projects my-5">
        <div class="container">
            <div class="row">
                <x-project aos="0" folder="Oral Estate Project" description="5KVA complete at Oral Estate." image="qwert" />
                <x-project aos="0" folder="5KVA complete solar" description="5KVA complete at Oral Estate." image="qwert" />
                <x-project aos="0" folder="5KVA complete solar" description="5KVA complete at Oral Estate." image="qwert" />
                <x-project aos="0" folder="5KVA complete solar" description="5KVA complete at Oral Estate." image="qwert" />
                <x-project aos="0" folder="5KVA complete solar" description="5KVA complete at Oral Estate." image="qwert" />
                <x-project aos="0" folder="5KVA complete solar" description="5KVA complete at Oral Estate." image="qwert" />
                <x-project aos="0" folder="5KVA complete solar" description="5KVA complete at Oral Estate." image="qwert" />
            </div>
        </div>
    </div>

    @include('layouts.cta-layout')

@endsection
