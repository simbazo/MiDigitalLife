<header id="header">
    <div class="wrapper">
        <a href="{{route("home")}}" tabindex="100" class="logo"><img src="{{asset('assets/img/logos/Mdl_logo_colour-200x60.png')}}" alt="MiDigitalLife" width="117" height="19"></a>
        <nav class="main_nav">
            <ul class="clear">
                <li class="tab login_tab {{ Request::is('login') ? 'activex' : '' }}">
                <a   href="{{url('auth/login')}}" tabindex="119">login</a>
                </li>
                <li class="tab about_tab {{ Request::is('aboutus') ? 'activex' : '' }}">
                <a  href="{{url('aboutus')}}" tabindex="116">about</a>
                </li>
                <li class="tab support_tab {{ Request::is('services') ? 'activex' : '' }}">
                <a href="{{url('services')}}" tabindex="113">Services</a></li>
                <li class="tab programs_tab {{ Request::is('projects') ? 'activex' : '' }}"><a href="{{url('projects')}}" tabindex="110">Projects</a>
                </li>
                <li class="tab hosting_tab {{ Request::is('/') ? 'activex' : '' }}"><a  href="{{route('home')}}" tabindex="102">Home</a>
                </li>
                <li class="tab phone_tab">+27 (0) 833 831 831</li>
            </ul>
        </nav>
    </div>
    <div class="end"></div>
</header>