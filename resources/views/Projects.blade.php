@extends('layouts.app')

@section('content')

    <x-header pageheader="{{ $innertitle }}" subpageheader=""
        pagedescription="Take a look at our recently completed projects executed with a touch of excellence and professionalism." />

    <div class="projects my-5">
        <div class="container">
            <div class="row">
                <x-project aos="0" folder="Oral Estate Project" description="5KVA Complete Solar System at Oral Estate."
                    image="image2" />

                <x-project aos="50" folder="Buena Vista Estate Project 1"
                    description="20KVA Complete Solar System at Buena Vista Estate (Project 1)." image="image3" />

                <x-project aos="100" folder="Lekki County Homes Project"
                    description="5KVA Complete System at Lekki County Homes." image="image3" />

                <x-project aos="150" folder="Buena Vista Estate Project 2"
                    description="20KVA Complete Solar System at Buena Vista Estate (Project 2)." image="image1" />

                <x-project aos="200" folder="Olusegun Obasanjo Hilltop Project"
                    description="5KVA Inverter System at Olusegun Obasanjo Hilltop." image="image2" />

                <x-project aos="250" folder="Olomore Housing Estate Project"
                    description="5 KVA Complete Solar System at Olomore Housing Estate." image="image1" />

                <x-project aos="300" folder="Patheon Smart Terrace Project"
                    description="15KVA Complete Solar System at Patheon Smart Terrace Estate." image="image1" />
            </div>

        </div>
    </div>

    <x-cta cta="You can also enjoy this too. Take the first step towards safe and steady electricity." page="Contact Us" />

@endsection
