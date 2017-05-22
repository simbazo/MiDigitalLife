
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noodp, noydir">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{$title or 'MiDigitalLife'}}</title>
    <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><script>provinfo.lt_ie9 = 1;</script><![endif]-->
    <!--[if lte IE 9]><script>provinfo.lte_ie9 = 1;</script><![endif]-->
    <link rel="shortcut icon" href="{{asset('assets/media/favicon.ico')}}">
    <link  rel="icon" type="image/x-icon" href="{{asset('assets/media/favicon.ico')}}">
    
    <link rel="canonical" href="http://www.midigitallife.com/">
    <meta name="description" content="Midigital - Midigital Powering  over Cross Platform and revolutionizing the Web">
    <meta name="keywords" content="web host,web hosting,domains,free domain, angularJs, React, Laravel, VueJs, Angular 2, Angular4, Ng, name,php,perl,ruby,front page,domain registration,ecommerce,business,web site,website,mobile Apps,site builder,web site builder,seo,blog">
    <meta name="author" description="Jacinto Joao">
    <meta name="director" description="Project director CEO | Rory Laisegang">
    <meta name="partner" description="Project Core Partner| Bennedict Mabudafhasi">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset("assets/bootstrapdialog/dist/css/bootstrap-dialog.css")}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/brand.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/brand_mobile.css')}}">
    <link rel="stylesheet" href="{{asset("assets/css/pace.css")}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}"/>   
</head>
<!--[if lt IE 8]><body class=" no_js ie7 lt_ie9 lte_ie9 lte_ie10"><![endif]-->
<!--[if IE 8]><body class=" no_js ie8 lt_ie9 lte_ie9 lte_ie10"><![endif]-->
<!--[if IE 9]><body class=" no_js ie9 lt_ie10 lte_ie10"><![endif]-->
<!--[if IE 10]><body class=" no_js ie10 lte_ie10"><![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<body class=" no_js">
<!--<![endif]-->
<script>(function() {var d=document.body;d.className=d.className.replace('no_js','js_on');})();</script>
        @include('web.layout.partials._header')
       <div class="row">
           <div class="col-md-12">
                @yield('content')
           </div>
       </div>
        @include('web.layout.partials._footer')
    
            <!--[if IE]>
            <style>
            .ieUserData { behavior:url(#default#userdata); }
            </style>
            <element id="ieUserDataElement" class="ieUserData">
            <![endif]-->
        <div id="ajax-modal" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static"></div>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script>window.jQuery || document.write('<script src="{{asset('assets/js/jquery.min.js')}}"><\/script>');</script>     
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!--
        <script src="{{asset('assets/js/general/swfobject.js')}}"></script>
        <script src="{{asset('assets/js/general/plugindetect.js')}}"></script>
        <script src="{{asset('assets/js/general/cookies.js')}}"></script>
        <script src="{{asset('assets/js/general/common.js')}}"></script>
        <script src="{{asset('assets/js/general/detectmobilebrowser.js')}}"></script>-->
        <script src="{{ asset('assets/js/bootstrap-dialog.js') }}"></script>
        <script src="{{asset('assets/js/aboutus.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
    
</body>
</html>
