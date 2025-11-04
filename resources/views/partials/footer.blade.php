<!-- Footer section Start -->
<footer class="footer-area bg-color-primary overflow-hidden">
    <div class="marquee-container fade-anim">
        <div class="marquee">
            <a class="marquee-item-container" href="{{ route('contact') }}">
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
                                Henderson, NV
                            </p>
                            <div class="contacts">
                                <ul class="custom-ul">
                                    <li>
                                        <a class="email" href="mailto:ajsimon1984@gmail.com"
                                        >ajsimon1984@gmail.com</a
                                        >
                                    </li>
                                    <li>
                                        <a class="mobile" href="tel:+19518925183"
                                        >1 951 892 5183</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-widgets fade-anim" data-delay="0.2">
                            <h6 class="widget-title text-color-white">Architect</h6>
                            <div class="widget-links">
                                <ul class="custom-ul">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    {{--<li><a href="{{ route('services') }}">Services</a></li>--}}
                                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                    {{--<li><a href="{{ route('blog') }}">Blog</a></li>--}}
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    {{--<li><a href="https://github.com/asimon84">Codebase</a></li>--}}
                                </ul>
                            </div>
                        </div>
                        {{--<div class="footer-widgets fade-anim" data-delay="0.4">--}}
                            {{--<h6 class="widget-title text-color-white">Services</h6>--}}
                            {{--<div class="widget-links">--}}
                                {{--<ul class="custom-ul">--}}
                                    {{--<li><a href="{{ route('services') }}#rest">RESTful APIs</a></li>--}}
                                    {{--<li><a href="{{ route('services') }}#saas">SaaS Development</a></li>--}}
                                    {{--<li><a href="{{ route('services') }}#ecommerce">eCommerce</a></li>--}}
                                    {{--<li><a href="{{ route('services') }}#ai">AI / ML</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="footer-widgets fade-anim" data-delay="0.6">
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
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </li>
                                    {{--<li>--}}
                                        {{--<a href="https://behance.net" target="_blank">--}}
                                            {{--<i class="fab fa-behance"></i>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="https://dribbble.com" target="_blank">--}}
                                            {{--<i class="fab fa-dribbble"></i>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
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
                            All rights reserved — {{ date('Y') }} &copy; Alexander Simon
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