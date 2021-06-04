@extends('layouts.app1')

@section('content')
    @include('partials.header')

    <!-- ======= Hero Section ======= -->
    @include('partials.hero-section')
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        @include('partials.about')
        <!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        @include('partials.counts-section')
        <!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        @include('partials.services-section')
        <!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        @include('partials.testimonials-section')
        <!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        @include('partials.contact')
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('partials.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
@endsection




