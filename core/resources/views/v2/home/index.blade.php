@extends('v2.templates.master')

@section('content')
@include('v2.home.slider')

<section class="x-services ptb-100 gray-bg">

    <section class="section-title">
        <div class="container text-center">
            <h2>Connecting you and your users in meaningful ways</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="{{asset('assets/img/Community.jpg')}}" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Community</a></h3>

                        <p>Whether it is connecting donors with the projects that they have funded, facilitating farmers showcasing which crops they have available for purchase,... <a href="{{route('v2.industries')}}#community">read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="{{asset('assets/img/Elearning.jpg')}}" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Elearning</a></h3>

                        <p>Connecting those with academic knowledge with those in need of learning support, our e-learning apps are designed to support the learning processa ... <a href="{{route('v2.industries')}}#e-learning">read more</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="{{asset('assets/img/Healthcare.jpg')}}" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Healthcare</a></h3>

                        <p>Our experience working in, and creating Apps for, the healthcare sector has given us strategic insight into the needs of both clients and users.... <a href="{{route('v2.industries')}}#healthcare">read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="{{asset('assets/img/Retail.jpg')}}" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Retail</a></h3>

                        <p>The increased uptake of Smartphones within within South Africa and beyond is revolutionising the way that many that many companies do business,... <a href="{{route('v2.industries')}}#retail">read more</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- .x-services -->

<section class="x-services">
    <section class="section-title">
        <div class="container text-center">
            <h2>MAKING DIGITAL EASY</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="{{asset('assets/img/approach.jpg')}}" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">MAKING DIGITAL EASY</a></h3>

                        <p>We believe in simplicity and transparency. Our success is based upon designing our Apps in partnership with our clients.</p>
                        <p>Learn how we can partner with you in the process, because no one knows your business needs like you do.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="ecosystem_img" src="/assets/img/philosophy.jpg" alt=""></a>

                    <div class="caption">
                        <h3><a href="#">CREATING A DIGITAL ECOSYSTEM</a></h3>

                        <p>With so much technology available, it is important that you can communicate with your users in a safe, familiar environment.</p>
                        <p>Learn how we don't make "just another app" but a resource for you and your users.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .x-features -->
 {{-- @include('v2.home.team') --}}
    @include('v2.home.trusted')
<!-- /.client-logo -->

@endsection