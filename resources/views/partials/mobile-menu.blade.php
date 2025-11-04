<!-- Mobile Menu -->
<div class="quanto-menu-wrapper">
    <div class="quanto-menu-area text-center">
        <div class="quanto-menu-mobile-top">
            <div class="mobile-logo">
                <a href="{{ route('home') }}">
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
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Services</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('services') }}">All Services</a></li>
                        <li><a href="{{ route('services') }}#rest">RESTful APIs</a></li>
                        <li><a href="{{ route('services') }}#saas">SaaS Development</a></li>
                        <li><a href="{{ route('services') }}#ecommerce">eCommerce</a></li>
                        <li><a href="{{ route('services') }}#ai">AI / ML</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Portfolio</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('portfolio') }}">All Projects</a></li>
                        <li><a href="https://github.com/asimon84">Github Codebase</a></li>
                        <li><a href="https://github.com/asimon84/laravel-crm-livewire">Livewire CRM</a></li>
                        <li><a href="https://github.com/asimon84/laravel-crm-react">React CRM</a></li>
                        <li><a href="https://github.com/asimon84/laravel-crm-vue">Vue.js CRM</a></li>
                        <li><a href="https://github.com/asimon84/task-scheduler">Task Scheduler</a></li>
                        <li><a href="https://github.com/asimon84/rest-api">RESTful API</a></li>
                        <li><a href="https://github.com/asimon84/laravel-ai">Boost AI</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('blog') }}">Blog</a>
                </li>

                <li>
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="quanto-mobile-menu-btn">
            <div class="sidebar-wrap">
                <h6>Henderson, NV USA</h6>
            </div>
            <div class="sidebar-wrap">
                <h6><a href="tel:19518925183">+1 951 892 5183 </a></h6>
                <h6>
                    <a href="mailto:ajsimon1984@gmail.com">ajsimon1984@gmail.com</a>
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