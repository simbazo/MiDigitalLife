@extends('web.layout._master')

@section('content')

<div id="container">
    <div class="content_wrap clear">        
        <article id="content" class="">    
            <section class="hero slide project_pages0 main shadow_beneath active">

            </section>
            <div class="container">
                <hr>
                <div class="row">
                    <h1 class="text-center" style="text-transform: uppercase;">OUR RECENTLY PROJECTS</h1>
                    <div class="col-md-4">
                        <h5 class="text-center">Appenberg</h5>
                        <p><mark>Appenberg Digital Publishing</mark> was established in November 2014 in response to a growing need amongst publishers of medical information...</p>
                        <a href="{{route('appenberg')}}" data-toggle="ajax-modal" class="btn btn-primary btn-block text-center fwd-button">ReadMore</a>
                    </div>

                    <div class="col-md-4">
                        <h5 class="text-center">Surgery Database</h5>
                        <p>We have teamed up with the <mark>UCT’s Department of Surgery</mark>, the <mark>Department of Health WC</mark>, and the <mark>Innovation Office WC</mark> to develop a surgical...</p>
                         <a href="{{route('surgery')}}" data-toggle="ajax-modal"  class="btn btn-primary btn-block text-center fwd-button">ReadMore</a>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-center">Wellness On Western Cape</h5>
                        <p>We have partnered with <mark>Dr Frederick Marais’</mark>, <mark> wellness team</mark>, <mark>Wellness on WesternCape</mark>   and <mark>The Innovation office</mark>...</p>
                         <a href="{{route('wellness')}}" data-toggle="ajax-modal" class="btn btn-primary btn-block text-center fwd-button">ReadMore</a>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-center">Elearning</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, esse molestiae inventore. Quas a neque amet quaerat deleniti quibusdam ratione provident repudiandae aperiam nemo, suscipit, blanditiis nulla obcaecati perspiciatis rem!</p>
                         <a href="#" class="btn btn-primary btn-block text-center fwd-button">ReadMore</a>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-center">RedCap</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda nisi atque inventore aliquid veniam, vitae saepe, ullam, officia tempore cupiditate recusandae perferendis. Quam dolor mollitia non, modi sapiente amet, enim.</p>
                         <a href="#" class="btn btn-primary btn-block text-center fwd-button">ReadMore</a>
                    </div>

                    <div class="col-md-4">
                        <h5 class="text-center">Healthy Recipes</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi autem quo cumque illo velit eius, explicabo sunt consequatur, suscipit laborum praesentium! Totam, rerum soluta! Dolorem ex doloremque veniam error porro.</p>
                         <a href="#" class="btn btn-primary btn-block text-center fwd-button">ReadMore</a>
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