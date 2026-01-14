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

@endsection