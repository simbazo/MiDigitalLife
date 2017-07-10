@extends('v2.templates.master')

@section('content')
<section class="single-page-title">
    <div class="container text-center">
        <h2>Our Approach</h2>
    </div>
</section>
<!-- .page-title -->

<section class="service-icon-style ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>CREATING SUCCESSFUL COLLABORATIONS</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>


    <div class="container">
        <div class="row">
            <div class="col-md- 12 text-center">
                <h3>The driving force behind our approach to success is partnership and collaboration with our clients,<br> making you and your company, menbers of our team as we build.</h3>
            </div> 
            <div class="col-sm-4">
            <p class="as_is">Gone are the days where companies would give their idea to an App Developer, and hope that they would deliver the product that they had envisioned, on time, and within budget. It was a clumsy model that lead to frustration on both sides, and developers and clients often seems to speak two different languages when it comes to technology.</p>
            <p class="as_is">Our approach to App Development seeks to solve the problem of unmet expectations and frustrations, bringing you along for the journey, at every step of the way.</p>
            <p class="as_is">Our team of industry experts, User Experience (UX) liaisons, and developers work with you and your company form start to finish. We assign a dedicated Project Manager (PM) to you and your team, who sits with you to discuss exactly what you need and how we can best meet the expectations of your users. </p>
            <p class="as_is">Your PM will help you translate your vision, to "geek-speak" ensuring that the whole team knows exactly what we are aiming for. They will help you spec your product correctly to avoid any nasty surprises down the road, and meet regularly with you, bringing the latest demo of your product to test and comment on, as the Engineering team continues to work on it and refine the features. </p>
            <p>You will also have direct access to the developers who are working on your product, as well as our management team.</p>
            </div>
            <div class="col-sm-8">
                <div class="promo-block-wrapper clearfix">
                    <img src="{{asset('assets/img/our_approach.png')}}" class="img-responsive" style="width: 100%">
                <br>
                </div>
            <p class="as_is"> We believe that bringing you in to our huddle is the best way to achieve your App dream. And you will be involved in every step of the journey that your App takes from IDEA to LIVE</p>
                <!-- /.promo-block-wrapper -->
            </div>

        </div>
        <!-- /.row -->

    </div>


</section>
<!-- .about-text-->
@endsection