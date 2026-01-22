@extends('partials.layout')

@section('title', 'Project')

@section('content')
    <!-- Hero section Start -->
    <section class="quanto-hero-common-section section-padding-bottom overflow-hidden">
        <div class="container custom-container">
            <div class="row g-4">
                <div class="col-lg-12 col-xxl-11">
                    <div class="quanto-hero-common__content move-anim" data-delay="0.45">
                        <h1 class="title">{{ $project->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section End -->

    <!-- Image section Start -->
    <div class="quanto-image-area style-2 overflow-hidden">
        <div class="container custom-container position-relative">
            <a href="#quanto-portfolio-details-section" class="scroll-down section-link">
                Scroll down
                <img src="{{ asset('storage/images/icons/scroll-down.svg') }}" alt="Scroll down"/>
            </a>
            <div class="row">
                <div class="col-12">
                    <div class="quanto-hero__thumb text-end">
                        <img src="{{ asset($project->image) }}" alt="Image Area" data-speed="0.8" class="d-block w-100"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Image section End -->

    <!-- Portfolio Details section Start -->
    <div id="quanto-portfolio-details-section" class="quanto-portfolio-details-section section-padding-top-bottom">
        <div class="container custom-container">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-4">
                    <h2 class="portfolio-details__title move-anim" data-delay="0.45">
                        Project overview
                    </h2>
                </div>
                <div class="col-lg-6">
                    <div class="portfolio-details__content">
                        <p class="move-anim" data-delay="0.45">
                            {!! $project->description !!}
                        </p>
                        <a class="quanto-link-btn" href="{{ $project->repo }}">
                            View Code Repository
                            <span>
                                <i class="fa-solid fa-arrow-right arry1"></i>
                                <i class="fa-solid fa-arrow-right arry2"></i>
                            </span>
                        </a>
                    </div>
                    {{--<div class="portfolio-details__info row-padding-top">--}}
                        {{--<div class="portfolio-details-box fade-anim" data-delay="0.2">--}}
                            {{--<span class="title">Category</span>--}}
                            {{--<h6 class="info">Branding</h6>--}}
                        {{--</div>--}}
                        {{--<div class="portfolio-details-box fade-anim" data-delay="0.4">--}}
                            {{--<span class="title">Service</span>--}}
                            {{--<h6 class="info">Brand Strategy</h6>--}}
                        {{--</div>--}}
                        {{--<div class="portfolio-details-box fade-anim" data-delay="0.6">--}}
                            {{--<span class="title">Date</span>--}}
                            {{--<h6 class="info">March 6, 2024</h6>--}}
                        {{--</div>--}}
                        {{--<div class="portfolio-details-box fade-anim" data-delay="0.8">--}}
                            {{--<span class="title">Client</span>--}}
                            {{--<h6 class="info">MirrorTheme</h6>--}}
                        {{--</div>--}}
                        {{--<div class="portfolio-details-box fade-anim" data-delay="1">--}}
                            {{--<span class="title">Software</span>--}}
                            {{--<h6 class="info">Webflow, Figma</h6>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
            {{--<div class="row g-3 g-lg-4 section-padding-top">--}}
                {{--<div class="col-sm-6 overflow-hidden">--}}
                    {{--<img--}}
                            {{--src="{{ asset('storage/images/portfolio-details/portfolio-details-fig-1.png') }}"--}}
                            {{--alt="portfolio-details-fig"--}}
                            {{--data-speed="0.8"--}}
                            {{--class="w-100"--}}
                    {{--/>--}}
                {{--</div>--}}
                {{--<div class="col-sm-6 overflow-hidden">--}}
                    {{--<img--}}
                            {{--src="{{ asset('storage/images/portfolio-details/portfolio-details-fig-2.png') }}"--}}
                            {{--alt="portfolio-details-fig"--}}
                            {{--data-speed="0.8"--}}
                            {{--class="w-100"--}}
                    {{--/>--}}
                {{--</div>--}}
                {{--<div class="col-12 overflow-hidden">--}}
                    {{--<img--}}
                            {{--src="{{ asset('storage/images/portfolio-details/portfolio-details-fig-3.png') }}"--}}
                            {{--alt="portfolio-details-fig"--}}
                            {{--data-speed="0.8"--}}
                            {{--class="w-100"--}}
                    {{--/>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <!-- Portfolio Details section End -->

@endsection