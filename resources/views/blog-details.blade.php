@extends('partials.layout')

@section('title', $blog->title)

@section('content')

    <!-- Hero section Start -->
    <section
            class="quanto-hero-blog-section section-padding-bottom overflow-hidden"
    >
        <div class="container custom-container">
            <div class="row g-4">
                <div class="col-lg-12 col-xxl-11">
                    <div
                            class="quanto-hero-blog__content move-anim"
                            data-delay="0.45"
                    >
                        <h1 class="title">{{ $blog->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section End -->

@endsection