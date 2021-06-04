<section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
        @foreach ($homes as $home)

            <div class="row justify-content-center">
                <div
                    class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>{{ $home->titre }}</h1>
                    <h2>{{ $home->description }}</h2>
                    <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ asset('img/' . $home->image) }}" class="img-fluid animated" alt="">
                </div>
            </div>
        @endforeach
    </div>

</section>
