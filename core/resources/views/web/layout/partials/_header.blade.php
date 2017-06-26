<header id="header">
    <div class="wrapper">
        <a href="{{route("home")}}" tabindex="100" class="logo"><img src="{{asset('assets/img/logos/MDL_logo_original.png')}}" alt="MiDigitalLife" width="117" height="19"></a>
        <nav class="main_nav">
            <ul class="clear">
            <li class="tab apps_tab {{ Request::is('apps') ? 'activex' : '' }}"><a href="{{url('apps')}}" tabindex="">Apps</a></li>
            <li class="tab aboutus_tab {{ Request::is('aboutus') ? 'activex' : '' }}"><a href="{{url('aboutus')}}" tabindex="">About</a></li>
            <li class="tab approach_tab {{ Request::is('approach') ? 'activex' : '' }}"><a href="{{url('approach')}}" tabindex="">Our Approach</a></li>
            <li class="tab industries_tab {{ Request::is('industries') ? 'activex' : '' }}"><a href="{{url('industries')}}" tabindex="">Industries</a></li>
                <li class="tab contactus_tab {{ Request::is('contact') ? 'activex' : '' }}"><a href="{{url('contact')}}" tabindex="">Contact Us</a></li>
                
                </li>
            </ul>
        </nav>
    </div>
    <div class="end"></div>
</header>