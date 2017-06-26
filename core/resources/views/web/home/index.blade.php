@extends('web.layout._master')

@section('content')

<div id="container">
    <div class="content_wrap clear">        
        <article id="content" class="">    
            <section class="">
                <div>
                    <section class="hero slide home_hero main shadow_beneath active">
                        
                        
                        <div class="cover_wrap">    
                            <h1 id="hero_center" class="as_is ">COLLABORATING FOR APPS USERS LOVE.</h1>
                            <span class="hero-promo-header js_p_tagline"></span>
                            
                            

                            
                            <div id="downloads"> 40,000+ DOWNLOADS </br> FROM GOOGLE AND </br> APPLE STORES
                            </div>

                            <div><h1 class="as_is" id="trust_align">As trusted by: </h1> </div>
                            <div><ul id="trusted">
                                <li><img src="/assets/img/doh.png" width="50px" height="50px" alt="Western Cape Government"></li>
                                <li><img src="/assets/img/UCT.jpg" width="50px" height="50px" alt="UCT"></li>
                            </ul>
                        </div>
                    </div>

                </div>
                
            </section>
            <div class="page_info">
                <h3 class="as_is" > WE DELIVER INTUITIVE AND ATTRACTIVE DIGITAL PLATFORMS</h3>
            </div>
            <div id="homepage_mid">
                <h4 class="as_is "><strong>Connecting you and your users in meaningful ways</strong></h4>
                
                
                <ul >
                    <li><a href="{{url('industries/#community')}}"><img src="/assets/img/Community.jpg" width="70px" height="50px" alt="" />
                        <p>Community</p></a> </li>
                        <li><a href="{{url('industries/#elearning')}}"><img src="/assets/img/Elearning.jpg" width="70px" height="50px" alt="" />
                            <p style="text-align: center;">E-Learning</p></a></li>
                            <li><a href="{{url('industries/#healthcare')}}"><img src="/assets/img/Healthcare.jpg" width="70px" height="50px" alt="" />
                                <p style="text-align: center;">Health</p></a></li>
                                <li><a href="{{url('industries/#retail')}}"><img src="/assets/img/Retail.jpg" width="70px" height="50px" alt="" />
                                    <p style="text-align: center;">Retail</p></a></li>
                                </ul>
                            </div>

                            <div id="homepage_bottom">
                                <div class="row">
                                    <div class="col-xs-6 approach_experts">
                                        <h4 class="as_is">MAKING DIGITAL EASY</h4>
                                        <p>We believe in <strong>simplicity</strong> and <strong>transparency</strong>. Our success is based upon designing our Apps in partnership with our clients.</p> 
                                        
                                        <p>Learn how we can partner with you in the process, because no one knows your business needs like you do.</p>
                                        <a href="{{url('approach')}}"><button class="our_button_link">OUR APPROACH</button></a>
                                    </div>
                                    <div class="col-xs-6 ">
                                        <img class="approach_img" src="/assets/img/approach.jpg" alt="" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6 ecosystem">   
                                        <h4 class="as_is">CREATING A DIGITAL ECOSYSTEM</h4>
                                        <p>With so much technology available, it is important that you can communicate with your users in a safe, familiar environment.</p> 
                                        
                                        <p>Learn how we don't make "just another app" but a resource for you and your users.</p>
                                        <a href="{{url('aboutus')}}"><button class="our_button_link">OUR PHILOSOPHY</button></a>
                                    </div>
                                    
                                    <div class="col-xs-6">
                                        <img class="ecosystem_img" src="/assets/img/philosophy.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 approach_experts">
                                        
                                        <h4 class="as_is">EXPERTS FROM YOUR INDUSTRY</h4>
                                        <p>We aren't another group of technology specialists. Our team is made up of individuals who have operated at top levels in your industry, because we know how important it is for you to work with people who understand you.</p> 
                                        
                                        <p>Learn how our team uses industry experience to bring you success.</p>
                                        <a href="{{url('industries')}}"><button class="our_button_link">OUR INDUSTRIES</button></a>
                                    </div>
                                    <div class="col-xs-6">
                                        <img src="/assets/img/industries.jpg" class="experts_img" alt="" />
                                    </div>
                                </div>
                                
                                <div class="panel-group" id="accordion">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="as_is">
                                            MAKING DIGITAL EASY</a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse in">
                                      <div class="panel-body"><p>We believe in <strong>simplicity</strong> and <strong>transparency</strong>. Our success is based upon designing our Apps in partnership with our clients.</p> 
                                        
                                        <p>Learn how we can partner with you in the process, because no one knows your business needs like you do.</p>
                                        <a href="{{url('approach')}}"><button class="our_button_link">OUR APPROACH</button></a>
                                        <img class="approach_experts_img" src="/assets/img/approach.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="as_is">
                                        CREATING A DIGITAL ECOSYSTEM</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                  <div class="panel-body">
                                      <p>With so much technology available, it is important that you can communicate with your users in a safe, familiar environment.</p> 
                                      
                                      <p>Learn how we don't make "just another app" but a resource for you and your users.</p>
                                      <a href="{{url('aboutus')}}"><button class="our_button_link">OUR PHILOSOPHY</button></a>
                                      <img id="ecosystem_img" src="/assets/img/philosophy.jpg" alt="" />
                                  </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="as_is">
                                    EXPERTS FROM YOUR INDUSTRY</a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                              <div class="panel-body"><p>We aren't another group of technology specialists. Our team is made up of individuals who have operated at top levels in your industry, because we know how important it is for you to work with people who understand you.</p> 
                                
                                <p>Learn how our team uses industry experience to bring you success.</p>
                                <a href="{{url('industries')}}"><button class="our_button_link">OUR INDUSTRIES</button></a>
                                <img src="/assets/img/industries.jpg" class="approach_experts_img" alt="" />
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            
        </section>
        
    </div>
</div>

@endsection