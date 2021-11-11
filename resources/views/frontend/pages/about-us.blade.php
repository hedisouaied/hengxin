@extends('frontend.layouts.master')

@section('content')
<!-- START SECTION ABOUT -->
<section class="about-us fh" style="padding-top: 150px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 who-1">
                <div>
                    <h2 class="text-left mb-4">A-propos <span>{{$about->heading}}</span></h2>
                </div>
                <div class="pftext">
                    <p>{{$about->content}}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="wprt-image-video w50">
                    <img alt="image" src="{{$about->image}}">
                    <a class="icon-wrap popup-video popup-youtube" href="{{$about->video}}">
                        <i class="fa fa-play"></i>
                    </a>
                    <div class="iq-waves">
                        <div class="waves wave-1"></div>
                        <div class="waves wave-2"></div>
                        <div class="waves wave-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->

<!-- START SECTION WHY CHOOSE US -->
<section class="how-it-works bg-white-1 home18">
    <div class="container">
        <div class="sec-title">
            <h2><span>Pourquoi nous </span>Choisir</h2>
            <p>Des professionnels qui se chargent de satisfaire vos besoins.</p>
        </div>
        <div class="row service-1">
            <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                <div class="serv-flex">
                    <div class="art-1 img-13">
                        <img src="{{asset('frontend/images/icons/icon-1.svg')}}" alt="">
                        <h3>Une panoplie de choix</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">Hengxin met à la disposition de ses clients une diversité d'offres d'immobilier.</p>
                    </div>
                </div>
            </article>
            <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                <div class="serv-flex">
                    <div class="art-1 img-14">
                        <img src="{{asset('frontend/images/icons/icon-2.svg')}}" alt="">
                        <h3>Une équipe de confiance</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">Hengxin se compose de professionnels dans le domaine de l'immobilier et écoute client.</p>
                    </div>
                </div>
            </article>
            <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                <div class="serv-flex arrow">
                    <div class="art-1 img-15">
                        <img src="{{asset('frontend/images/icons/icon-3.svg')}}" alt="">
                        <h3>Une solution en ligne</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">Hengxin présente à ses clients une interface simple  pour choisir une offre immobilière sans se déplacer.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- END SECTION WHY CHOOSE US -->

<!-- START SECTION COUNTER UP -->
<section class="counterup">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="countr">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">350</p>
                        <h3>Locaux quotidiens</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="countr">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">450</p>
                        <h3>Biens vendus</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="countr mb-0">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">250</p>
                        <h3>Clients quotidiens</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COUNTER UP -->
@if (count($tem)>1)


<!-- START SECTION TESTIMONIALS -->
<section class="h18 testimonials">
    <div class="container">
        <div class="sec-title">
            <h2><span>Témoignage</span> de nos clients</h2>
           <!-- <p>There are many variations of lorem of Lorem Ipsum available for use a sit amet, consectetur debits adipisicing lacus.</p> -->
        </div>
        <div class="owl-carousel style1">
            @foreach ($tem as $item)
            <div class="single-testimonial" data-aos="zoom-in" data-aos-delay="150">
                <div class="client-comment">
                    <p>{{$item->description}}</p>
                </div>
                <div class="clinet-inner">
                    <div class="client-thumb">
                        <img src="{{$item->photo}}" alt="" />
                    </div>
                    <div class="client-info">
                        <h2>{{$item->title}}</h2>
                       <span>{{$item->city}}</span>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!-- END SECTION TESTIMONIALS -->
@endif
<section class="team bg-white-1 home18">
    <div class="container">
        <div class="sec-title">
            <h2><span>Notre </span>équipe</h2>
            <p>Nous offrons un service complet à chaque étape.</p>
        </div>
        <div class="row team-all">
            @foreach ($team as $item)

            <div class="col-lg-3 col-md-6 team-pro" style="margin-bottom: 20px;">
                <div class="team-wrap" style="box-shadow: 2px 2px 30px #ccc;border-radius: 5px;">
                   <div class="team-img">
                        <img style="height: 300px;object-fit:cover;" src="{{$item->photo}}" alt="{{$item->title}}" />
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h3>{{$item->title}}</h3>
                            <p>{{$item->post}}</p>
                            <div class="team-socials">
                                <ul>
                                    <li>
                                        <a href="mailto:{{$item->email}}" title="email"><i style="background: #42edc8;" class="fa fa-envelope" aria-hidden="true"></i></a>
                                        <a href="tel:{{$item->phone}}" title="télephone"><i style="background: #91ff4d;" class="fa fa-phone" aria-hidden="true"></i></a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>



@endsection
