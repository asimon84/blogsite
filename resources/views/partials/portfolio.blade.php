@extends('partials.layout')

@section('title', 'Portfolio')

@section('content')

    <!-- Hero section Start -->
    <section
            class="quanto-hero-section section-padding-bottom overflow-hidden"
    >
        <div class="container custom-container">
            <div class="row g-4">
                <div class="col-lg-12 col-xxl-11">
                    <div
                            class="quanto-hero-common__content move-anim"
                            data-delay="0.45"
                    >
                        <h1 class="title">
                            Creating unforgettable digital impressions
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section End -->

    <!-- Project section Start -->
    <section
            class="quanto-project-section bg-color-white section-padding-bottom"
    >
        <div class="container custom-container">
            <div class="row quanto_screenfix_right">
                <div class="col-12 pe-0">
                    <div class="swiper quanto-project__slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="quanto-project-box overflow-hidden">
                                    <a href="portfolio-details.html">
                                        <div class="quanto-project-thumb overflow-hidden">
                                            <img
                                                    src="{{ asset('storage/images/project/portfolio-gallery-1.png') }}"
                                                    alt="project-thumb"
                                                    class="w-100 img_reveal"
                                            />
                                        </div>
                                    </a>
                                    <div class="quanto-project-content">
                                        <h5 class="text-color-primary line-clamp-1">
                                            <a href="portfolio-details.html"
                                            >Kinetic Sandscapes</a
                                            >
                                        </h5>
                                        <span class="quanto-project-date text-color-primary">
                            2024
                            <i class="bi bi-dash"></i>
                            Branding
                          </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="quanto-project-box overflow-hidden">
                                    <a href="portfolio-details.html">
                                        <div class="quanto-project-thumb overflow-hidden">
                                            <img
                                                    src="{{ asset('storage/images/project/portfolio-gallery-2.png') }}"
                                                    alt="project-thumb"
                                                    class="w-100 img_reveal"
                                            />
                                        </div>
                                    </a>
                                    <div class="quanto-project-content">
                                        <h5 class="text-color-primary line-clamp-1">
                                            <a href="portfolio-details.html"
                                            >Hopscotch Payments</a
                                            >
                                        </h5>
                                        <span class="quanto-project-date text-color-primary">
                            2024
                            <i class="bi bi-dash"></i>
                            Development
                          </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="quanto-project-box overflow-hidden">
                                    <a href="portfolio-details.html">
                                        <div class="quanto-project-thumb overflow-hidden">
                                            <img
                                                    src="{{ asset('storage/images/project/portfolio-gallery-3.png') }}"
                                                    alt="project-thumb"
                                                    class="w-100 img_reveal"
                                            />
                                        </div>
                                    </a>
                                    <div class="quanto-project-content">
                                        <h5 class="text-color-primary line-clamp-1">
                                            <a href="portfolio-details.html"
                                            >Brooklyn Brewery</a
                                            >
                                        </h5>
                                        <span class="quanto-project-date text-color-primary">
                            2024
                            <i class="bi bi-dash"></i>
                            Photography
                          </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="quanto-project-box overflow-hidden">
                                    <a href="portfolio-details.html">
                                        <div class="quanto-project-thumb overflow-hidden">
                                            <img
                                                    src="{{ asset('storage/images/project/portfolio-gallery-4.png') }}"
                                                    alt="project-thumb"
                                                    class="w-100 img_reveal"
                                            />
                                        </div>
                                    </a>
                                    <div class="quanto-project-content">
                                        <h5 class="text-color-primary line-clamp-1">
                                            <a href="portfolio-details.html"
                                            >Regenerative Farming</a
                                            >
                                        </h5>
                                        <span class="quanto-project-date text-color-primary">
                            2024
                            <i class="bi bi-dash"></i>
                            Branding
                          </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="quanto-project-box overflow-hidden">
                                    <a href="portfolio-details.html">
                                        <div class="quanto-project-thumb overflow-hidden">
                                            <img
                                                    src="{{ asset('storage/images/project/portfolio-gallery-5.png') }}"
                                                    alt="project-thumb"
                                                    class="w-100 img_reveal"
                                            />
                                        </div>
                                    </a>
                                    <div class="quanto-project-content">
                                        <h5 class="text-color-primary line-clamp-1">
                                            <a href="portfolio-details.html"
                                            >Stories Worthwhile</a
                                            >
                                        </h5>
                                        <span class="quanto-project-date text-color-primary">
                            2024
                            <i class="bi bi-dash"></i>
                            UI/UX Design
                          </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="quanto-project-box overflow-hidden">
                                    <a href="portfolio-details.html">
                                        <div class="quanto-project-thumb overflow-hidden">
                                            <img
                                                    src="{{ asset('storage/images/project/portfolio-gallery-6.png') }}"
                                                    alt="project-thumb"
                                                    class="w-100 img_reveal"
                                            />
                                        </div>
                                    </a>
                                    <div class="quanto-project-content">
                                        <h5 class="text-color-primary line-clamp-1">
                                            <a href="portfolio-details.html"
                                            >Fintech Accelerator</a
                                            >
                                        </h5>
                                        <span class="quanto-project-date text-color-primary">
                            2024
                            <i class="bi bi-dash"></i>
                            Development
                          </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                            class="quanto-project__slider-navigation row-padding-top d-flex justify-content-center align-items-center gap-3"
                    >
                        <div class="prev-btn">
                            <i class="fa-solid fa-arrow-left"></i>
                        </div>
                        <div class="next-btn">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project section End -->

@endsection