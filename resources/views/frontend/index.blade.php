@extends('frontend.layouts.master')


@section('content')

<div class="clearfix"></div>
<!-- Header Container / End -->
@if (count($banners)>0)


<!-- STAR HEADER IMAGE -->
<section class="header-image home-18 d-flex align-items-center" id="slider" style="background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('{{$banners[0]->photo}}') no-repeat center top;background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{$banners[0]->photo}}') no-repeat center top;
background-size: cover;background-attachment: fixed !important;width: 100%;height: auto;">

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="left wow fadeInLeft">
                    <div class="welcome-text">
                        <h1 class="h1">
                        <br class="d-md-none">
                        <span class="typed border-bottom"></span>
                    </h1>
                        <p class="mt-4">{{$banners[0]->description}}</p>
                    </div>

                    <a href="{{route('tous.locaux')}}" class="btn-white">Explorer les locaux</a>
                </div>
            </div>
            <div class="col-lg-6 google-maps home-18" data-aos="fade-left">
                <div class="filter">
                    <div class="filter-toggle d-lg-none d-sm-flex"><i class="fa fa-search"></i>
                        <h6>Recherche avancée</h6></div>
                    <form method="get" action="{{route('tous.locaux')}}">
                        <input type="hidden" id="price_range" name="price_range" value="{{\App\Models\Product::min('price')}}-{{\App\Models\Product::max('price')}}">
                        <input type="hidden" id="surface_range" name="surface_range" value="{{\App\Models\Product::min('surface')}}-{{\App\Models\Product::max('surface')}}">
                        <div class="filter-item">
                            <label>Mots clés</label>
                            <input type="text" name="search" placeholder="Mots clés...">
                        </div>
                        <div class="filter-item">
                            <label>Ville</label>
                            <select id="selType-vl4" name="ville">
                                <option value="">Tous</option>
                                @foreach ($city as $ville)
                                <option value="{{$ville->slug}}">{{$ville->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div id="child_cat_div" class="filter-item d-none">

                        </div>
                        <div class="filter-item mb-3">
                            <label>Prix</label>
                            <input type="text" disabled value="€ {{\App\Models\Product::min('price')}} - € {{\App\Models\Product::max('price')}}" class="slider_amount m-t-lg-30 m-t-xs-0 m-t-sm-10 mb-3">
                            <div class="slider-range">
                                <div id="slider-range" data-min="{{\App\Models\Product::min('price')}}" data-max="{{\App\Models\Product::max('price')}}" data-unit="€" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="{{\App\Models\Product::min('price')}}" data-value-max="{{\App\Models\Product::max('price')}}" data-label-result="Prix:">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>

                            </div>
                        </div>
                        <div class="filter-item mb-3">
                            <label>Surface</label>
                            <input type="text" disabled value="m² {{\App\Models\Product::min('surface')}} - m² {{\App\Models\Product::max('surface')}}" class="slider_surface m-t-lg-30 m-t-xs-0 m-t-sm-10 mb-3">
                            <div class="slider-range">
                                <div id="slider-range" data-min="{{\App\Models\Product::min('surface')}}" data-max="{{\App\Models\Product::max('surface')}}" data-unit="m²" class="slider-range-surface ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="{{\App\Models\Product::min('surface')}}" data-value-max="{{\App\Models\Product::max('surface')}}">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>

                            </div>
                        </div>
                        <div class="filter-item filter-half mt-3">
                            <label>Status</label>
                            <select name="search_type">
                                <option value="">Tous</option>
                                <option value="sale">à vendre</option>
                                <option value="rent">à louer</option>
                            </select>
                        </div>
                        <div class="filter-item filter-half filter-half-last mt-3">
                            <label>Condition</label>
                            <select name="search_conditions">
                                <option value="">Tous</option>
                                <option value="fdc">Fond de commerce</option>
                                <option value="dab">Droit au bail</option>
                                <option value="mc">Murs commerciaux</option>
                                <option value="lp">Location pure</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                        <div class="filter-item">
                            <label>Spécialité</label>
                            <select id="selType-vl4" name="speciality[]">
                                <option value="">Tous</option>
                                @foreach ($speciality as $sps)
                                <option value="{{$sps->id}}">{{$sps->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="filter-item">
                            <label class="label-submit p-0 m-0">Submit</label>
                            <br/>
                            <input type="submit" class="button alt mb-0" value="FILTRER" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HEADER IMAGE -->
@endif
@if (count($product_sale)>0)


<!-- START SECTION PROPERTIES FOR SALE -->
<section class="recently portfolio bg-white-1 home18">
    <div class="container">
        <div class="sec-title">
            <h2><span>Locaux </span>à vendre</h2>
        </div>
        <div class="portfolio col-xl-12">
            <div class="slick-lancers">
                @foreach ($product_sale as $sale)
                    @php
                        $photos = explode(",",$sale->photo);
                    @endphp

                <div class="agents-grid" data-aos="fade-up" >
                    <div class="landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="{{route('product.detail',$sale->slug)}}">Voir local</a><span class="category">{{$sale->title}}</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="{{route('product.detail',$sale->slug)}}" class="homes-img">
                                        @if ($sale->fond=='fdc')
                                        <div class="homes-tag button alt featured" title="Fond de commerce" >FDC</div>
                                        @endif

                                        <div class="homes-tag button alt sale">à vendre</div>
                                        <div class="homes-price">{{\App\Models\Brand::where('id',$sale->brand_id)->value('title')}}</div>
                                        <img src="{{$photos[0]}}" alt="home-1" class="img-responsive" style="height: 250px;object-fit: cover;">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="{{route('product.detail',$sale->slug)}}" class="btn"><i class="fa fa-link"></i></a>
                                    @if(!empty($sale->video))

                                    <a href="{{$sale->video}}" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    @endif
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="{{route('product.detail',$sale->slug)}}">{{$sale->title}}</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="{{route('product.detail',$sale->slug)}}">
                                        <i class="fa fa-map-marker"></i><span>{{$sale->address}}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix">
                                    <li>
                                        <i class="fas fa-arrows-alt-h" aria-hidden="true"></i>
                                        <span>surface: {{$sale->surface}} m²</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-building" aria-hidden="true"></i>
                                        <span>façade: {{$sale->facade}} m</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-object-group" aria-hidden="true"></i>
                                        <span>RDC: {{$sale->rdc}} m²</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-warehouse" aria-hidden="true"></i>
                                        <span>1<sup>er</sup>: {{$sale->petage}} m²</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="{{route('product.detail',$sale->slug)}}">€{{number_format($sale->price)}}</a>
                                    </h3>

                                </div>
                                <div class="footer">
                                    <a>
                                        <i class="fa fa-map-marker"></i> {{\App\Models\Category::where('id',$sale->cat_id)->value('title')}}
                                        @if ($sale->child_cat_id != NULL)
                                            , {{\App\Models\Category::where('id',$sale->child_cat_id)->value('title')}}
                                        @endif
                                    </a>
                                    <br>
                                    <br>
                                    <span style="float: none">
                                        <i class="fa fa-calendar"></i> Disponibilité : {{$sale->date_d}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PROPERTIES FOR SALE -->
@endif
@if (count($product_rent)>0)
<!-- START SECTION PROPERTIES FOR RENT -->
<section class="recently portfolio home18 bg-white-2">
    <div class="container">
        <div class="sec-title">
            <h2><span>Locaux </span>à louer</h2>
        </div>
        <div class="portfolio col-xl-12">
            <div class="slick-lancers">
                @foreach ($product_rent as $rent)
                    @php
                        $photos = explode(",",$rent->photo);
                    @endphp

                <div class="agents-grid" data-aos="fade-up" >
                    <div class="landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="{{route('product.detail',$rent->slug)}}">Voir local</a><span class="category">{{$rent->title}}</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="{{route('product.detail',$rent->slug)}}" class="homes-img">
                                        @if ($rent->fond=='fdc')
                                        <div class="homes-tag button alt featured" title="Fond de commerce" >FDC</div>
                                        @endif

                                        <div class="homes-tag button sale rent">à louer</div>
                                        <div class="homes-price">{{\App\Models\Brand::where('id',$rent->brand_id)->value('title')}}</div>
                                        <img src="{{$photos[0]}}" alt="home-1" class="img-responsive" style="height: 250px;object-fit: cover;">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="{{route('product.detail',$rent->slug)}}" class="btn"><i class="fa fa-link"></i></a>
                                    @if(!empty($rent->video))

                                    <a href="{{$rent->video}}" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    @endif
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="{{route('product.detail',$rent->slug)}}">{{$rent->title}}</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="{{route('product.detail',$rent->slug)}}">
                                        <i class="fa fa-map-marker"></i><span>{{$rent->address}}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix">
                                    <li>
                                        <i class="fas fa-arrows-alt-h" aria-hidden="true"></i>
                                        <span>surface: {{$rent->surface}} m²</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-building" aria-hidden="true"></i>
                                        <span>façade: {{$rent->facade}} m</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-object-group" aria-hidden="true"></i>
                                        <span>RDC: {{$rent->rdc}} m²</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-warehouse" aria-hidden="true"></i>
                                        <span>1<sup>er</sup>: {{$rent->petage}} m²</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="{{route('product.detail',$rent->slug)}}">€{{number_format($rent->price)}}/mois</a>
                                    </h3>
                                </div>
                                <div class="footer">
                                    <a>
                                        <i class="fa fa-map-marker"></i> {{\App\Models\Category::where('id',$rent->cat_id)->value('title')}}
                                        @if ($rent->child_cat_id != NULL)
                                            , {{\App\Models\Category::where('id',$rent->child_cat_id)->value('title')}}
                                        @endif
                                    </a>
                                    <br>
                                    <br>
                                    <span style="float: none">
                                        <i class="fa fa-calendar"></i> Disponibilité : {{$rent->date_d}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PROPERTIES FOR RENT -->
@endif

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
@if (count($city)>1)

<!-- START SECTION POPULAR PLACES -->
<section class="visited-cities bg-white-2 home18">
    <div class="container">
        <div class="sec-title">
            <h2><span>Les villes </span>populaires</h2>
        </div>

        <div class="row">
            @foreach ($city as $ville)


            <div class="col-sm-6 col-lg-4 col-xl-4" data-aos="zoom-in" data-aos-delay="150">
                <!-- Image Box -->
                <a href="{{route('local.ville',$ville->slug)}}" class="img-box hover-effect">
                    <img src="{{$ville->photo}}" class="img-responsive" alt="">

                    <div class="img-box-content visible">
                        <h4>{{$ville->title}} </h4>
                        <span>{{\App\Models\Product::where(['cat_id'=>$ville->id,'status'=>'active'])->count()}} locals</span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- END SECTION POPULAR PLACES -->
@elseif (count($city) == 1)
<!-- START SECTION POPULAR PLACES -->
<section class="visited-cities bg-white-2 home18">
    <div class="container">
        <div class="sec-title">
            <h2><span>Les villes </span>populaires</h2>
        </div>

        <div class="row">
            @foreach ($city as $ville)


            <div class="col-sm-6 col-lg-4 col-xl-4" data-aos="zoom-in" data-aos-delay="150" style="margin-top: 22px;">
                <!-- Image Box -->
                <a href="{{route('local.ville',$ville->slug)}}" class="img-box hover-effect">
                    <img src="{{$ville->photo}}" class="img-responsive" alt="">

                    <div class="img-box-content visible">
                        <h4>{{$ville->title}} </h4>
                        <span>{{\App\Models\Product::where(['cat_id'=>$ville->id,'status'=>'active'])->count()}} locals</span>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="col-sm-6 col-lg-8 col-xl-8">
                <!-- START SECTION INFO-HELP -->
        <section class="info-help h17" style="padding: 1rem 0;">
            <div class="container">
                <div class="row info-head">
                    <div class="col-lg-6 col-md-8 col-xs-8" data-aos="fade-left">
                        <div class="info-text">
                            <h3>Meilleurs Locaux en France</h3>
                            <p class="pt-2">Nous vous aidons à trouver les meilleurs endroits et offres près de chez vous. Proposez des stratégies de survie gagnant-gagnant pour assurer une domination proactive à l'avenir.</p>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-3"></div>
                </div>
            </div>
        </section>
        <!-- END SECTION INFO-HELP -->
            </div>
        </div>
    </div>
</section>
<!-- END SECTION POPULAR PLACES -->
@endif

@if (count($feedback)>1)
<!-- START SECTION TESTIMONIALS -->
<section class="h18 testimonials">
    <div class="container">
        <div class="sec-title">
            <h2><span>Témoignage</span> de nos clients</h2>
           <!-- <p>There are many variations of lorem of Lorem Ipsum available for use a sit amet, consectetur debits adipisicing lacus.</p> -->
        </div>
        <div class="owl-carousel style1">
            @foreach ($feedback as $item)
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

@if (count($blog)> 0)


<!-- START SECTION BLOG -->
<section class="blog-section bg-white-2 home18">
    <div class="container">
        <div class="sec-title">
            <h2><span>Actualités & </span>Blogs</h2>
        </div>
        <div class="news-wrap">
            <div class="row">
                @foreach ($blog as $item)


                <div class="col-xl-4 col-md-6 col-xs-12">
                    <div class="news-item" data-aos="fade-up" data-aos-delay="150">
                        <a href="{{route('blog.detail',$item->slug)}}" class="news-img-link">
                            <div class="news-item-img">
                                <img class="img-responsive" src="{{$item->photo}}" alt="{{$item->title}}" style="object-fit: cover;height: 250px;">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="{{route('blog.detail',$item->slug)}}"><h3>{{$item->title}}</h3></a>
                            <div class="dates">
                                <span class="date">@php
                                    $date = date('Y-m-d',strtotime($item->updated_at));
                                    setlocale (LC_TIME, 'fr_FR.utf8','fra');
                                    echo (strftime("%A %d %B",strtotime($date)));
                                @endphp &nbsp;</span>
                            </div>
                            <div class="news-item-descr big-news">
                                <p>{!! substr(strip_tags($item->description),0,200)!!}...</p>
                            </div>
                            <br>
                            <div class="news-item-bottom">
                                <a href="{{route('blog.detail',$item->slug)}}" class="news-link">Voir plus...</a>
                                <div class="admin">
                                    <p>By, Hengxin</p>
                                    <img src="{{asset('frontend/images/logo hengxin black.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->
@endif

<section class="team bg-white-1 home18">
    <div class="container">
        <div class="sec-title">
            <h2><span>Notre </span>équipe</h2>
            <p>Nous réunissons nos compétences pour vous proposer les meilleurs biens.</p>
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
@section('scripts')
<script>
    var typed = new Typed('.typed', {
        strings: ["{{$banners[0]->title}} ^2000","欢迎来到恒信 ^2000"],
        smartBackspace: false,
        loop: true,
        showCursor: true,
        cursorChar: "|",
        typeSpeed: 50,
        backSpeed: 30,
        startDelay: 800
    });

</script>
<script>


    // :: Price Range Code

    $('.slider-range-price').each(function () {
        var min = $(this).data('min'),
            max = $(this).data('max'),
            unit = $(this).data('unit'),
            value_min = $(this).data('value-min'),
            value_max = $(this).data('value-max'),
            label_result = $(this).data('label-result'),
            t = $(this);
        $(this).slider({
            range: true,
            min: min,
            max: max,
            values: [value_min, value_max],
            slide: function (event, ui) {
                var result = label_result + " " + unit + ui.values[0] + ' - ' + unit + ui.values[1];
                t.closest('.slider-range').find('.range-price').html(result);
               // $('#amount').val(ui.values[0]+"-"+ui.values[1]);
                $('#price_range').val(ui.values[0]+"-"+ui.values[1]);
                $(".slider_amount").val("€" + ui.values[0].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " - €" + ui.values[1].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
            }
        });
    });
    $('.slider-range-surface').each(function () {
        var min = $(this).data('min'),
            max = $(this).data('max'),
            unit = $(this).data('unit'),
            value_min = $(this).data('value-min'),
            value_max = $(this).data('value-max'),
            label_result = $(this).data('label-result'),
            t = $(this);
        $(this).slider({
            range: true,
            min: min,
            max: max,
            values: [value_min, value_max],
            slide: function (event, ui) {
                var result = label_result + " " + unit + ui.values[0] + ' - ' + unit + ui.values[1];
                t.closest('.slider-range').find('.range-price').html(result);
               // $('#amount').val(ui.values[0]+"-"+ui.values[1]);
                $('#surface_range').val(ui.values[0]+"-"+ui.values[1]);
                $(".slider_surface").val("m²" + ui.values[0].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " - m²" + ui.values[1].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
            }
        });
    });

    $("#selType-vl4").change(function(){


var cat_id=$(this).val();


if(cat_id != ''){
    //alert(cat_id);
    $.ajax({
        url:"/locaux/"+cat_id+"/child",
        type:"POST",
        data:{
            _token:"{{csrf_token()}}",
            cat_id:cat_id
        },
        success:function(response){

            var html_option = "<select style='border: none;' id='child_cat_id' class='form-control' name='debarquement'><option value=''>Tous Débarquements</option>";

            if(response.status){
           //alert(cat_id);
              $('#child_cat_div').removeClass('d-none');
              $.each(response.data,function(slug,title){
                html_option += "<option value='"+slug+"'>"+title+"</option>";
              });
              html_option += '</select>';
            }else{
                $('#child_cat_div').addClass('d-none');
                $('#child_cat_div').empty();
            }
            $('#child_cat_div').html(html_option);

        }
    });
}else{
    $('#child_cat_div').addClass('d-none');
    $('#child_cat_div').empty();
}
});
</script>
@endsection

