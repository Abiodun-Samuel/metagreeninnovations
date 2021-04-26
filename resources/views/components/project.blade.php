    <div class="col-lg-4 col-md-6 col-sm-6 d-flex align-items-stretch my-4" data-aos="fade-up"
        data-aos-delay="{{ $aos }}">

        <div class="card">
            <div class="card-pix">
                <img loading="lazy" src="{{ url('images/projects/' . $folder . '/' . $image . '.jpg') }}"
                    class="card-img-top" alt="{{ $folder }}">
            </div>
            <div class="card-body">
                <h3 class="card-title">Design, Supply & Installation</h3>
                <p class="card-text"> {{ $description }} </p>
                <a href="{{ url('/projects/' . $folder) }}"> Read More</a>
            </div>
        </div>

    </div>
