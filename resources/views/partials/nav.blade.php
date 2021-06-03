<header id="header" class="fixed-top bg-danger ">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="{{ route('admin') }}">Admin</a></h1>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('chiffre.index') }}">Chiffres</a></li>
                <li><a class="nav-link scrollto" href="{{ route('service.index') }}">Services</a></li>
                <li><a class="nav-link scrollto " href="{{ route('testimonial.index') }}">Testimonials</a></li>
                <li><a class="nav-link scrollto" href="{{ route('personne.index') }}">Personne</a></li>
                <li><a class="nav-link scrollto" href="/">Techie WebSite</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
