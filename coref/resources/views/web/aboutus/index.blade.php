@extends('web.layout._master')

@section('content')

<div id="container">
    <div class="content_wrap clear">        
        <article id="content" class="">    
            <section class="hero slide about_page main shadow_beneath active">
              <div class="cover_wrap">    
                <h1 class="as_is ">WE CREATE THE IDEAS</h1>
                <span class="hero-promo-header js_p_tagline"></span>
                
                <h2 id="starting-price-home-first" class="starting-price p_block  as_is">PLATFORMS, PRODUCTS
                </h2>
                <h2 class="p_block  as_is">AND EXPERIENCE THAT!</h2>
                </div>
             </section>

            <div id="exTab3" class="container"> 
                <ul  class="nav nav-pills">
                    <li class="active">
                        <a  href="#1b" data-toggle="tab" class="tabs-ajax">Company</a>
                    </li>
                    <li><a href="#2b" data-toggle="tab" class="tabs-ajax">Team</a>
                    </li>
                    <li><a href="#3b" data-toggle="tab" class="tabs-ajax">Contact</a>
                    </li>
                    <li><a href="#4a" data-toggle="tab" class="tabs-ajax">Terms Of Service</a>
                    </li>
                    <li><a href="#5a" data-toggle="tab" class="tabs-ajax">Privacy Policy</a>
                    </li>
                </ul>

                <div class="tab-content clearfix">
                  <div class="tab-pane active" id="1b">
                    <div class="row" id="tabscontent">
                    @include('web.aboutus.company')

                    </div>
                </div>
                <div class="tab-pane" id="2b">
                    @include('web.aboutus.team')
                </div>
                <div class="tab-pane" id="3b">
                    @include('web.aboutus.contact')
                </div>
                <div class="tab-pane" id="4a">
                    <h3>We use css to change the background color of the content to be equal to the tab</h3>
                </div>
                <div class="tab-pane" id="5a">
                    <h3>We use css to change the background color of the content to be equal to the tab 5a</h3>
                </div>
            </div>
        </div>
        <p class="js_adisc adisc"></p>
        <section class="features padded_top">

        </section>
    </article>
    <section class="disclaimer">

    </section>
</div>
</div>

@endsection