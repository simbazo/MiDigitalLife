@extends('v2.templates.master')

@section('content')
<section class="single-page-title">
    <div class="container text-center">
        <h2>About us</h2>
    </div>
</section>
<!-- .page-title -->

<section class="about-text ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>We are committed to collaboration and transparency as we <br> work to make your ideas a digital reality.</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="{{asset('/assets/img/Ecosystem.jpg')}}" alt="Image"></a>
                </div>
            </div>
            <div class="col-md-6">
				<br>
				<br>
				<br>
                <h2>A DIGITAL ECOSYSTEM</h2>
                <p>We work to ensure that as our lives and businesses become more connected, that those connections are useful and easy.</p>
                <p> One of the ways we do this is by recognizing that our connections aren't "stand-alone" but form part of a larger digital ecosystem. We leverage off of this idea and our value of collaboration by sharing MiDigitalLife resources between parties for mobile and web-based systems.</p>
                <p> By connecting clients to our ecosystem, and providing user logins for clients to manage their data should they wish, we are able to build faster and at a lower cost.</p>
            </div>
        </div>
    </div>

</section>
<!-- .about-text-->

<section class="skills ptb-100 gray-bg">
    <section class="section-title">
        <div class="container text-center">
            <h2>OUR TEAM</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="{{asset('/assets/img/team.jpg')}}" alt="Image"></a>
                </div>
            </div>
            <div class="col-md-6">
				<br>
				<br>
				<br>
                <h2>OUR TEAM</h2>
                <p>Our versatile team consists of technology as well as industry experts allowing us to better understand and serve your needs. We bring our values of collaboration and transparency in to all that we do, and don't believe that working in silos is the best way to get things done, or get the best ideas out of people.</p>

                <p>  We encourage growth and skills development among all of our team members from developers, data capturers, project managers to the executive team, because we know that the more dynamic our team becomes, the more creative we can be with our work. We know that technological development never slows down, and we work hard to make sure we stay on track with the latest advancements.</p>
            </div>
        </div>
    </div>

</section>
<!-- .skills -->
@endsection