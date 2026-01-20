@extends('partials.layout')

@section('title', 'Blogs')

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
                        <h1 class="title">Blogs and Videos</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section End -->

    <!-- Blog section Start -->
    <section
            class="quanto-blog-section section-padding-bottom overflow-hidden"
    >
        <div class="container custom-container">
            <div class="row g-4 g-xl-6 quanto-blog3__row overflow-hidden">
                @foreach($blogs as $blog)
                    @php
                        $date = new DateTime($blog->created_at);
                        $link = './blog/' . $blog->id;
                    @endphp
                    <div class="col-xl-6">
                        <div class="quanto-blog-box style-2 border-bottom-style fade-anim" data-delay="0.30" data-direction="right">
                            <div class="quanto-blog-content">
                                <span class="quanto-blog-date">{{ $date->format('F j, Y') }}</span>
                                <h5 class="line-clamp-3">
                                    <a href="{{ $link }}">
                                        {{ $blog->title }}
                                    </a>
                                </h5>

                                <a class="quanto-link-btn" href="{{ $link }}">
                                    Read more
                                    <span>
                                        <i class="fa-solid fa-arrow-right arry1"></i>
                                        <i class="fa-solid fa-arrow-right arry2"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="quanto-blog-thumb">
                                <a href="{{ $link }}" class="d-inline-block overflow-hidden">
                                    <img src="{{ asset($blog->thumb) }}" alt="blog-thumb" class="w-100"/>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row row-padding-top">
                <div class="col-12">
                    <div class="blog-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end align-items-center custom-ul">
                                @for($i = 0; $i <= ceil($count / $limit); $i++)
                                    @php
                                        $active = ($page === ($i + 1)) ? 'active' : '';
                                    @endphp
                                    <li class="page-item">
                                        <a class="page-link {{ $active }}" href="#">{{ ($i + 1) }}</a>
                                    </li>
                                @endfor
                                <li class="page-item">
                                    <a class="page-link next" href="#">
                                        Next
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section End -->

@endsection