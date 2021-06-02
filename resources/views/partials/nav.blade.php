<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="index.html">Techie</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('admin') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('chiffre.index') }}">Chiffres</a></li>
                <li><a class="nav-link scrollto" href="{{ route('service.index') }}">Services</a></li>
                <li><a class="nav-link scrollto " href="{{ route('testimonial.index') }}">Testimonials</a></li>
                <li><a class="nav-link scrollto" href="{{ route('personne.index') }}">Personne</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
