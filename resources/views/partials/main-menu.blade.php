<header class="quanto-header main-header bg-color-white" id="sticky-menu">
    <div class="sticky-wrap">
        <div class="sticky-active">
            <div class="container custom-container">
                <div class="row gx-3 align-items-center justify-content-between">
                    <div class="col-8 col-sm-auto">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('/storage/images/logo-1.svg') }}" alt="logo" />
                            </a>
                        </div>
                    </div>
                    <div class="col text-end text-lg-center">
                        <nav class="main-menu menu-style1 d-none d-lg-block">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('about') }}">About</a>
                                </li>
                                {{--<li class="menu-item-has-children">--}}
                                    {{--<a class="no-border" href="#">Services</a>--}}
                                    {{--<ul class="sub-menu">--}}
                                        {{--<li><a href="{{ route('services') }}">All Services</a></li>--}}
                                        {{--<li><a href="{{ route('services') }}#rest">RESTful APIs</a></li>--}}
                                        {{--<li><a href="{{ route('services') }}#saas">SaaS Development</a></li>--}}
                                        {{--<li><a href="{{ route('services') }}#ecommerce">eCommerce</a></li>--}}
                                        {{--<li><a href="{{ route('services') }}#ai">AI / ML</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
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
                                {{--<li class="menu-item-has-children">--}}
                                    {{--<a href="{{ route('blog') }}">Blog</a>--}}
                                {{--</li>--}}
                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>
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
                        <a class="quanto-link-btn btn-pill" href="{{ route('contact') }}"
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