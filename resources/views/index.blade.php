@extends('layouts.principal')
@section('content')

    <div class="header" id="header-top">

        <div class="wrap">
            @include('menu')

            <div class="header-bottom section" id="section-1">
                @include('description')
            </div>
        </div>

    </div>
    <!-- End Header -->

    <div class="main">

        <!-- About Section -->
        <div class="about-section section" id="section-2">
            @include('about')

        </div>

        <!-- Services Section -->
        <div class="services-section section" id="section-3">
            @include('ourservices')

        </div>

        <!-- Our Works Section -->
        <div class="works-section section" id="section-4">
            @include('ourwork')

        </div>
    </div>

    <!-- Contact -->
    <div class="contact-section section" id="section-5">
        @include('contacto')

    </div>
    <!-- End Contact -->

@endsection