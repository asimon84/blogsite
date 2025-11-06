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
                            Sample Projects
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
                            @foreach($projects as $project)
                                <div class="swiper-slide">
                                    <div class="quanto-project-box overflow-hidden">
                                        <a href="{{ route('project', ['id' => $project->id]) }}">
                                            <div class="quanto-project-thumb overflow-hidden">
                                                <img
                                                        src="{{ asset($project->image) }}"
                                                        alt="project-thumb"
                                                        class="w-100 img_reveal"
                                                />
                                            </div>
                                        </a>
                                        <div class="quanto-project-content">
                                            <h5 class="text-color-primary line-clamp-1">
                                                {{--<a href="{{ route('project', ['id' => $project->id]) }}">{{ $project->name }}</a>--}}
                                                <a href="{{ $project->repo }}">{{ $project->name }}</a>
                                            </h5>
                                            <span class="quanto-project-date text-color-primary">
                                                {{ $project->brief }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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