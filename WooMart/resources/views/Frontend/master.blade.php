<!DOCTYPE html>
<html class="no-js" lang="en">

    @include('Frontend.layouts.head')

    <body class="body-class home-page">
        <!-- pre-loder-area area start here  -->
        <div class="preloader">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>
        <!-- pre-loder-area area start here  -->
        <!-- header area start here  -->
        @include('Frontend.layouts.header')
        <!-- header area end here  -->
        <!-- mobile-header-area start here  -->
        @include('Frontend.layouts.mobile_area')
        <!-- mobile-header-area end here  -->
        <!-- offcanvase menu area start here  -->
        
        <!-- offcanvase menu area end here  -->
        <!-- slider two area start here  -->
        @yield('main_content')
        <!-- slider two area end here  -->
        <!-- Product Categories area start here  -->
        
        <!-- blog area end here  -->
        <!-- footer area start here  -->
        @include('Frontend.layouts.footer')
        <!-- footer area end here  -->
        <!-- Modal -->
        @include('Frontend.layouts.modal')
        <!-- Modal end -->
        
        @include('Frontend.layouts.script')
    </body>
</html>
