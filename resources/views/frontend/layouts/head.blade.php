<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="TounesConnect">
    <meta name="description" content="UNE ÉQUIPE COMMERCIALE À VOTRE ÉCOUTE VOTRE RÉUSSITE EST NOTRE PASSION.">
    <meta property="og:locale" content="fr_FR">
    <meta name="theme-color" content="#e2043e">
@if (isset($meta))
    {!!$meta!!}
@else
<meta itemprop="name" content="Hengxin Immobilier">
<meta itemprop="description" content="UNE ÉQUIPE COMMERCIALE À VOTRE ÉCOUTE VOTRE RÉUSSITE EST NOTRE PASSION.">
<meta itemprop="image" content="{{asset('/storage/photos/1/Paris.jpg')}}">
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{asset('')}}" />
    <meta property="twitter:title" content="Hengxin Immobilier" />
    <meta property="twitter:description" content="UNE ÉQUIPE COMMERCIALE À VOTRE ÉCOUTE VOTRE RÉUSSITE EST NOTRE PASSION." />
    <meta property="twitter:image" content="{{asset('/storage/photos/1/Paris.jpg')}}" />
    <meta property="twitter:site" content="@HenginImmobilier" />
    <meta property="og:type" content="website" />
	<meta property="og:title" content="Hengxin Immobilier" />
	<meta property="og:description" content="UNE ÉQUIPE COMMERCIALE À VOTRE ÉCOUTE VOTRE RÉUSSITE EST NOTRE PASSION." />
    <meta property="og:image" content='{{asset('/storage/photos/1/Paris.jpg')}}' />

@endif
@if (isset($title_page))
<title>{{$title_page}}</title>
@else
<title>Hengxin - Immobilier</title>
@endif



    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/favicon_32x32.png')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800, 700" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{asset('frontend/css/leaflet.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/leaflet-gesture-handling.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/leaflet.markercluster.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/leaflet.markercluster.default.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/timedropper.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/datedropper.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/aos2.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/video.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('frontend/css/colors/dark-orange.css')}}">
    <!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="frontend/css/selectivizr.js"></script>
  <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
<![endif]-->
<!--[if lt IE 9]><script src="/theme/_siteNY2010.eylaucom/js/css3-mediaqueries.min.js"></script><![endif]-->


    @yield('styles')
