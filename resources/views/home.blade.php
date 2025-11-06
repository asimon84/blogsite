@extends('partials.layout')

@section('title', 'Home')

@section('content')

<!-- Hero section Start -->
<section class="quanto-hero-section overflow-hidden">
    <div class="container custom-container">
        <div class="row">
            <div class="col-12 position-relative">
                <div class="quanto-hero__content move-anim" data-delay="0.45">
                    <h1 class="title">
                        Engineering with
                        <span>
                      <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="110"
                              height="110"
                              viewBox="0 0 110 110"
                              fill="none"
                      >
                        <path
                                d="M60.5 0H49.5L53.0145 50.2065L19.9982 12.22L12.22 19.9982L50.2065 53.0145L1.44248e-06 49.5L0 60.5L50.2065 56.9856L12.22 90.0018L19.9982 97.78L53.0145 59.7935L49.5 110H60.5L56.9855 59.7935L90.0018 97.78L97.78 90.0018L59.7935 56.9855L110 60.5V49.5L59.7936 53.0145L97.78 19.9982L90.0018 12.22L56.9855 50.2065L60.5 0Z"
                                fill="currentColor"
                        />
                      </svg>
                      creativity
                    </span>
                    </h1>
                </div>
                <div class="quanto-hero__info">
                    <p class="word-anim" data-delay="0.60">
                        Whatever you can dream up, <br/>
                        together we can make it real!
                    </p>
                    <div class="client-info fade-anim" data-delay="0.60">
                        <div class="client-images">
                            <img
                                    src="{{ asset('/storage/images/hero/avatar-add.png') }}"
                                    alt="avatar-add"
                            />
                            <img
                                    src="{{ asset('/storage/images/hero/avatar-1.png') }}"
                                    alt="avatar"
                            />
                            <img
                                    src="{{ asset('/storage/images/hero/avatar-2.png') }}"
                                    alt="avatar"
                            />
                        </div>
                        <div class="client-data">
                            <h6 class="counter-item d-flex align-items-center">
                                {{--<span--}}
                                {{--class="odometer d-inline-block"--}}
                                {{--data-odometer-final=""--}}
                                {{-->.</span--}}
                                {{-->--}}
                                <em>$200m+ in Revenue</em>
                            </h6>
                            <span>Software Architect</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="row">--}}
            {{--<div class="col-lg-12">--}}
                {{--<div class="quanto-hero__thumb section-margin-top">--}}
                    {{--<div class="video-wrapper">--}}
                        {{--<video loop="" muted="" autoplay="" playsinline="">--}}
                            {{--<source--}}
                                    {{--src="https://2050today.org/wp-content/uploads/2020/07/Video-Placeholder.mp4?_=6"--}}
                                    {{--type="video/mp4"--}}
                            {{--/>--}}
                        {{--</video>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</section>
<!-- Hero section End -->

<!-- About section Start -->
<section
        class="quanto-about-section section-padding-top overflow-hidden"
>
    <div class="container custom-container">
        <div class="row justify-content-end">
            <div class="col-lg-10 col-xl-9 col-xxl-10">
                <div class="quanto-about__content">
                    <h4 class="move-anim text_invert">
                        Full LAMP stack engineer with an emphasis on
                        backend PHP and MySQL development. Front end experience
                        in React and Vue. Expert in the Laravel framework, RESTful
                        APIs, microservice architecture, and SaaS development.
                    </h4>
                    <div
                            class="about-info row-margin-top move-anim"
                            data-delay="0.5"
                    >
                        <p class="">
                            Whatever you are crafting, you need an experienced
                            veteran who approaches each project with meticulous
                            attention to detail and unwavering dedication to quality.
                        </p>
                        <a class="quanto-link-btn" href="{{ route('about') }}"
                        >Read More
                            <span>
                        <i class="fa-solid fa-arrow-right arry1"></i>
                        <i class="fa-solid fa-arrow-right arry2"></i>
                      </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About section End -->

<!-- Funfacts section Start -->
<section
        class="quanto-funfacts-section section-padding-top-bottom overflow-hidden"
>
    <div class="container custom-container">
        <div class="row">
            <div class="col-12">
                <div class="quanto-funfacts__wrapper">
                    <div
                            class="quanto-funfact-box fade-anim"
                            data-delay="0.30"
                            data-direction="right"
                    >
                        <h2 class="counter-item d-inline-flex align-items-center">
                      <span
                              class="odometer d-inline-block"
                              data-odometer-final="18"
                      >.</span
                      >
                            <em>+</em>
                        </h2>
                        <span class="funfact-info">Years of experience</span>
                    </div>
                    <div
                            class="quanto-funfact-box fade-anim"
                            data-delay="0.30"
                            data-direction="right"
                    >
                        <h2 class="counter-item d-inline-flex align-items-center">
                      <span
                              class="odometer d-inline-block"
                              data-odometer-final="200"
                      >.</span
                      >
                            <em>+</em>
                        </h2>
                        <span class="funfact-info">Million in revenue</span>
                    </div>
                    <div
                            class="quanto-funfact-box fade-anim"
                            data-delay="0.30"
                            data-direction="right"
                    >
                        <h2 class="counter-item d-inline-flex align-items-center">
                      <span
                              class="odometer d-inline-block"
                              data-odometer-final="12"
                      >.</span
                      >
                            <em>+</em>
                        </h2>
                        <span class="funfact-info">Enterprise level applications</span>
                    </div>
                    <div
                            class="quanto-funfact-box fade-anim"
                            data-delay="0.30"
                            data-direction="right"
                    >
                        <h2 class="counter-item d-inline-flex align-items-center">
                      <span
                              class="odometer d-inline-block"
                              data-odometer-final="100"
                      >.</span
                      >
                            <em>%</em>
                        </h2>
                        <span class="funfact-info"
                        >Satisfaction</span
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Funfacts section End -->

<!-- Project section Start -->
<section
        class="quanto-project-section bg-color-primary section-padding-top-bottom overflow-hidden"
>
    <div class="container custom-container">
        <div class="row g-0 gy-4 gy-md-0 justify-content-between">
            <div class="col-12 col-md-5 order-1 order-md-0">
                <div class="row g-0">
                    <div class="col-md-12 project-row-gap">
                        <div class="quanto-project-box overflow-hidden">
                            <a href="{{ route('project', ['id' => $projects[0]->id]) }}">
                                <div class="quanto-project-thumb overflow-hidden">
                                    <img
                                            src="{{ asset($projects[0]->image) }}"
                                            alt="project-thumb"
                                            class="w-100 img_reveal"
                                    />
                                </div>
                            </a>
                            <div class="quanto-project-content">
                                <h5 class="text-color-white line-clamp-1">
                                    {{--<a href="{{ route('project', ['id' => $projects[0]->id]) }}">{{ $projects[0]->name }}</a>--}}
                                    <a href="{{ $project[0]->repo }}">{{ $project[0]->name }}</a>
                                </h5>
                                <span class="quanto-project-date text-color-white">
                                  {{ $projects[0]->brief }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mx-auto project-row-gap">
                        <div class="quanto-project-box overflow-hidden">
                            <a href="{{ route('project', ['id' => $projects[1]->id]) }}">
                                <div class="quanto-project-thumb overflow-hidden">
                                    <img
                                            src="{{ asset($projects[1]->image) }}"
                                            alt="project-thumb"
                                            class="w-100 img_reveal"
                                    />
                                </div>
                            </a>
                            <div class="quanto-project-content">
                                <h5 class="text-color-white line-clamp-1">
                                    {{--<a href="{{ route('project', ['id' => $projects[1]->id]) }}">{{ $projects[1]->name }}</a>--}}
                                    <a href="{{ $project[1]->repo }}">{{ $project[1]->name }}</a>
                                </h5>
                                <span class="quanto-project-date text-color-white">
                                  {{ $projects[1]->brief }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="quanto-project-box overflow-hidden">
                            <a href="{{ route('project', ['id' => $projects[2]->id]) }}">
                                <div class="quanto-project-thumb overflow-hidden">
                                    <img
                                            src="{{ asset($projects[2]->image) }}"
                                            alt="project-thumb"
                                            class="w-100 img_reveal"
                                    />
                                </div>
                            </a>
                            <div class="quanto-project-content">
                                <h5 class="text-color-white line-clamp-1">
                                    {{--<a href="{{ route('project', ['id' => $projects[2]->id]) }}">{{ $projects[2]->name }}</a>--}}
                                    <a href="{{ $project[2]->repo }}">{{ $project[2]->name }}</a>
                                </h5>
                                <span class="quanto-project-date text-color-white">
                                  {{ $projects[2]->brief }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 order-0 order-md-1">
                <div class="row">
                    <div class="col-12">
                        <div class="quanto__header text-center text-md-end">
                            <a
                                    class="quanto-link-btn btn-dark"
                                    href="https://github.com/asimon84"
                            >View Codebase
                                <span>
                          <i class="fa-solid fa-arrow-right arry1"></i>
                          <i class="fa-solid fa-arrow-right arry2"></i>
                        </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 ms-auto project-row-gap">
                        <div class="quanto-project-box overflow-hidden">
                            <a href="{{ route('project', ['id' => $projects[3]->id]) }}">
                                <div
                                        class="quanto-project-thumb max-655 overflow-hidden"
                                >
                                    <img
                                            src="{{ asset($projects[3]->image) }}"
                                            alt="project-thumb"
                                            class="w-100 img_reveal"
                                    />
                                </div>
                            </a>
                            <div class="quanto-project-content">
                                <h5 class="text-color-white line-clamp-1">
                                    {{--<a href="{{ route('project', ['id' => $projects[3]->id]) }}">{{ $projects[3]->name }}</a>--}}
                                    <a href="{{ $project[3]->repo }}">{{ $project[3]->name }}</a>
                                </h5>
                                <span class="quanto-project-date text-color-white">
                                  {{ $projects[3]->brief }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 me-auto project-row-gap">
                        <div class="quanto-project-box overflow-hidden">
                            <a href="{{ route('project', ['id' => $projects[4]->id]) }}">
                                <div class="quanto-project-thumboverflow-hidden">
                                    <img
                                            src="{{ asset($projects[4]->image) }}"
                                            alt="project-thumb"
                                            class="w-100 img_reveal"
                                    />
                                </div>
                            </a>
                            <div class="quanto-project-content">
                                <h5 class="text-color-white line-clamp-1">
                                    <a href="{{ route('project', ['id' => $projects[4]->id]) }}">{{ $projects[4]->name }}</a>
                                    <a href="{{ $project[4]->repo }}">{{ $project[4]->name }}</a>
                                </h5>
                                <span class="quanto-project-date text-color-white">
                                  {{ $projects[4]->brief }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 ms-auto">
                        <div class="quanto-project-box overflow-hidden">
                            <a href="{{ route('project', ['id' => $projects[5]->id]) }}">
                                <div class="quanto-project-thumb overflow-hidden">
                                    <img
                                            src="{{ asset($projects[5]->image) }}"
                                            alt="project-thumb"
                                            class="w-100 img_reveal"
                                    />
                                </div>
                            </a>
                            <div class="quanto-project-content">
                                <h5 class="text-color-white line-clamp-1">
                                    {{--<a href="{{ route('project', ['id' => $projects[5]->id]) }}">{{ $projects[5]->name }}</a>--}}
                                    <a href="{{ $project[5]->repo }}">{{ $project[5]->name }}</a>
                                </h5>
                                <span class="quanto-project-date text-color-white">
                                  {{ $projects[5]->brief }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Project section End -->

{{--<!-- Serivce section Start -->--}}
{{--<section--}}
        {{--class="quanto-service-section section-padding-top-bottom overflow-hidden"--}}
{{-->--}}
    {{--<div class="container custom-container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-12 col-lg-9 col-xl-7 col-xxl-6">--}}
                {{--<div--}}
                        {{--class="quanto__header fade-anim"--}}
                        {{--data-delay="0.30"--}}
                        {{--data-direction="left"--}}
                {{-->--}}
                    {{--<h3 class="title">Build digital businesses</h3>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row g-4 row-padding-top">--}}
            {{--<div class="col-md-6 col-lg-4 col-xxl-3">--}}
                {{--<div class="quanto-service-box move-anim">--}}
                    {{--<div class="quanto-iconbox-icon">--}}
                        {{--<img--}}
                                {{--src="{{ asset('/storage/images/service/service-icon-1.svg') }}"--}}
                                {{--alt="service-icon"--}}
                        {{--/>--}}
                    {{--</div>--}}
                    {{--<div class="quanto-iconbox-data">--}}
                        {{--<div class="quanto-iconbox-data-wrapper">--}}
                            {{--<h5>RESTful APIs</h5>--}}
                            {{--<p>--}}
                                {{--Brand identity design a the have to success whether you--}}
                                {{--breath onfire quanto agency.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                        {{--<a class="quanto-link-btn" href="{{ route('services') }}#rest"--}}
                        {{-->View Details--}}
                            {{--<span>--}}
                        {{--<i class="fa-solid fa-arrow-right arry1"></i>--}}
                        {{--<i class="fa-solid fa-arrow-right arry2"></i>--}}
                      {{--</span>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 col-lg-4 col-xxl-3">--}}
                {{--<div class="quanto-service-box move-anim">--}}
                    {{--<div class="quanto-iconbox-icon">--}}
                        {{--<img--}}
                                {{--src="{{ asset('/storage/images/service/service-icon-2.svg') }}"--}}
                                {{--alt="service-icon"--}}
                        {{--/>--}}
                    {{--</div>--}}
                    {{--<div class="quanto-iconbox-data">--}}
                        {{--<div class="quanto-iconbox-data-wrapper">--}}
                            {{--<h5>SaaS Development</h5>--}}
                            {{--<p>--}}
                                {{--Brand identity design a the have to success whether you--}}
                                {{--breath onfire quanto agency.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                        {{--<a class="quanto-link-btn" href="{{ route('services') }}#saas"--}}
                        {{-->View Details--}}
                            {{--<span>--}}
                        {{--<i class="fa-solid fa-arrow-right arry1"></i>--}}
                        {{--<i class="fa-solid fa-arrow-right arry2"></i>--}}
                      {{--</span>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 col-lg-4 col-xxl-3">--}}
                {{--<div class="quanto-service-box move-anim">--}}
                    {{--<div class="quanto-iconbox-icon">--}}
                        {{--<img--}}
                                {{--src="{{ asset('/storage/images/service/service-icon-3.svg') }}"--}}
                                {{--alt="service-icon"--}}
                        {{--/>--}}
                    {{--</div>--}}
                    {{--<div class="quanto-iconbox-data">--}}
                        {{--<div class="quanto-iconbox-data-wrapper">--}}
                            {{--<h5>eCommerce</h5>--}}
                            {{--<p>--}}
                                {{--Brand identity design a the have to success whether you--}}
                                {{--breath onfire quanto agency.--}}
                            {{--</p>--}}
                        {{--</div>--}}

                        {{--<a class="quanto-link-btn" href="{{ route('services') }}#ecommerce"--}}
                        {{-->View Details--}}
                            {{--<span>--}}
                        {{--<i class="fa-solid fa-arrow-right arry1"></i>--}}
                        {{--<i class="fa-solid fa-arrow-right arry2"></i>--}}
                      {{--</span>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 col-lg-4 col-xxl-3">--}}
                {{--<div class="quanto-service-box move-anim">--}}
                    {{--<div class="quanto-iconbox-icon">--}}
                        {{--<img--}}
                                {{--src="{{ asset('/storage/images/service/service-icon-4.svg') }}"--}}
                                {{--alt="service-icon"--}}
                        {{--/>--}}
                    {{--</div>--}}
                    {{--<div class="quanto-iconbox-data">--}}
                        {{--<div class="quanto-iconbox-data-wrapper">--}}
                            {{--<h5>AI / ML</h5>--}}
                            {{--<p>--}}
                                {{--Brand identity design a the have to success whether you--}}
                                {{--breath onfire quanto agency.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                        {{--<a class="quanto-link-btn" href="{{ route('services') }}#ai"--}}
                        {{-->View Details--}}
                            {{--<span>--}}
                        {{--<i class="fa-solid fa-arrow-right arry1"></i>--}}
                        {{--<i class="fa-solid fa-arrow-right arry2"></i>--}}
                      {{--</span>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
{{--<!-- Serivce section End -->--}}

<!-- Testimonial section Start -->
{{--<section--}}
        {{--class="quanto-testimonial-section section-padding-top overflow-hidden"--}}
{{-->--}}
    {{--<div class="container custom-container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-12">--}}
                {{--<div class="quanto__header">--}}
                    {{--<h3--}}
                            {{--class="title fade-anim"--}}
                            {{--data-delay="0.30"--}}
                            {{--data-direction="right"--}}
                    {{-->--}}
                        {{--Client testimonials--}}
                    {{--</h3>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row g-4 justify-content-between">--}}
            {{--<div class="col-12 col-lg-6 col-xl-5">--}}
                {{--<!-- Thumbnail Swiper -->--}}
                {{--<div--}}
                        {{--class="swiper quanto-testimonial__thumb-slider h-100 fade-anim"--}}
                        {{--data-delay="0.30"--}}
                        {{--data-direction="right"--}}
                {{-->--}}
                    {{--<div class="swiper-wrapper">--}}
                        {{--<div class="swiper-slide">--}}
                            {{--<div--}}
                                    {{--class="testimonial-img"--}}
                                    {{--data-speed="0.8"--}}
                                    {{--style="--}}
                          {{--background-image: url("{{ asset('/storage/images/testimonial/Testimonial-1.png') }}");--}}
                            {{--"--}}
                            {{--></div>--}}
                    {{--</div>--}}
                    {{--<div class="swiper-slide">--}}
                        {{--<div--}}
                                {{--class="testimonial-img"--}}
                                {{--data-speed="0.8"--}}
                                {{--style="--}}
                          {{--background-image: url("{{ asset('/storage/images/testimonial/Testimonial-2.png') }}");--}}
                        {{--"--}}
                        {{--></div>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div--}}
                            {{--class="testimonial-img"--}}
                            {{--data-speed="0.8"--}}
                            {{--style="--}}
                          {{--background-image: url("{{ asset('/storage/images/testimonial/Testimonial-3.png') }}");--}}
                    {{--"--}}
                    {{--></div>--}}
            {{--</div>--}}
            {{--<div class="swiper-slide">--}}
                {{--<div--}}
                        {{--class="testimonial-img"--}}
                        {{--data-speed="0.8"--}}
                        {{--style="--}}
                          {{--background-image: url("{{ asset('/storage/images/testimonial/Testimonial-4.png') }}");--}}
                {{--"--}}
                {{--></div>--}}
        {{--</div>--}}
        {{--<div class="swiper-slide">--}}
            {{--<div--}}
                    {{--class="testimonial-img"--}}
                    {{--data-speed="0.8"--}}
                    {{--style="--}}
                          {{--background-image: url("{{ asset('/storage/images/testimonial/Testimonial-5.png') }}");--}}
            {{--"--}}
            {{--></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-12 col-lg-6 col-xl-6">--}}
        {{--<div class="swiper quanto-testimonial__content-slider">--}}
            {{--<div class="swiper-wrapper">--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div class="testimonial-content">--}}
                        {{--<p>--}}
                            {{--“Quanto team quickly understood our business--}}
                            {{--requirements and were proactive and flexible with our--}}
                            {{--ongoing support and developments. You can definitely--}}
                            {{--trust them for complex project requirements as they--}}
                            {{--are top-notch in their field and we can only recommend--}}
                            {{--it.”--}}
                        {{--</p>--}}
                        {{--<div class="author">--}}
                            {{--<h5 class="author-title">Jenny Bennett</h5>--}}
                            {{--<span class="author-designation"--}}
                            {{-->Senior Marketing Manager at Caya</span--}}
                            {{-->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div class="testimonial-content">--}}
                        {{--<p>--}}
                            {{--“Quanto team quickly understood our business--}}
                            {{--requirements and were proactive and flexible with our--}}
                            {{--ongoing support and developments. You can definitely--}}
                            {{--trust them for complex project requirements as they--}}
                            {{--are top-notch in their field and we can only recommend--}}
                            {{--it.”--}}
                        {{--</p>--}}
                        {{--<div class="author">--}}
                            {{--<h5 class="author-title">Jenny Bennett</h5>--}}
                            {{--<span class="author-designation"--}}
                            {{-->Senior Marketing Manager at Caya</span--}}
                            {{-->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div class="testimonial-content">--}}
                        {{--<p>--}}
                            {{--“Quanto team quickly understood our business--}}
                            {{--requirements and were proactive and flexible with our--}}
                            {{--ongoing support and developments. You can definitely--}}
                            {{--trust them for complex project requirements as they--}}
                            {{--are top-notch in their field and we can only recommend--}}
                            {{--it.”--}}
                        {{--</p>--}}
                        {{--<div class="author">--}}
                            {{--<h5 class="author-title">Jenny Bennett</h5>--}}
                            {{--<span class="author-designation"--}}
                            {{-->Senior Marketing Manager at Caya</span--}}
                            {{-->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div class="testimonial-content">--}}
                        {{--<p>--}}
                            {{--“Quanto team quickly understood our business--}}
                            {{--requirements and were proactive and flexible with our--}}
                            {{--ongoing support and developments. You can definitely--}}
                            {{--trust them for complex project requirements as they--}}
                            {{--are top-notch in their field and we can only recommend--}}
                            {{--it.”--}}
                        {{--</p>--}}
                        {{--<div class="author">--}}
                            {{--<h5 class="author-title">Jenny Bennett</h5>--}}
                            {{--<span class="author-designation"--}}
                            {{-->Senior Marketing Manager at Caya</span--}}
                            {{-->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div class="testimonial-content">--}}
                        {{--<p>--}}
                            {{--“Quanto team quickly understood our business--}}
                            {{--requirements and were proactive and flexible with our--}}
                            {{--ongoing support and developments. You can definitely--}}
                            {{--trust them for complex project requirements as they--}}
                            {{--are top-notch in their field and we can only recommend--}}
                            {{--it.”--}}
                        {{--</p>--}}
                        {{--<div class="author">--}}
                            {{--<h5 class="author-title">Jenny Bennett</h5>--}}
                            {{--<span class="author-designation"--}}
                            {{-->Senior Marketing Manager at Caya</span--}}
                            {{-->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="quanto-testimonial__navigation">--}}
            {{--<div class="quanto-testimonial__prev prev-slide">--}}
                {{--<i class="fa-solid fa-arrow-left"></i>--}}
            {{--</div>--}}
            {{--<div class="quanto-testimonial__next next-slide">--}}
                {{--<i class="fa-solid fa-arrow-right"></i>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- Testimonial section End -->

<!-- Clients section Start -->
{{--<div class="clients-area section-padding-top overflow-hidden">--}}
    {{--<div class="clients__wrapper">--}}
        {{--<div class="container custom-container">--}}
            {{--<div class="row align-items-end">--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="quanto__header text-center text-md-start">--}}
                        {{--<p--}}
                                {{--class="title mx-auto mx-md-0 fade-anim"--}}
                                {{--data-delay="0.30"--}}
                                {{--data-direction="left"--}}
                        {{-->--}}
                            {{--We worked with largest global brands--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 ps-md-0">--}}
                    {{--<div class="quanto__header logo">--}}
                        {{--<div--}}
                                {{--class="client-box fade-anim"--}}
                                {{--data-delay="0.30"--}}
                                {{--data-direction="right"--}}
                        {{-->--}}
                            {{--<img--}}
                                    {{--src="{{ asset('/storage/images/clients/logo-1.png') }}"--}}
                                    {{--alt="client-logo"--}}
                            {{--/>--}}
                        {{--</div>--}}
                        {{--<div--}}
                                {{--class="client-box fade-anim"--}}
                                {{--data-delay="0.30"--}}
                                {{--data-direction="right"--}}
                        {{-->--}}
                            {{--<img--}}
                                    {{--src="{{ asset('/storage/images/clients/logo-2.png') }}"--}}
                                    {{--alt="client-logo"--}}
                            {{--/>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-12 clients__box-wrapper">--}}
                    {{--<div class="client-box d-none">--}}
                        {{--<img--}}
                                {{--src="{{ asset('/storage/images/clients/logo-1.png') }}"--}}
                                {{--alt="client-logo"--}}
                        {{--/>--}}
                    {{--</div>--}}
                    {{--<div class="client-box d-none">--}}
                        {{--<img--}}
                                {{--src="{{ asset('/storage/images/clients/logo-2.png') }}"--}}
                                {{--alt="client-logo"--}}
                        {{--/>--}}
                    {{--</div>--}}
                    {{--<div--}}
                            {{--class="client-box fade-anim"--}}
                            {{--data-delay="0.30"--}}
                            {{--data-direction="right"--}}
                    {{-->--}}
                        {{--<img--}}
                                {{--src="{{ asset('/storage/images/clients/logo-3.png') }}"--}}
                                {{--alt="client-logo"--}}
                        {{--/>--}}
                    {{--</div>--}}
                    {{--<div--}}
                            {{--class="client-box fade-anim"--}}
                            {{--data-delay="0.30"--}}
                            {{--data-direction="right"--}}
                    {{-->--}}
                        {{--<img--}}
                                {{--src="{{ asset('/storage/images/clients/logo-4.png') }}"--}}
                                {{--alt="client-logo"--}}
                        {{--/>--}}
                    {{--</div>--}}
                    {{--<div--}}
                            {{--class="client-box fade-anim"--}}
                            {{--data-delay="0.30"--}}
                            {{--data-direction="right"--}}
                    {{-->--}}
                        {{--<img--}}
                                {{--src="{{ asset('/storage/images/clients/logo-5.png') }}"--}}
                                {{--alt="client-logo"--}}
                        {{--/>--}}
                    {{--</div>--}}
                    {{--<div--}}
                            {{--class="client-box fade-anim"--}}
                            {{--data-delay="0.30"--}}
                            {{--data-direction="right"--}}
                    {{-->--}}
                        {{--<img--}}
                                {{--src="{{ asset('/storage/images/clients/logo-6.png') }}"--}}
                                {{--alt="client-logo"--}}
                        {{--/>--}}
                    {{--</div>--}}
                    {{--<div--}}
                            {{--class="client-box fade-anim"--}}
                            {{--data-delay="0.30"--}}
                            {{--data-direction="right"--}}
                    {{-->--}}
                        {{--<img--}}
                                {{--src="{{ asset('/storage/images/clients/logo-7.png') }}"--}}
                                {{--alt="client-logo"--}}
                        {{--/>--}}
                    {{--</div>--}}
                    {{--<div--}}
                            {{--class="client-box fade-anim"--}}
                            {{--data-delay="0.30"--}}
                            {{--data-direction="right"--}}
                    {{-->--}}
                        {{--<img--}}
                                {{--src="{{ asset('/storage/images/clients/logo-8.png') }}"--}}
                                {{--alt="client-logo"--}}
                        {{--/>--}}
                    {{--</div>--}}
                    {{--<div--}}
                            {{--class="client-box d-none d-sm-block d-md-none d-lg-block border-0"--}}
                    {{--></div>--}}
                    {{--<div--}}
                            {{--class="client-box fade-anim"--}}
                            {{--data-delay="0.30"--}}
                            {{--data-direction="right"--}}
                    {{-->--}}
                        {{--<img--}}
                                {{--src="{{ asset('/storage/images/clients/logo-9.png') }}"--}}
                                {{--alt="client-logo"--}}
                        {{--/>--}}
                    {{--</div>--}}
                    {{--<div--}}
                            {{--class="client-box fade-anim"--}}
                            {{--data-delay="0.30"--}}
                            {{--data-direction="right"--}}
                    {{-->--}}
                        {{--<img--}}
                                {{--src="{{ asset('/storage/images/clients/logo-10.png') }}"--}}
                                {{--alt="client-logo"--}}
                        {{--/>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- Clients section End -->

<!-- Blog section Start -->
{{--<section--}}
        {{--class="quanto-blog-section section-padding-top-bottom overflow-hidden"--}}
{{-->--}}
    {{--<div class="container custom-container">--}}
        {{--<div class="row g-3 align-items-end">--}}
            {{--<div class="col-12 col-lg-9 col-xl-7 col-xxl-6">--}}
                {{--<div class="quanto__header text-center text-md-start">--}}
                    {{--<h3--}}
                            {{--class="title fade-anim"--}}
                            {{--data-delay="0.30"--}}
                            {{--data-direction="left"--}}
                    {{-->--}}
                        {{--Latest blog to boost your productivity--}}
                    {{--</h3>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-12 col-lg-3 col-xl-5 col-xxl-6">--}}
                {{--<div--}}
                        {{--class="quanto__headerr d-flex justify-content-center justify-content-lg-end"--}}
                {{-->--}}
                    {{--<a class="quanto-link-btn" href="{{ route('blog') }}"--}}
                    {{-->View Codebase--}}
                        {{--<span>--}}
                      {{--<i class="fa-solid fa-arrow-right arry1"></i>--}}
                      {{--<i class="fa-solid fa-arrow-right arry2"></i>--}}
                    {{--</span>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row g-4 row-padding-top">--}}
            {{--<div class="col-md-6 col-lg-4">--}}
                {{--<div--}}
                        {{--class="quanto-blog-box fade-anim"--}}
                        {{--data-delay="0.30"--}}
                        {{--data-direction="right"--}}
                {{-->--}}
                    {{--<div class="quanto-blog-thumb">--}}
                        {{--<a href="{{ route('blog') }}">--}}
                            {{--<img--}}
                                    {{--src="{{ asset('/storage/images/blog/blog-thumb-1.png') }}"--}}
                                    {{--alt="blog-thumb"--}}
                            {{--/>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="quanto-blog-content">--}}
                        {{--<h5 class="line-clamp-2">--}}
                            {{--<a href="{{ route('blog') }}"--}}
                            {{-->Reveal business opportunities with our five point brand--}}
                                {{--audit</a--}}
                            {{-->--}}
                        {{--</h5>--}}
                        {{--<span class="quanto-blog-date">March 8, 2024</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 col-lg-4">--}}
                {{--<div--}}
                        {{--class="quanto-blog-box fade-anim"--}}
                        {{--data-delay="0.45"--}}
                        {{--data-direction="right"--}}
                {{-->--}}
                    {{--<div class="quanto-blog-thumb">--}}
                        {{--<a href="{{ route('blog') }}">--}}
                            {{--<img--}}
                                    {{--src="{{ asset('/storage/images/blog/blog-thumb-2.png') }}"--}}
                                    {{--alt="blog-thumb"--}}
                            {{--/>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="quanto-blog-content">--}}
                        {{--<h5 class="line-clamp-2">--}}
                            {{--<a href="{{ route('blog') }}"--}}
                            {{-->Quanto agency revolutionizes work with the power of--}}
                                {{--ai-driven</a--}}
                            {{-->--}}
                        {{--</h5>--}}
                        {{--<span class="quanto-blog-date">March 8, 2024</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-6 col-lg-4">--}}
                {{--<div class="quanto-blog-box fade-anim" data-delay="0.60">--}}
                    {{--<div class="quanto-blog-thumb">--}}
                        {{--<a href="{{ route('blog') }}">--}}
                            {{--<img--}}
                                    {{--src="{{ asset('/storage/images/blog/blog-thumb-3.png') }}"--}}
                                    {{--alt="blog-thumb"--}}
                            {{--/>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="quanto-blog-content">--}}
                        {{--<h5 class="line-clamp-2">--}}
                            {{--<a href="{{ route('blog') }}"--}}
                            {{-->How young leaders can take charge of their professional--}}
                                {{--growth</a--}}
                            {{-->--}}
                        {{--</h5>--}}
                        {{--<span class="quanto-blog-date">March 8, 2024</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- Blog section End -->

@endsection
