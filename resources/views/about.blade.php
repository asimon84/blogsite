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
                                    What's your story?
                                </button>
                            </h6>
                            <div
                                    id="collapseOne"
                                    class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    I am a full stack senior software engineer with a backend focus. I started my
                                    software development journey in high school and college studying C++ and C#. My first
                                    job offers were in web development, so I began working with the LAMP stack. Over the
                                    last twelve years this has evolved into a focus on backend development in PHP and
                                    MySQL working on enterprise level SaaS applications and REST APIs.
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
                                    How many years experience?
                                </button>
                            </h6>
                            <div
                                    id="collapseTwo"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    I have over 18 years professional web development experience, including over 10
                                    years experience with enterprise level application development.
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
                                    I am most experienced with the Laravel framework. I have used Laravel from version 3
                                    up until now, with the latest version 12. I have 10 years of professional
                                    development experience with Laravel, and 2 years experience with the Symfony
                                    framework.
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
                                    What front end frameworks are you proficient in?
                                </button>
                            </h6>
                            <div
                                    id="collapseFour"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    React, Vue, some Angular for JavaScript frameworks. I am most experienced with the
                                    Bootstrap CSS framework but have also used Tailwind CSS. Obviously, I am very
                                    proficient with the jQuery library as well.
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
                                    What about Microservices and REST APIs?
                                </button>
                            </h6>
                            <div
                                    id="collapseFive"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    I have utilized microservice architecture for most of the past 10 years. This
                                    allows independent, loosely coupled services that perform individual business
                                    functions to communicate with each other.

                                    I have also utilized RESTful APIs for coordinating microservices. This allows
                                    multiple applications - both internal and client facing - to utilize the same code
                                    base by sending requests through an API. Job requests are received and placed in a
                                    queue, allowing the queue to be processed independently by a load balanced network
                                    for the greatest scalability.

                                    Check out the <a href="https://chargebacks911.com/refund-based-prevention-alerts/">Chargebacks911 Refund Alerts API</a> for a REST API designed and built by
                                    yours truly!
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
                                    What about SaaS applications?
                                </button>
                            </h6>
                            <div
                                    id="collapseSix"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    I have worked on many SaaS (Software as a Service) applications. I was architect and
                                    team lead on the initial version of the MIDigator ecommerce fraud prevention
                                    software that recently sold for over 150 million dollars!
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
                                    Do you have experience with CD/CI? Docker? Kubernetes?
                                </button>
                            </h6>
                            <div
                                    id="collapseSeven"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    I have many years experience working alongside DevOps or in the role of a DevOps
                                    engineer. I have worked with CD/CI tools like github automation and jenkins
                                    deployments. I have worked with virtualization and containerization using VMWare,
                                    Docker, and Kubernetes.
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
                                    Do you have experience with Agile development?
                                </button>
                            </h6>
                            <div
                                    id="collapseEight"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    Of course! Most of my career has been in Agile environments. I have also worked in
                                    Kanban and Waterfall environments but there is always a lot of overlap. It is all
                                    about production and continuous improvement.
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