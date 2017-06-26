@extends('web.layout._master')

@section('content')

<div id="container">
    <div class="content_wrap clear">        
        <article id="content" class="">    
            <section class="">
                <div>
                    <section id="about_image">
                        <div class="cover_wrap">
                            
                        </div>
                    </section>
                </div>
                <div class="page_info">
                    <h2 class="as_is" >ABOUT US</h2>
                </div>
                <div class="about_text">
                    <h4 class="as_is">We are committed to collaboration and transparency as we work to make your ideas a digital reality. </h4>
                    <a href="{{url('approach')}}">
                        <button class="our_button_link">OUR APPROACH</button>
                    </a>
                </div>
                <div id="about_mid">
                    <div class="row">
                        <div class="col-xs-6 approach_experts">
                            <h4 class="as_is">A DIGITAL ECOSYSTEM:</h4>
                            <p>We work to ensure that as our lives and businesses become more connected, that those connections are useful and easy. One of the ways we do this is by recognizing that our connections aren't "stand-alone" but form part of a larger digital ecosystem. We leverage off of this idea and our value of collaboration by sharing MiDigitalLife resources between parties for mobile and web-based systems. By connecting clients to our ecosystem, and providing user logins for clients to manage their data should they wish, we are able to build faster and at a lower cost.</p>
                        </div>
                        <div class="col-xs-6 ">
                            <img class="approach_img" src="/assets/img/ecosystem.jpg" alt="" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 ecosystem">   
                            <h4 class="as_is">OUR TEAM:</h4>
                            <p>Our versatile team consists of technology as well as industry experts allowing us to better understand and serve your needs. We bring our values of collaboration and transparency in to all that we do, and don't believe that working in silos is the best way to get things done, or get the best ideas out of people. We encourage growth and skills development among all of our team members from developers, data capturers, project managers to the executive team, because we know that the more dynamic our team becomes, the more creative we can be with our work. We know that technological development never slows down, and we work hard to make sure we stay on track with the latest advancements. </p>
                        </div>
                        <div class="col-xs-6">
                            <img class="ecosystem_img" src="/assets/img/team.jpg" alt="" />
                        </div>
                    </div>
                </div>

                
                <div class="panel-group" id="about_mobile">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="as_is">A DIGITAL ECOSYSTEM</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p>We work to ensure that as our lives and businesses become more connected, that those connections are useful and easy. One of the ways we do this is by recognizing that our connections aren't "stand-alone" but form part of a larger digital ecosystem. We leverage off of this idea and our value of collaboration by sharing MiDigitalLife resources between parties for mobile and web-based systems. By connecting clients to our ecosystem, and providing user logins for clients to manage their data should they wish, we are able to build faster and at a lower cost.</p>
                    
                    <img class="approach_experts_img" src="/assets/img/ecosystem.jpg" alt="" />
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="as_is">
                    OUR TEAM</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Our versatile team consists of technology as well as industry experts allowing us to better understand and serve your needs. We bring our values of collaboration and transparency in to all that we do, and don't believe that working in silos is the best way to get things done, or get the best ideas out of people. We encourage growth and skills development among all of our team members from developers, data capturers, project managers to the executive team, because we know that the more dynamic our team becomes, the more creative we can be with our work. We know that technological development never slows down, and we work hard to make sure we stay on track with the latest advancements. </p>
                
                <img class="approach_experts_img" src="/assets/img/team.jpg" alt="" />
            </div>
        </div>
    </div>
</div>

<div class="about_text">
    <h4 class="as_is">Wondering if your idea can become digital? Let's discuss the project!</h4>
    <a href="{{url('contact')}}">
        <button class="our_button_link">Contact Us</button>    
    </a>
</div>



</section>
</article>
</div>
</div>  

@endsection
