<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8" />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Alexander Simon - Software Architect / Senior Software Engineer</title>

    <!-- SEO Meta Tags -->
    <meta
            name="description"
            content="Alexander Simon is a Software Architect and Senior Software Engineer and this is a portfolio to showcase past work."
    />
    <meta
            name="keywords"
            content="creative, business website, freelancer portfolio, Senior Software engineer, software architect"
    />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/storage/images/favicon.png') }}" type="image/gif" />

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css" integrity="sha512-/VYneElp5u4puMaIp/4ibGxlTd2MV3kuUIroR3NSQjS2h9XKQNebRQiyyoQKeiGE9mRdjSCIZf9pb7AVJ8DhCg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/magnific-popup.min.css" integrity="sha512-lvaVbvmbHhG8cmfivxLRhemYlTT60Ly9Cc35USrpi8/m+Lf/f/T8x9kEIQq47cRj1VQIFuxTxxCcvqiQeQSHjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mmenu-js/9.3.0/mmenu.min.css" integrity="sha512-nNatP1G6CEh43irXY/GN4cDcLRX/R0jAYAV/ulFZcotSXcuIQE5Do4TuDOYNAD2SCIpmIbaYSllyjTysSCkpEw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/themes/odometer-theme-default.css" integrity="sha512-kMPqFnKueEwgQFzXLEEl671aHhQqrZLS5IP3HzqdfozaST/EgU+/wkM07JCmXFAt9GO810I//8DBonsJUzGQsQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite(['resources/css/app.css', 'resources/css/style.css'])
</head>

<body>
<!-- Custom Cursor -->
<div class="cursor d-none d-lg-block"></div>
<!-- Custom Cursor End -->

<!-- Preloader -->
<div class="preloader">
    <div class="spinner-wrap">
        <div class="preloader-logo">
            <img src="{{ asset('/storage/images/preloader.svg') }}" alt="" class="img-fluid" />
        </div>
        <div class="spinner"></div>
    </div>
</div>
<!-- Preloader End -->

<!-- back to to button start-->
<a href="#" id="scroll-top" class="back-to-top-btn">
    <i class="fa-solid fa-arrow-up"></i>
</a>
<!-- back to to button end-->

<!-- Mobile Menu -->
<div class="quanto-menu-wrapper">
    <div class="quanto-menu-area text-center">
        <div class="quanto-menu-mobile-top">
            <div class="mobile-logo">
                <a href="index.html">
                    <img src="{{ asset('/storage/images/logo-1.svg') }}" alt="logo" />
                </a>
            </div>
            <button class="quanto-menu-toggle mobile">
                <i class="ri-close-line"></i>
            </button>
        </div>
        <div class="quanto-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="#">Demo</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="index.html">Digital Agency</a>
                        </li>
                        <li>
                            <a href="index-2.html">Creative Agency</a>
                        </li>
                        <li>
                            <a href="index-3.html">Design Studio</a>
                        </li>
                        <li>
                            <a href="index-4.html">branding agency</a>
                        </li>
                        <li>
                            <a href="index-5.html">modern agency</a>
                        </li>
                        <li>
                            <a href="index-6.html">personal portfolio</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="service.html">Service - 1</a></li>
                        <li><a href="service-2.html">Service - 2</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                        <li><a href="career.html">Career</a></li>
                        <li><a href="career-details.html">Career Details</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-details.html">Team Details</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="faq.html">FAQ's</a></li>
                        <li><a href="404.html">Error 404</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Portfolio</a>
                    <ul class="sub-menu">
                        <li><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
                        <li>
                            <a href="portfolio-standard.html">Portfolio Standard</a>
                        </li>
                        <li><a href="portfolio-gallery.html">Portfolio Gallery</a></li>
                        <li><a href="portfolio-slider.html">Portfolio Slider</a></li>
                        <li><a href="portfolio-card.html">Portfolio Card</a></li>
                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-list.html">Blog List</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>

                <li>
                    <a href="contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="quanto-mobile-menu-btn">
            <div class="sidebar-wrap">
                <h6>27 Division St, New York,</h6>
                <h6>NY 10002, USA</h6>
            </div>
            <div class="sidebar-wrap">
                <h6><a href="tel:1800123654987">+1 800 123 654 987 </a></h6>
                <h6>
                    <a href="mailto:quanto.agency@mail.com">quanto.agency@mail.com</a>
                </h6>
            </div>
            <div class="social-btn style3">
                <a href="https://www.facebook.com/">
              <span class="link-effect">
                <span class="effect-1"><i class="fab fa-facebook"></i></span>
                <span class="effect-1"><i class="fab fa-facebook"></i></span>
              </span>
                </a>
                <a href="https://instagram.com/">
              <span class="link-effect">
                <span class="effect-1"><i class="fab fa-instagram"></i></span>
                <span class="effect-1"><i class="fab fa-instagram"></i></span>
              </span>
                </a>
                <a href="https://twitter.com/">
              <span class="link-effect">
                <span class="effect-1"><i class="fab fa-twitter"></i></span>
                <span class="effect-1"><i class="fab fa-twitter"></i></span>
              </span>
                </a>
                <a href="https://dribbble.com/">
              <span class="link-effect">
                <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                <span class="effect-1"><i class="fab fa-dribbble"></i></span>
              </span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End mobile menu -->

<div class="has-smooth" id="has_smooth"></div>
<div id="smooth-wrapper">
    <header class="quanto-header main-header bg-color-white" id="sticky-menu">
        <div class="sticky-wrap">
            <div class="sticky-active">
                <div class="container custom-container">
                    <div class="row gx-3 align-items-center justify-content-between">
                        <div class="col-8 col-sm-auto">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img src="{{ asset('/storage/images/logo-1.svg') }}" alt="logo" />
                                </a>
                            </div>
                        </div>
                        <div class="col text-end text-lg-center">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Digital Agency</a></li>
                                            <li>
                                                <a href="index-2.html">Creative Agency</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Design Studio</a>
                                            </li>
                                            <li>
                                                <a href="index-4.html">branding agency</a>
                                            </li>
                                            <li>
                                                <a href="index-5.html">modern agency</a>
                                            </li>
                                            <li>
                                                <a href="index-6.html">personal portfolio</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li class="menu-item-has-children">
                                                <a class="no-border" href="#">Service</a>
                                                <ul class="sub-menu">
                                                    <li><a href="service.html">Service - 1</a></li>
                                                    <li><a href="service-2.html">Service - 2</a></li>
                                                    <li>
                                                        <a href="service-details.html"
                                                        >Service Details</a
                                                        >
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a class="no-border" href="#">Career</a>
                                                <ul class="sub-menu">
                                                    <li><a href="career.html">Career</a></li>
                                                    <li>
                                                        <a href="career-details.html">Career Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a class="no-border" href="#">Team</a>
                                                <ul class="sub-menu">
                                                    <li><a href="team.html">Team</a></li>
                                                    <li>
                                                        <a href="team-details.html">Team Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="pricing.html">Pricing</a>
                                            </li>
                                            <li>
                                                <a href="faq.html">FAQ's</a>
                                            </li>
                                            <li>
                                                <a href="404.html">404</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Portfolio</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="portfolio-masonry.html"
                                                >Portfolio Masonry</a
                                                >
                                            </li>
                                            <li>
                                                <a href="portfolio-standard.html"
                                                >Portfolio Standard</a
                                                >
                                            </li>
                                            <li>
                                                <a href="portfolio-gallery.html"
                                                >Portfolio Gallery</a
                                                >
                                            </li>
                                            <li>
                                                <a href="portfolio-slider.html">Portfolio Slider</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-card.html">Portfolio Card</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-details.html"
                                                >Portfolio Details</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <button
                                    class="menuBar-toggle quanto-menu-toggle d-inline-block d-lg-none"
                            >
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="40"
                                        height="40"
                                        viewBox="0 0 40 40"
                                        fill="none"
                                >
                                    <path
                                            d="M24.4444 26V28H0V26H24.4444ZM40 19V21H0V19H40ZM40 12V14H15.5556V12H40Z"
                                            fill="currentColor"
                                    />
                                </svg>
                            </button>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <a class="quanto-link-btn btn-pill" href="./contact.html"
                            >Get in touch
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
    </header>
    <div id="smooth-content">
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
                                As long as your dreams revolve around something like; being
                                the proud owner spectacular website.
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
                        <span
                                class="odometer d-inline-block"
                                data-odometer-final="2"
                        >.</span
                        >
                                        <em>k+ Clients</em>
                                    </h6>
                                    <span>Award winning agency</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="quanto-hero__thumb section-margin-top">
                            <div class="video-wrapper">
                                <video loop="" muted="" autoplay="" playsinline="">
                                    <source
                                            src="https://2050today.org/wp-content/uploads/2020/07/Video-Placeholder.mp4?_=6"
                                            type="video/mp4"
                                    />
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
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
                                Our digital strategies and design expertise focus on
                                promoting social economy businesses, cutting-edge brands,
                                and eco-friendly products to motivate consumers to make
                                informed decisions towards sustainable products and services
                            </h4>
                            <div
                                    class="about-info row-margin-top move-anim"
                                    data-delay="0.5"
                            >
                                <p class="">
                                    Whether it's crafting a visually stunning brand identity,
                                    designing immersive digital experiences, or developing
                                    strategic marketing campaigns, we approach each project
                                    with meticulous attention to detail and an unwavering
                                    dedication to quality.
                                </p>
                                <a class="quanto-link-btn" href="./about-us.html"
                                >More about us
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
                              data-odometer-final="17"
                      >.</span
                      >
                                    <em>+</em>
                                </h2>
                                <span class="funfact-info">Years of agency experience</span>
                            </div>
                            <div
                                    class="quanto-funfact-box fade-anim"
                                    data-delay="0.30"
                                    data-direction="right"
                            >
                                <h2 class="counter-item d-inline-flex align-items-center">
                      <span
                              class="odometer d-inline-block"
                              data-odometer-final="220"
                      >.</span
                      >
                                    <em>+</em>
                                </h2>
                                <span class="funfact-info">Successfully projects done</span>
                            </div>
                            <div
                                    class="quanto-funfact-box fade-anim"
                                    data-delay="0.30"
                                    data-direction="right"
                            >
                                <h2 class="counter-item d-inline-flex align-items-center">
                      <span
                              class="odometer d-inline-block"
                              data-odometer-final="46"
                      >.</span
                      >
                                    <em>+</em>
                                </h2>
                                <span class="funfact-info">World-wide team members</span>
                            </div>
                            <div
                                    class="quanto-funfact-box fade-anim"
                                    data-delay="0.30"
                                    data-direction="right"
                            >
                                <h2 class="counter-item d-inline-flex align-items-center">
                      <span
                              class="odometer d-inline-block"
                              data-odometer-final="98"
                      >.</span
                      >
                                    <em>%</em>
                                </h2>
                                <span class="funfact-info"
                                >Clients satisfied & retention</span
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
                                    <a href="./portfolio-details.html">
                                        <div class="quanto-project-thumb overflow-hidden">
                                            <img
                                                    src="{{ asset('/storage/images/project/project-1.png') }}"
                                                    alt="project-thumb"
                                                    class="w-100 img_reveal"
                                            />
                                        </div>
                                    </a>
                                    <div class="quanto-project-content">
                                        <h5 class="text-color-white line-clamp-1">
                                            <a href="./portfolio-details.html"
                                            >Kinetic Sandscapes</a
                                            >
                                        </h5>
                                        <span class="quanto-project-date text-color-white">
                          2024
                          <i class="bi bi-dash"></i>
                          Branding
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 mx-auto project-row-gap">
                                <div class="quanto-project-box overflow-hidden">
                                    <a href="./portfolio-details.html">
                                        <div class="quanto-project-thumb overflow-hidden">
                                            <img
                                                    src="{{ asset('/storage/images/project/project-3.png') }}"
                                                    alt="project-thumb"
                                                    class="w-100 img_reveal"
                                            />
                                        </div>
                                    </a>
                                    <div class="quanto-project-content">
                                        <h5 class="text-color-white line-clamp-1">
                                            <a href="./portfolio-details.html"
                                            >Brooklyn Brewery</a
                                            >
                                        </h5>
                                        <span class="quanto-project-date text-color-white">
                          2024
                          <i class="bi bi-dash"></i>
                          Photography
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="quanto-project-box overflow-hidden">
                                    <a href="./portfolio-details.html">
                                        <div class="quanto-project-thumb overflow-hidden">
                                            <img
                                                    src="{{ asset('/storage/images/project/project-5.png') }}"
                                                    alt="project-thumb"
                                                    class="w-100 img_reveal"
                                            />
                                        </div>
                                    </a>
                                    <div class="quanto-project-content">
                                        <h5 class="text-color-white line-clamp-1">
                                            <a href="./portfolio-details.html"
                                            >Regenerative Farming</a
                                            >
                                        </h5>
                                        <span class="quanto-project-date text-color-white">
                          2024
                          <i class="bi bi-dash"></i>
                          Branding
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
                                            href="portfolio-gallery.html"
                                    >View more works
                                        <span>
                          <i class="fa-solid fa-arrow-right arry1"></i>
                          <i class="fa-solid fa-arrow-right arry2"></i>
                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-10 ms-auto project-row-gap">
                                <div class="quanto-project-box overflow-hidden">
                                    <a href="./portfolio-details.html">
                                        <div
                                                class="quanto-project-thumb max-655 overflow-hidden"
                                        >
                                            <img
                                                    src="{{ asset('/storage/images/project/project-2.png') }}"
                                                    alt="project-thumb"
                                                    class="w-100 img_reveal"
                                            />
                                        </div>
                                    </a>
                                    <div class="quanto-project-content">
                                        <h5 class="text-color-white line-clamp-1">
                                            <a href="./portfolio-details.html"
                                            >Hopscotch Payments</a
                                            >
                                        </h5>
                                        <span class="quanto-project-date text-color-white">
                          2024
                          <i class="bi bi-dash"></i>
                          Development
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 me-auto project-row-gap">
                                <div class="quanto-project-box overflow-hidden">
                                    <a href="./portfolio-details.html">
                                        <div class="quanto-project-thumboverflow-hidden">
                                            <img
                                                    src="{{ asset('/storage/images/project/project-4.png') }}"
                                                    alt="project-thumb"
                                                    class="w-100 img_reveal"
                                            />
                                        </div>
                                    </a>
                                    <div class="quanto-project-content">
                                        <h5 class="text-color-white line-clamp-1">
                                            <a href="./portfolio-details.html"
                                            >Stories Worthwhile</a
                                            >
                                        </h5>
                                        <span class="quanto-project-date text-color-white">
                          2024
                          <i class="bi bi-dash"></i>
                          UI/UX Design
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10 ms-auto">
                                <div class="quanto-project-box overflow-hidden">
                                    <a href="./portfolio-details.html">
                                        <div class="quanto-project-thumb overflow-hidden">
                                            <img
                                                    src="{{ asset('/storage/images/project/project-6.png') }}"
                                                    alt="project-thumb"
                                                    class="w-100 img_reveal"
                                            />
                                        </div>
                                    </a>
                                    <div class="quanto-project-content">
                                        <h5 class="text-color-white line-clamp-1">
                                            <a href="./portfolio-details.html"
                                            >Fintech Accelerator</a
                                            >
                                        </h5>
                                        <span class="quanto-project-date text-color-white">
                          2024
                          <i class="bi bi-dash"></i>
                          UI/UX Design
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

        <!-- Serivce section Start -->
        <section
                class="quanto-service-section section-padding-top-bottom overflow-hidden"
        >
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12 col-lg-9 col-xl-7 col-xxl-6">
                        <div
                                class="quanto__header fade-anim"
                                data-delay="0.30"
                                data-direction="left"
                        >
                            <h3 class="title">We help you to build digital business</h3>
                        </div>
                    </div>
                </div>
                <div class="row g-4 row-padding-top">
                    <div class="col-md-6 col-lg-4 col-xxl-3">
                        <div class="quanto-service-box move-anim">
                            <div class="quanto-iconbox-icon">
                                <img
                                        src="{{ asset('/storage/images/service/service-icon-1.svg') }}"
                                        alt="service-icon"
                                />
                            </div>
                            <div class="quanto-iconbox-data">
                                <div class="quanto-iconbox-data-wrapper">
                                    <h5>Brand Strategy</h5>
                                    <p>
                                        Brand identity design a the have to success whether you
                                        breath onfire quanto agency.
                                    </p>
                                </div>
                                <a class="quanto-link-btn" href="./service-details.html"
                                >View details
                                    <span>
                        <i class="fa-solid fa-arrow-right arry1"></i>
                        <i class="fa-solid fa-arrow-right arry2"></i>
                      </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xxl-3">
                        <div class="quanto-service-box move-anim">
                            <div class="quanto-iconbox-icon">
                                <img
                                        src="{{ asset('/storage/images/service/service-icon-2.svg') }}"
                                        alt="service-icon"
                                />
                            </div>
                            <div class="quanto-iconbox-data">
                                <div class="quanto-iconbox-data-wrapper">
                                    <h5>Web Development</h5>
                                    <p>
                                        Brand identity design a the have to success whether you
                                        breath onfire quanto agency.
                                    </p>
                                </div>
                                <a class="quanto-link-btn" href="./service-details.html"
                                >View details
                                    <span>
                        <i class="fa-solid fa-arrow-right arry1"></i>
                        <i class="fa-solid fa-arrow-right arry2"></i>
                      </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xxl-3">
                        <div class="quanto-service-box move-anim">
                            <div class="quanto-iconbox-icon">
                                <img
                                        src="{{ asset('/storage/images/service/service-icon-3.svg') }}"
                                        alt="service-icon"
                                />
                            </div>
                            <div class="quanto-iconbox-data">
                                <div class="quanto-iconbox-data-wrapper">
                                    <h5>UI/UX Design</h5>
                                    <p>
                                        Brand identity design a the have to success whether you
                                        breath onfire quanto agency.
                                    </p>
                                </div>

                                <a class="quanto-link-btn" href="./service-details.html"
                                >View details
                                    <span>
                        <i class="fa-solid fa-arrow-right arry1"></i>
                        <i class="fa-solid fa-arrow-right arry2"></i>
                      </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xxl-3">
                        <div class="quanto-service-box move-anim">
                            <div class="quanto-iconbox-icon">
                                <img
                                        src="{{ asset('/storage/images/service/service-icon-4.svg') }}"
                                        alt="service-icon"
                                />
                            </div>
                            <div class="quanto-iconbox-data">
                                <div class="quanto-iconbox-data-wrapper">
                                    <h5>Digital Marketing</h5>
                                    <p>
                                        Brand identity design a the have to success whether you
                                        breath onfire quanto agency.
                                    </p>
                                </div>
                                <a class="quanto-link-btn" href="./service-details.html"
                                >View details
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
        <!-- Serivce section End -->

        <!-- Testimonial section Start -->
        <section
                class="quanto-testimonial-section section-padding-top overflow-hidden"
        >
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="quanto__header">
                            <h3
                                    class="title fade-anim"
                                    data-delay="0.30"
                                    data-direction="right"
                            >
                                Client testimonials
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-between">
                    <div class="col-12 col-lg-6 col-xl-5">
                        <!-- Thumbnail Swiper -->
                        <div
                                class="swiper quanto-testimonial__thumb-slider h-100 fade-anim"
                                data-delay="0.30"
                                data-direction="right"
                        >
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div
                                            class="testimonial-img"
                                            data-speed="0.8"
                                            style="
                          background-image: url("{{ asset('/storage/images/testimonial/Testimonial-1.png') }}");
                        "
                                    ></div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                            class="testimonial-img"
                                            data-speed="0.8"
                                            style="
                          background-image: url("{{ asset('/storage/images/testimonial/Testimonial-2.png') }}");
                        "
                                    ></div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                            class="testimonial-img"
                                            data-speed="0.8"
                                            style="
                          background-image: url("{{ asset('/storage/images/testimonial/Testimonial-3.png') }}");
                        "
                                    ></div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                            class="testimonial-img"
                                            data-speed="0.8"
                                            style="
                          background-image: url("{{ asset('/storage/images/testimonial/Testimonial-4.png') }}");
                        "
                                    ></div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                            class="testimonial-img"
                                            data-speed="0.8"
                                            style="
                          background-image: url("{{ asset('/storage/images/testimonial/Testimonial-5.png') }}");
                        "
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="swiper quanto-testimonial__content-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-content">
                                        <p>
                                            “Quanto team quickly understood our business
                                            requirements and were proactive and flexible with our
                                            ongoing support and developments. You can definitely
                                            trust them for complex project requirements as they
                                            are top-notch in their field and we can only recommend
                                            it.”
                                        </p>
                                        <div class="author">
                                            <h5 class="author-title">Jenny Bennett</h5>
                                            <span class="author-designation"
                                            >Senior Marketing Manager at Caya</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-content">
                                        <p>
                                            “Quanto team quickly understood our business
                                            requirements and were proactive and flexible with our
                                            ongoing support and developments. You can definitely
                                            trust them for complex project requirements as they
                                            are top-notch in their field and we can only recommend
                                            it.”
                                        </p>
                                        <div class="author">
                                            <h5 class="author-title">Jenny Bennett</h5>
                                            <span class="author-designation"
                                            >Senior Marketing Manager at Caya</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-content">
                                        <p>
                                            “Quanto team quickly understood our business
                                            requirements and were proactive and flexible with our
                                            ongoing support and developments. You can definitely
                                            trust them for complex project requirements as they
                                            are top-notch in their field and we can only recommend
                                            it.”
                                        </p>
                                        <div class="author">
                                            <h5 class="author-title">Jenny Bennett</h5>
                                            <span class="author-designation"
                                            >Senior Marketing Manager at Caya</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-content">
                                        <p>
                                            “Quanto team quickly understood our business
                                            requirements and were proactive and flexible with our
                                            ongoing support and developments. You can definitely
                                            trust them for complex project requirements as they
                                            are top-notch in their field and we can only recommend
                                            it.”
                                        </p>
                                        <div class="author">
                                            <h5 class="author-title">Jenny Bennett</h5>
                                            <span class="author-designation"
                                            >Senior Marketing Manager at Caya</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-content">
                                        <p>
                                            “Quanto team quickly understood our business
                                            requirements and were proactive and flexible with our
                                            ongoing support and developments. You can definitely
                                            trust them for complex project requirements as they
                                            are top-notch in their field and we can only recommend
                                            it.”
                                        </p>
                                        <div class="author">
                                            <h5 class="author-title">Jenny Bennett</h5>
                                            <span class="author-designation"
                                            >Senior Marketing Manager at Caya</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quanto-testimonial__navigation">
                            <div class="quanto-testimonial__prev prev-slide">
                                <i class="fa-solid fa-arrow-left"></i>
                            </div>
                            <div class="quanto-testimonial__next next-slide">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial section End -->

        <!-- Clients section Start -->
        <div class="clients-area section-padding-top overflow-hidden">
            <div class="clients__wrapper">
                <div class="container custom-container">
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="quanto__header text-center text-md-start">
                                <p
                                        class="title mx-auto mx-md-0 fade-anim"
                                        data-delay="0.30"
                                        data-direction="left"
                                >
                                    We worked with largest global brands
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 ps-md-0">
                            <div class="quanto__header logo">
                                <div
                                        class="client-box fade-anim"
                                        data-delay="0.30"
                                        data-direction="right"
                                >
                                    <img
                                            src="{{ asset('/storage/images/clients/logo-1.png') }}"
                                            alt="client-logo"
                                    />
                                </div>
                                <div
                                        class="client-box fade-anim"
                                        data-delay="0.30"
                                        data-direction="right"
                                >
                                    <img
                                            src="{{ asset('/storage/images/clients/logo-2.png') }}"
                                            alt="client-logo"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 clients__box-wrapper">
                            <div class="client-box d-none">
                                <img
                                        src="{{ asset('/storage/images/clients/logo-1.png') }}"
                                        alt="client-logo"
                                />
                            </div>
                            <div class="client-box d-none">
                                <img
                                        src="{{ asset('/storage/images/clients/logo-2.png') }}"
                                        alt="client-logo"
                                />
                            </div>
                            <div
                                    class="client-box fade-anim"
                                    data-delay="0.30"
                                    data-direction="right"
                            >
                                <img
                                        src="{{ asset('/storage/images/clients/logo-3.png') }}"
                                        alt="client-logo"
                                />
                            </div>
                            <div
                                    class="client-box fade-anim"
                                    data-delay="0.30"
                                    data-direction="right"
                            >
                                <img
                                        src="{{ asset('/storage/images/clients/logo-4.png') }}"
                                        alt="client-logo"
                                />
                            </div>
                            <div
                                    class="client-box fade-anim"
                                    data-delay="0.30"
                                    data-direction="right"
                            >
                                <img
                                        src="{{ asset('/storage/images/clients/logo-5.png') }}"
                                        alt="client-logo"
                                />
                            </div>
                            <div
                                    class="client-box fade-anim"
                                    data-delay="0.30"
                                    data-direction="right"
                            >
                                <img
                                        src="{{ asset('/storage/images/clients/logo-6.png') }}"
                                        alt="client-logo"
                                />
                            </div>
                            <div
                                    class="client-box fade-anim"
                                    data-delay="0.30"
                                    data-direction="right"
                            >
                                <img
                                        src="{{ asset('/storage/images/clients/logo-7.png') }}"
                                        alt="client-logo"
                                />
                            </div>
                            <div
                                    class="client-box fade-anim"
                                    data-delay="0.30"
                                    data-direction="right"
                            >
                                <img
                                        src="{{ asset('/storage/images/clients/logo-8.png') }}"
                                        alt="client-logo"
                                />
                            </div>
                            <div
                                    class="client-box d-none d-sm-block d-md-none d-lg-block border-0"
                            ></div>
                            <div
                                    class="client-box fade-anim"
                                    data-delay="0.30"
                                    data-direction="right"
                            >
                                <img
                                        src="{{ asset('/storage/images/clients/logo-9.png') }}"
                                        alt="client-logo"
                                />
                            </div>
                            <div
                                    class="client-box fade-anim"
                                    data-delay="0.30"
                                    data-direction="right"
                            >
                                <img
                                        src="{{ asset('/storage/images/clients/logo-10.png') }}"
                                        alt="client-logo"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Clients section End -->

        <!-- Blog section Start -->
        <section
                class="quanto-blog-section section-padding-top-bottom overflow-hidden"
        >
            <div class="container custom-container">
                <div class="row g-3 align-items-end">
                    <div class="col-12 col-lg-9 col-xl-7 col-xxl-6">
                        <div class="quanto__header text-center text-md-start">
                            <h3
                                    class="title fade-anim"
                                    data-delay="0.30"
                                    data-direction="left"
                            >
                                Latest blog to boost your productivity
                            </h3>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-xl-5 col-xxl-6">
                        <div
                                class="quanto__headerr d-flex justify-content-center justify-content-lg-end"
                        >
                            <a class="quanto-link-btn" href="./blog-grid.html"
                            >View all articles
                                <span>
                      <i class="fa-solid fa-arrow-right arry1"></i>
                      <i class="fa-solid fa-arrow-right arry2"></i>
                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row g-4 row-padding-top">
                    <div class="col-md-6 col-lg-4">
                        <div
                                class="quanto-blog-box fade-anim"
                                data-delay="0.30"
                                data-direction="right"
                        >
                            <div class="quanto-blog-thumb">
                                <a href="./blog-details.html">
                                    <img
                                            src="{{ asset('/storage/images/blog/blog-thumb-1.png') }}"
                                            alt="blog-thumb"
                                    />
                                </a>
                            </div>
                            <div class="quanto-blog-content">
                                <h5 class="line-clamp-2">
                                    <a href="./blog-details.html"
                                    >Reveal business opportunities with our five point brand
                                        audit</a
                                    >
                                </h5>
                                <span class="quanto-blog-date">March 8, 2024</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div
                                class="quanto-blog-box fade-anim"
                                data-delay="0.45"
                                data-direction="right"
                        >
                            <div class="quanto-blog-thumb">
                                <a href="./blog-details.html">
                                    <img
                                            src="{{ asset('/storage/images/blog/blog-thumb-2.png') }}"
                                            alt="blog-thumb"
                                    />
                                </a>
                            </div>
                            <div class="quanto-blog-content">
                                <h5 class="line-clamp-2">
                                    <a href="./blog-details.html"
                                    >Quanto agency revolutionizes work with the power of
                                        ai-driven</a
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
                                            src="{{ asset('/storage/images/blog/blog-thumb-3.png') }}"
                                            alt="blog-thumb"
                                    />
                                </a>
                            </div>
                            <div class="quanto-blog-content">
                                <h5 class="line-clamp-2">
                                    <a href="./blog-details.html"
                                    >How young leaders can take charge of their professional
                                        growth</a
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

        <!-- Footer section Start -->
        <footer class="footer-area bg-color-primary overflow-hidden">
            <div class="marquee-container fade-anim">
                <div class="marquee">
                    <a class="marquee-item-container" href="contact.html">
                        <div class="marquee-item text-color-white">
                            <h1 class="text-color-white">Let’s work together</h1>
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="150"
                                    height="150"
                                    viewBox="0 0 150 150"
                                    fill="none"
                            >
                                <path
                                        d="M100.023 58.8388L46.232 112.63L37.3932 103.791L91.1844 50H43.7733V37.5H112.523V106.25H100.023V58.8388Z"
                                        fill="white"
                                />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
            <div class="footer__center section-padding-top-bottom">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-widgets-wrapper">
                                <div
                                        class="footer-widgets contact text-color-white fade-anim"
                                >
                                    <h6 class="widget-title text-color-white">Contact</h6>
                                    <p class="address">
                                        740 New South Head Rd, Triple Bay Swfw 3108, New York
                                    </p>
                                    <div class="contacts">
                                        <ul class="custom-ul">
                                            <li>
                                                <a class="email" href="mailto:hello@quanto.agency"
                                                >hello@quanto.agency</a
                                                >
                                            </li>
                                            <li>
                                                <a class="mobile" href="tel:+18884567890"
                                                >+1 888 456 7890</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer-widgets fade-anim" data-delay="0.2">
                                    <h6 class="widget-title text-color-white">Agency</h6>
                                    <div class="widget-links">
                                        <ul class="custom-ul">
                                            <li>
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-masonry.html">Case Studies</a>
                                            </li>
                                            <li>
                                                <a href="about.html">About Us</a>
                                            </li>
                                            <li>
                                                <a href="service.html">Services</a>
                                            </li>
                                            <li>
                                                <a href="#">Testimonials</a>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer-widgets fade-anim" data-delay="0.4">
                                    <h6 class="widget-title text-color-white">Services</h6>
                                    <div class="widget-links">
                                        <ul class="custom-ul">
                                            <li>
                                                <a href="service-details.html">Brand Strategy</a>
                                            </li>
                                            <li>
                                                <a href="service-details.html">Web Development</a>
                                            </li>
                                            <li>
                                                <a href="service-details.html">UI/UX Design</a>
                                            </li>
                                            <li>
                                                <a href="service-details.html">Digital Marketing</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer-widgets fade-anim" data-delay="0.6">
                                    <div class="social-links">
                                        <ul class="custom-ul">
                                            <li>
                                                <a href="https://x.com" target="_blank">
                                                    <i class="fab fa-x-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com" target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com" target="_blank">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://behance.net" target="_blank">
                                                    <i class="fab fa-behance"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://dribbble.com" target="_blank">
                                                    <i class="fab fa-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom has-bodder">
                <div class="container custom-container p-xxl-0 overflow-hidden">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer__bottom-content row-padding-bottom">
                                <div class="copyright-text text-color-white">
                                    All rights reserved — 2025 &copy; MirrorTheme
                                </div>
                                <a href="#header" class="scroll-to-top section-link">
                                    Back to top
                                    <i class="fas fa-angle-up"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer section End -->
    </div>
</div>
<!-- Jquery JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- MixItUp JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js" integrity="sha512-nKZDK+ztK6Ug+2B6DZx+QtgeyAmo9YThZob8O3xgjqhw2IVQdAITFasl/jqbyDwclMkLXFOZRiytnUrXk/PM6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Swiper Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Magnific Popup JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js" integrity="sha512-fCRpXk4VumjVNtE0j+OyOqzPxF1eZwacU3kN3SsznRPWHgMTSSo7INc8aY03KQDBWztuMo5KjKzCFXI/a5rVYQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Odometer JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js" integrity="sha512-51WDTV7haD9BBDc8RWH2r5TnuSiRyAqEnbGyuKHYn+qpYCrCckxFeqlr1I5UoOULijyLV2vnHO9LS4MrAzHxwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- gsap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollSmoother.min.js" integrity="sha512-t4hwZimhnCKT3YLAsEcAcRDkngVFfCcUIfNLIjklrIZAZKD+GfQMP7HbRcsVHxNS48WRBSywNU1uSM2zzLQt1Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollToPlugin.min.js" integrity="sha512-kz526itdNcpyMs18TLPOhsnIeOIO1JywWKbbF77zR+ZKpZ4gwubXhwaURHpt5Se9AAqSK2j8ID0LnfXsB2Jkjg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js" integrity="sha512-P2IDYZfqSwjcSjX0BKeNhwRUH8zRPGlgcWl5n6gBLzdi4Y5/0O4zaXrtO4K9TZK6Hn1BenYpKowuCavNandERg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/SplitText.min.js" integrity="sha512-wOeEC+9qERAzhliwBFPDb6t8TiFFxdxG8vhK/Ygs7TuC44bpg8pg/X2/U/u+0X4fK05wb9id1EIipnF02+CFQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@vite(['resources/js/app.js', 'resources/js/viewport.js', 'resources/js/menu.js', 'resources/js/main.js'])

</body>
</html>
