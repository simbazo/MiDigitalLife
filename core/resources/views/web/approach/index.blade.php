@extends('web.layout._master')

@section('content')

<div id="container">
    <div class="content_wrap clear">        
        <article id="content" class="">    
            <section class="">
                <div>
                    <section id="approach_image"></section>
                </div>
                <div class="page_info">
                    <h2 class="as_is" >OUR APPROACH</h2>
                </div>
                <div id="approach_content">
                    <h3 class="as_is" style="text-align: center;">CREATING SUCCESSFUL COLLABORATIONS</h3>
                    <h4 class="as_is" style="text-align: center;">The driving force behind our approach to success is partnership and collaboration with our clients, making you and your company, menbers of our team as we build. </h4>
                    <p class="as_is">Gone are the days where companies would give their idea to an App Developer, and hope that they would deliver the product that they had envisioned, on time, and within budget. It was a clumsy model that lead to frustration on both sides, and developers and clients often seems to speak two different languages when it comes to technology.</p>

                    <p class="as_is">Our approach to App Development seeks to solve the problem of unmet expectations and frustrations, bringing you along for the journey, at every step of the way.</p>

                    <p class="as_is">Our team of industry experts, User Experience (UX) liaisons, and developers work with you and your company form start to finish. We assign a dedicated Project Manager (PM) to you and your team, who sits with you to discuss exactly what you need and how we can best meet the expectations of your users. </p>

                    <p class="as_is">Your PM will help you translate your vision, to "geek-speak" ensuring that the whole team knows exactly what we are aiming for. They will help you spec your product correctly to avoid any nasty surprises down the road, and meet regularly with you, bringing the latest demo of your product to test and comment on, as the Engineering team continues to work on it and refine the features. </p>

                    <p class="as_is">You will also have direct access to the developers who are working on your product, as well as our management team. We believe that bringing you in to our huddle is the best way to achieve your App dream. And you will be involved in every step of the journey that your App takes from IDEA to LIVE</p>

                    <div id="approach_steps">
                        <img src="assets/img/our_approach.png" style="width: 100%">
                    </div>
                    <div class="panel-group" id="approach_mobile">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#approach_mobile" href="#collapse1" class="as_is">
                                STEP 1: IDEA</a>
                            </h3>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                
                                    <p>You want information that you have to reach your clients/ users, and you realise that an App will be the best way to achieve this. </p>
                                    <p>You make contact with our team and tell us about your dream.</p>
                                    <p>Our team starts to sketch out ideas for you app and do research in to your user base and market.</p>
                                    <p>We agree to take on your project, and are able to provide rough estimates of quotes.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title" >
                            <a data-toggle="collapse" data-parent="#approach_mobile" href="#collapse2" class="as_is" >
                                STEP 2: USE CASE ANALYSIS</a>
                            </h3>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                
                                    <p>Your PM will meet with you to discuss your exact requirements for your project.</p>
                                    <p>A Minimum Viable Product is agreed upon, and well as cost structure and resource allocation.</p>
                                    <p>A wireframe / prototype will be developed in the meeting.</p>
                                    <p>Your PM will draw up a project scope for you and the development team, and the team will start work on your project, with timelines and deadlines in place.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#approach_mobile" href="#collapse3" class="as_is">
                                STEP 3: ENGINEERING</a>
                            </h3>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                          <div class="panel-body">
                            
                                <p>This is where our development team thrives, as they build the infrastructure that you have prototyped with your PM.</p>
                                <p>Throughout this step your PM will be in contact with you to share the latest demo and get feedback.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">
                        <a data-toggle="collapse" data-parent="#approach_mobile" href="#collapse4" class="as_is">
                            STEP 4: TESTING</a>
                        </h3>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                      <div class="panel-body">
                        
                            <p>In tech terms this is verification and validation. For the rest of teh world, we are making sure that you have the App that you wanted, that works for you, and that has all of the features working as specified in the requirements.</p>
                            <p>We are working out the bugs, and we get you to test it out too. </p>
                        
                    </div>
                </div>


            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#approach_mobile" href="#collapse5" class="as_is">
                        STEP 5: LAUNCH!</a>
                    </h3>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                  <div class="panel-body">
                    
                        <p>You have a live, working app that you can deploy amongst your team | get your clients and users to download | whatever you like! </p>
                        <p>Congratulations! You have added another dynamic aspect to the digital ecosystem.</p>
                    
                </div>
            </div>
        </div>


    </div>
</div>
</section>
</article>
</div>
</div>  

@endsection
