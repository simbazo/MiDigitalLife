@extends('web.layout._master')

@section('content')
    
    <div id="container">
    <div class="content_wrap clear">        
            <article id="content" class="">    
                <section class="">
                    <div>
                <section class="hero slide home_hero main shadow_beneath active">
                
                
                <div class="cover_wrap">    
                <h1 class="as_is ">Welcome to MiDigitalLife</h1>
                <span class="hero-promo-header js_p_tagline"></span>
                
                <h2 id="starting-price-home-first" class="starting-price p_block  as_is">LET US HELP GROW 
                </h2>
                <h2 class="p_block  as_is">YOUR DIGITAL BUSINESS</h2><br>
                <a href="#" id="signup-start" class="btn_primary big">Get Started Now</a>
                </div>
            </section>
            </div>
                </section>
                
                    
            <a href="/shared" id="ribbon" class="skinny-bar shadow-top skinny-bar-link">
            
                <span class="skinny-bar-large-text">Powering over <em> Cross-Platform</em> And revolutionizing The Web</span>
            
            
                <span class="btn_secondary btn_hairline inverse">see features</span>
            
            
            </a>
            
            
                <p class="js_adisc adisc"></p>
                <div class="row">
                <div class="col-md-12">
                <section class="features padded_top">
                <ul class="clear cover_wrap">
                    <li>
                        
                <img src="{{asset('assets/media/split-pane.gif')}}" alt="" class=>
                    </li>
                </ul>
            </section>
                    </div>
                </div>
            </article>
            <section class="disclaimer">
                
            </section>
        </div>
    </div>

@endsection