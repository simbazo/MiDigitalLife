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

                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                            tellus odio malesuada ex.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="{{asset('assets/img/Elearning.jpg')}}" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Elearning</a></h3>

                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                            tellus odio malesuada ex.</p>
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

                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                            tellus odio malesuada ex.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="{{asset('assets/img/Retail.jpg')}}" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Retail</a></h3>

                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                            tellus odio malesuada ex.</p>
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
                        <p>Learn how we don't make "just another app" but a resource for you and your users. <br><br></p>
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