@extends('partials.layout')

@section('title', 'About')

@section('content')

    <!-- Hero section Start -->
    <section
            class="quanto-hero-faq-section section-padding-bottom overflow-hidden"
    >
        <div class="container custom-container">
            <div class="row g-4">
                <div class="col-lg-12 col-xxl-11">
                    <div
                            class="quanto-hero-faq__content move-anim"
                            data-delay="0.45"
                    >
                        <h1 class="title">About</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section End -->

    <!-- Video section Start -->
    <div class="quanto-video-area style-2 overflow-hidden">
        <div class="container custom-container position-relative">
            <a href="#quanto-faq-area" class="scroll-down section-link">
                Scroll down
                <img
                        src="./assets/images/icons/scroll-down.svg"
                        alt="Scroll down"
                />
            </a>
            <div class="row">
                <div class="col-12">
                    <div class="quanto-hero__thumb text-center">
                        <img
                                src="./assets/images/hero/common-hero-thumb-6.png"
                                alt="hero-thumb"
                                data-speed="0.8"
                                class="w-100"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video section End -->

    <!-- FAQ section Start -->
    <section
            id="quanto-faq-area"
            class="quanto-faq-area section-padding-top-bottom bg-color-white"
    >
        <div class="container custom-container">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-6 col-xl-5 col-xxl-4 gsap-sticky">
                    <div class="quanto__header">
                        <h3
                                class="title fade-anim"
                                data-delay="0.30"
                                data-direction="left"
                        >
                            Questions and answers
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 col-xxl-7">
                    <div
                            class="accordion quanto-faq-accordion"
                            id="accordionExample"
                    >
                        <div class="accordion-item fade-anim">
                            <h6 class="accordion-header">
                                <button
                                        class="accordion-button"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne"
                                        aria-expanded="true"
                                        aria-controls="collapseOne"
                                >
                                    How many years experience?
                                </button>
                            </h6>
                            <div
                                    id="collapseOne"
                                    class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    I have over 18 years professional web development experience, including 10 years with enterprise level application development.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item fade-anim">
                            <h6 class="accordion-header">
                                <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo"
                                        aria-expanded="false"
                                        aria-controls="collapseTwo"
                                >
                                    What is your expertise?
                                </button>
                            </h6>
                            <div
                                    id="collapseTwo"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    I am a full stack LAMP stack developer, specializing in backend PHP and MySQL development.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item fade-anim">
                            <h6 class="accordion-header">
                                <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree"
                                        aria-expanded="false"
                                        aria-controls="collapseThree"
                                >
                                    What frameworks are you proficient in?
                                </button>
                            </h6>
                            <div
                                    id="collapseThree"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    How quick is quick? For most design, we’re talking 2-3
                                    business days. We balance speed with quality,ensuring
                                    you get top-north design swiftly
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item fade-anim">
                            <h6 class="accordion-header">
                                <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour"
                                        aria-expanded="false"
                                        aria-controls="collapseFour"
                                >
                                    I have an agency. Can I outsource work to you?
                                </button>
                            </h6>
                            <div
                                    id="collapseFour"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    How quick is quick? For most design, we’re talking 2-3
                                    business days. We balance speed with quality,ensuring
                                    you get top-north design swiftly
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item fade-anim">
                            <h6 class="accordion-header">
                                <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive"
                                        aria-expanded="false"
                                        aria-controls="collapseFive"
                                >
                                    What do I need to give you to get started?
                                </button>
                            </h6>
                            <div
                                    id="collapseFive"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    How quick is quick? For most design, we’re talking 2-3
                                    business days. We balance speed with quality,ensuring
                                    you get top-north design swiftly
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item fade-anim">
                            <h6 class="accordion-header">
                                <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix"
                                        aria-expanded="false"
                                        aria-controls="collapseSix"
                                >
                                    How does the agile manifesto address planning?
                                </button>
                            </h6>
                            <div
                                    id="collapseSix"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    How quick is quick? For most design, we’re talking 2-3
                                    business days. We balance speed with quality,ensuring
                                    you get top-north design swiftly
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item fade-anim">
                            <h6 class="accordion-header">
                                <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven"
                                        aria-expanded="false"
                                        aria-controls="collapseSeven"
                                >
                                    What is a statement of work in project management?
                                </button>
                            </h6>
                            <div
                                    id="collapseSeven"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    How quick is quick? For most design, we’re talking 2-3
                                    business days. We balance speed with quality,ensuring
                                    you get top-north design swiftly
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item fade-anim">
                            <h6 class="accordion-header">
                                <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight"
                                        aria-expanded="false"
                                        aria-controls="collapseEight"
                                >
                                    How to become an agile project manager?
                                </button>
                            </h6>
                            <div
                                    id="collapseEight"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    How quick is quick? For most design, we’re talking 2-3
                                    business days. We balance speed with quality,ensuring
                                    you get top-north design swiftly
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ section End -->

@endsection