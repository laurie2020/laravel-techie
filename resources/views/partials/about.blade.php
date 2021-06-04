<section id="about" class="about">
    <div class="container">

        @foreach ($abouts as $about)

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ asset('img/' . $about->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <h3>{{ $about->titre }}</h3>
                    <p class="fst-italic">
                        {{$about->description}}
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> {{$about->paragraphe1}}</li>
                        <li><i class="bi bi-check-circle"></i> {{$about->paragraphe2}}</li>
                        <li><i class="bi bi-check-circle"></i> {{$about->paragraphe3}}</li>
                    </ul>
                    <a href="#" class="read-more">Read More <i class="bi bi-long-arrow-right"></i></a>
                </div>
            </div>
        @endforeach

    </div>
</section>
