@extends('partials.layout')

@section('title', 'Blog')

@section('content')

    @php
        $date = new DateTime($blog->created_at);
    @endphp

    <!-- Blog Details section Start -->
    <section class="blog-page-sec blog-detail-page section-padding-bottom">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-item-wrapper">
                        <div class="blog-item blog-item-details">
                            <div class="row justify-content-center row-padding-bottom">
                                <div class="col-xl-9 col-xxl-9">
                                    <div
                                            class="title-box blog-title move-anim"
                                            data-delay="0.45"
                                    >
                                        <h2>
                                            <a href="#">{{ $blog->title }}</a>
                                        </h2>
                                    </div>
                                    <div class="meta-box">
                                        <ul class="custom-ul meta-info d-flex">
                                            <li>
                                                <span><a href="#">{{ $date->format('F j, Y') }}</a></span>
                                            </li>
                                            <li>
                                                <span><a href="#">{{ $blog->category }}</a></span>
                                            </li>
                                            <li>
                                                <span><a href="#">by {{ $blog->author }}</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="img-box overflow-hidden">
                                <img
                                        src="{{ asset($blog->image) }}"
                                        alt="blog"
                                        data-speed="0.8"
                                        class="w-100 d-block"
                                />
                            </div>
                            <div class="content-box row-padding-top">
                                <div class="social-links">
                                    <ul class="custom-ul">
                                        <li>
                                            <a href="https://x.com/AlexanderS21097" target="_blank">
                                                <i class="fab fa-x-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/ajsimon19843/" target="_blank">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/alexander-simon-b1564a29a/" target="_blank">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row justify-content-center social-links-scroll position-relative">
                                    <div class="col-xl-9 col-xxl-8">
                                        <div class="blog-body">
                                            {!! $blog->content !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details section Start -->

    <!-- Blog section Start -->
    <section
            class="quanto-blog-section section-padding-bottom overflow-hidden"
    >
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div
                            class="quanto__header text-center text-md-start row-padding-bottom"
                    >
                        <h3
                                class="title fade-anim"
                                data-delay="0.30"
                                data-direction="left"
                        >
                            More articles
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gy-5">
                <div class="col-md-6 col-lg-4">
                    <div
                            class="quanto-blog-box fade-anim"
                            data-delay="0.45"
                            data-direction="right"
                    >
                        <div class="quanto-blog-thumb">
                            <a href="./blog-details.html">
                                <img
                                        src="./assets/images/blog/blog-thumb-5.png"
                                        alt="blog-thumb"
                                />
                            </a>
                        </div>
                        <div class="quanto-blog-content">
                            <h5 class="line-clamp-2">
                                <a href="./blog-details.html"
                                >Common UX pain in design related projects you must
                                    know</a
                                >
                            </h5>
                            <span class="quanto-blog-date">March 8, 2024</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="quanto-blog-box fade-anim" data-delay="0.60">
                        <div class="quanto-blog-thumb">
                            <a href="./blog-details.html">
                                <img
                                        src="./assets/images/blog/blog-thumb-6.png"
                                        alt="blog-thumb"
                                />
                            </a>
                        </div>
                        <div class="quanto-blog-content">
                            <h5 class="line-clamp-2">
                                <a href="./blog-details.html"
                                >How to bring fold to your startup company with
                                    Quanto</a
                                >
                            </h5>
                            <span class="quanto-blog-date">March 8, 2024</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div
                            class="quanto-blog-box fade-anim"
                            data-delay="0.30"
                            data-direction="right"
                    >
                        <div class="quanto-blog-thumb">
                            <a href="./blog-details.html">
                                <img
                                        src="./assets/images/blog/blog-thumb-7.png"
                                        alt="blog-thumb"
                                />
                            </a>
                        </div>
                        <div class="quanto-blog-content">
                            <h5 class="line-clamp-2">
                                <a href="./blog-details.html"
                                >Simple guide to retrieval auto generated read content
                                    models</a
                                >
                            </h5>
                            <span class="quanto-blog-date">March 8, 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section End -->

@endsection