
<nav class="navbar m-menu navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="{{url('v2')}}"><img src="{{asset('assets/img/logos/MDL_logo_original.png')}}" alt="MiDigitalLife" style="width: 200px;"></a>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="#navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right main-nav">
                <li class="{{ Request::is('v2/contact') ? 'active' : '' }}"><a href="{{url('v2/contact')}}">Contact Us</a></li>
                <li class="{{ Request::is('v2/industries') ? 'active' : '' }}"><a href="{{url('v2/industries')}}">Industries</a></li>
                <li class="{{ Request::is('v2/approach') ? 'active' : '' }}"><a href="{{url('v2/approach')}}">Our Approach</a></li>
                <li class="{{ Request::is('v2/aboutus') ? 'active' : '' }}"><a href="{{url('v2/aboutus')}}">About</a></li>
                <li class="{{ Request::is('v2/apps') ? 'active' : '' }}"><a href="{{url('v2/apps')}}">Apps</a></li>
            </ul> 

        </div>
        <!-- .navbar-collapse -->
    </div>
    <!-- .container -->
</nav>