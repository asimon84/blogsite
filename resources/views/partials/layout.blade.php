<!DOCTYPE html>
<html lang="en">
    @include('partials.header')
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

    @include('partials.mobile-menu')

    <div class="has-smooth" id="has_smooth"></div>
    <div id="smooth-wrapper">

        @include('partials.main-menu')

        <div id="smooth-content">
            @yield('content')

            @csrf

            @include('partials.footer')
        </div>
    </div>

    @include('partials.footer-scripts')
</body>
</html>
