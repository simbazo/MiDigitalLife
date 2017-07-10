<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MiDigitalLife</title>
    <link rel="shortcut icon" href="{{asset('assets/media/favicon.ico')}}">
    <link  rel="icon" type="image/x-icon" href="{{asset('assets/media/favicon.ico')}}">
    @include('v2.templates.partials._styles')
</head>
<body>
   
    <div id="main-wrapper">
        <!-- Page Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>

        <div class="uc-mobile-menu-pusher">

            <div class="content-wrapper">
                @include('v2.templates.partials._header')
                <!-- .nav -->
                @yield('content')
                <!-- .footer -->
                @include('v2.templates.partials._footer')
            </div>
            <!-- .content-wrapper -->
        </div>
        <!-- .offcanvas-pusher -->

        <div class="uc-mobile-menu uc-mobile-menu-effect">
            <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;</button>
            <div>
                <div>
                    <ul id="menu">
                        <li><a href="{{route('v2.contact')}}">Contact Us</a></li>
                        <li><a href="{{route('v2.industries')}}">Industries</a></li>
                        <li><a href="{{route('v2.approach')}}">Our Approach</a></li>
                        <li><a href="{{route('v2.aboutus')}}">About</a></li>
                        <li><a href="{{route('v2.apps')}}">Apps</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- .uc-mobile-menu -->

    </div>
    <!-- #main-wrapper -->
    <!-- #main-wrapper -->
    <!-- Script -->
    @include('v2.templates.partials._scripts')
</body>
</html>