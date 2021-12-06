@extends('frontend.layouts.master')

@section('content')
    <!-- START SECTION PROPERTIES LISTING -->
    <section class="single-proper blog details" style="padding-top:130px!important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 blog-pots">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="headings-2 pt-0">
                                <div class="pro-wrapper">
                                    <div class="detail-wrapper-body">
                                        <div class="listing-title-bar">
                                            <h3>{{$product->title}} <span class="mrg-l-5 category-tag">@if ($product->conditions == 'rent')
                                                à louer
                                                @else
                                                à vendre
                                            @endif</span></h3>
                                            <div class="mt-0">
                                                <a href="#listing-location" class="listing-address">
                                                    <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>{{\App\Models\Category::where('id',$product->cat_id)->value('title')}}
                                                    @if ($product->child_cat_id != NULL)
                                                        , {{\App\Models\Category::where('id',$product->child_cat_id)->value('title')}}
                                                    @endif,{{$product->address}}
                                                </a>
                                            </div>


                                        </div>
                                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style mt-3">
                                            <p>Partager sur: </p>
                                            <a class="a2a_button_facebook"></a>
                                            <a class="a2a_button_linkedin"></a>
                                            <a class="a2a_button_twitter"></a>
                                            </div>
                                            <script>
                                            var a2a_config = a2a_config || {};
                                            a2a_config.locale = "fr";
                                            a2a_config.num_services = 4;
                                            </script>
                                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                                    </div>
                                    <div class="single detail-wrapper mr-2">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h4>@if ($product->conditions == 'rent')
                                                    €{{number_format($product->price)}}/mois
                                                    @else
                                                    €{{number_format($product->price)}}
                                                @endif</h4>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <p>{{$product->surface}} m²</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_data">
                                            <!-- input_cart -->
                                            <input type="hidden" class="product_id" value="{{$product->id}}">

                                            <button type="button" class="add-to-cart-btn btn btn-warning" style="color: white;">Ajouter à ma sélection</button>

                                        </div>
                                    </div>
                                </div>

                            </section>
                            <!-- main slider carousel items -->
                            <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                <h5 class="mb-4">Galerie</h5>
                                <div class="carousel-inner">
                                    @php
                                        $photos = explode(",",$product->photo);
                                        $i = 0;

                                    @endphp

                                    @foreach ($photos as $photo)
                                    <div class="@if ($i == 0)
                                    active
                                    @endif item carousel-item" data-slide-number="{{$i}}">
                                        <img src="{{$photo}}" class="img-fluid" alt="slider-listing" style="width: 100%;">
                                    </div>
                                    @php
                                        $i++;
                                    @endphp
                                    @endforeach


                                    <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left" style="color: #fff"></i></a>
                                    <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right" style="color: #fff"></i></a>

                                </div>
                                <!-- main slider carousel nav controls -->
                                <ul class="carousel-indicators smail-listing list-inline">
                                    @php
                                        $photos = explode(",",$product->photo);
                                        $i = 0;

                                    @endphp

                                    @foreach ($photos as $photo)
                                    <li class="list-inline-item @if ($i == 0)
                                    active
                                    @endif">
                                        <a id="carousel-selector-{{$i}}" class="selected" data-slide-to="{{$i}}" data-target="#listingDetailsSlider">
                                            <img src="{{$photo}}" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    @php
                                    $i++;
                                @endphp
                                @endforeach

                                </ul>
                                <!-- main slider carousel items -->
                            </div>
                            <div class="blog-info details mb-30">
                                <h5 class="mb-4">Description</h5>
                                <p class="mb-3">{!!$product->description!!}</p>

                            </div>
                        </div>
                    </div>
                    <div class="single homes-content details mb-30">
                        <!-- title -->
                        <h5 class="mb-4">Details de local</h5>
                        <ul class="homes-list clearfix">
                            <li>
                                <span class="font-weight-bold mr-1">Property ID:</span>
                                <span class="det">V254680</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Status:</span>
                                <span class="det">@if ($product->conditions == 'rent')
                                    à louer
                                    @else
                                    à vendre
                                @endif</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Surface:</span>
                                <span class="det">{{$product->surface}} m²</span>
                            </li>
                                @if ($product->facade != NULL)
                                <li>
                                    <span class="font-weight-bold mr-1">Façade:</span>
                                    <span class="det">{{$product->facade}} m</span>
                                </li>
                                @endif
                                @if ($product->rdc != NULL)
                            <li>
                                <span class="font-weight-bold mr-1">Rez de chaussée:</span>
                                <span class="det">{{$product->rdc}} m²</span>
                            </li>
                            @endif
                            @if ($product->petage != NULL)
                            <li>
                                <span class="font-weight-bold mr-1">Premiére étage:</span>
                                <span class="det">{{$product->petage}} m²</span>
                            </li>
                            @endif
                            <li>
                                <span class="font-weight-bold mr-1">Ville:</span>
                                <span class="det">{{\App\Models\Category::where('id',$product->cat_id)->value('title')}}</span>
                            </li>
                            @if (\App\Models\Category::where('id',$product->cat_child_id)->value('title') != NULL)
                            <li>
                                <span class="font-weight-bold mr-1">Débarquement:</span>
                                <span class="det">{{\App\Models\Category::where('id',$product->cat_child_id)->value('title')}}</span>
                            </li>
                            @endif
                            <li>
                                <span class="font-weight-bold mr-1">Specialité:</span>
                                <span class="det">{{\App\Models\Brand::where('id',$product->brand_id)->value('title')}}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Disponibilité:</span>
                                <span class="det">{{$product->date_d}}</span>
                            </li>
                        </ul>
                        <!-- title -->
                        <h5 class="mt-5">Conditions</h5>
                        <!-- cars List -->
                        <ul class="homes-list clearfix">
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>@if ($product->fond == "fdc")
                                    Fond de commerce
                                @elseif ($product->fond == "dab")
                                    Droit au bail
                                @elseif ($product->fond == "mc")

                                    Murs commerciaux

                                @elseif ($product->fond == "lp")
                                    Location pure
                                    @endif

                                </span>
                            </li>
                            @if ($product->extraction == "yes")
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>
                                    Licence numéro 4
                                </span>
                            </li>
                            @endif

                        </ul>
                    </div>

@if (!empty($product->video))

                    <div class="property wprt-image-video w50 pro" style="position: relative;">
                        <h5>Video de local</h5>
                        <img alt="image" src="{{$photos[0]}}">
                        <a class="icon-wrap popup-video popup-youtube" href="{{$product->video}}">
                            <i class="fa fa-play"></i>
                        </a>
                        <div class="iq-waves">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </div>

@endif
                </div>
                <aside class="col-lg-4 col-md-12 car">
                    <div class="single widget">
                        <!-- Start: Schedule a Tour -->

                        <div class="schedule widget-boxed mt-33 mt-0">
                            <div>
                                <h4><i class="fa fa-calendar pr-3 padd-r-10"></i>Demande d'informations</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="agent-contact-form-sidebar">
                                    <form name="contact_form" method="post" action="{{route('devis.submit')}}">
                                        @csrf
                                        <input type="hidden" name="nom_local" value="{{$product->title}}" >
                                        <input type="text" id="fname" name="name" value="{{old('name')}}" placeholder="Nom et Prénom" required />
                                        @error('name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <input type="number" id="pnumber" value="{{old('phone')}}" name="phone" placeholder="Numéro de téléphone" required />
                                        @error('phone')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <input type="email" id="emailid" name="email" placeholder="Adresse Email" value="{{old('email')}}" required />
                                        @error('email')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <textarea placeholder="Message" name="content" required>{{old('content')}}</textarea>
                                        @error('content')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <p> Fixez un Rendez-vous:</p>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 book">
                                                <input type="text" id="reservation-date" data-lang="fr" data-large-mode="true" data-dd-opt-format="y-mm-dd" data-min-year="2017" data-max-year="2040" data-id="datedropper-0" data-theme="my-style" class="form-control" name="date_d" value="{{old('date_d')}}" readonly="">
                                            </div>
                                            @error('date_d')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                            <div class="col-lg-6 col-md-12 book2">
                                                <input type="text" id="reservation-time" name="time_d" value="{{old('time_d')}}" class="form-control" readonly="">
                                            </div>
                                            @error('time_d')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <button type="submit" id="submit-contact" class="btn reservation btn-radius theme-btn full-width mrg-top-10">Envoyez</button>
                                    </form>
                                </div>

                            </div>
                        </div>


                        <!-- End: Schedule a Tour -->
                        <!-- end author-verified-badge -->
                        <div class="sidebar">
                            <div class="main-search-field-2">
                                <div class="widget-boxed mt-5">
                                    <div class="widget-boxed-header mb-5">
                                        <h4>Recommandations</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="slick-lancers">

                                        @foreach ($randomproducts as $rand)
                                        @php
                                            $photos = explode(",",$rand->photo);
                                        @endphp
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="{{route('product.detail',$rand->slug)}}" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">@if ($rand->conditions == 'rent')
                                                                €{{number_format($rand->price)}}/mois
                                                                @else
                                                                €{{number_format($rand->price)}}
                                                            @endif</span>
                                                            <span>@if ($rand->conditions == 'rent')
                                                                à louer
                                                                @else
                                                                à vendre
                                                            @endif</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">{{$rand->title}} <i>{{\App\Models\category::where('id',$rand->cat_id)->value('title')}}</i></span>

                                                        </div>
                                                        <img src="{{$photos[0]}}" alt="{{$rand->title}}">
                                                    </a>
                                                </div>
                                            </div>
                                           @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-boxed mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Dérnieres Annonces</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="recent-post">
                                            @foreach ($recentproducts as $recent)
                                            @php
                                            $photos = explode(",",$recent->photo);
                                            @endphp
                                            <div class="recent-main mb-2">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                <div class="recent-img">
                                                    <a href="{{route('product.detail',$recent->slug)}}"><img style="object-fit: cover;width: 354px;height: 100px;" src="{{$photos[0]}}" alt="{{$recent->title}}"></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="info-img">
                                                    <a href="{{route('product.detail',$recent->slug)}}">
                                                        <h6 title="{{$recent->title}}">{{substr($recent->title,0,50)}}...</h6></a>
                                                    <p>@if ($recent->conditions == 'rent')
                                                        €{{number_format($recent->price)}}/mois
                                                        @else
                                                        €{{number_format($recent->price)}}
                                                    @endif</p>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                                <!-- Start: Specials offer -->
                                <div class="widget-boxed popular mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Promo</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="banner"><img src="{{asset('frontend/images/single-property/banner.jpg')}}" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- START SIMILAR PROPERTIES -->
            <section class="similar-property featured portfolio p-0 bg-white-inner">
                <div class="container">
                    <h5>Locaux similaires</h5>
                    <div class="row portfolio-items">


                            @foreach ($product->rel_prods as $related)
                    @php
                        $photos = explode(",",$related->photo);
                    @endphp
<div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                <div class="agents-grid" data-aos="fade-up" >
                    <div class="landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="{{route('product.detail',$related->slug)}}">Voir local</a><span class="category">{{$related->title}}</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="{{route('product.detail',$related->slug)}}" class="homes-img">
                                        @if ($related->fond=='yes')
                                        <div class="homes-tag button alt featured" title="Fond de commerce" >FDC</div>
                                        @endif

                                        <div class="homes-tag button alt sale">à vendre</div>
                                        <div class="homes-price">{{\App\Models\Brand::where('id',$related->brand_id)->value('title')}}</div>
                                        <img src="{{$photos[0]}}" alt="home-1" class="img-responsive" style="height: 250px;object-fit: cover;">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="{{route('product.detail',$related->slug)}}" class="btn"><i class="fa fa-link"></i></a>
                                    @if(!empty($related->video))

                                    <a href="{{$related->video}}" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    @endif
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="{{route('product.detail',$related->slug)}}">{{$related->title}}</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="{{route('product.detail',$related->slug)}}">
                                        <i class="fa fa-map-marker"></i><span>{{$related->address}}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix">
                                    <li>
                                        <i class="fas fa-arrows-alt-h" aria-hidden="true"></i>
                                        <span>surface: {{$related->surface}} m²</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-building" aria-hidden="true"></i>
                                        <span>façade: {{$related->facade}} m</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-object-group" aria-hidden="true"></i>
                                        <span>RDC: {{$related->rdc}} m²</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-warehouse" aria-hidden="true"></i>
                                        <span>1<sup>er</sup>: {{$related->petage}} m²</span>
                                    </li>
                                </ul>
                                <!-- Price -->
                                <div class="price-properties">
                                    <h3 class="title mt-3">
                                        <a href="{{route('product.detail',$related->slug)}}">€{{number_format($related->price)}}</a>
                                    </h3>
                                </div>
                                <div class="footer">
                                    <a>
                                        <i class="fa fa-map-marker"></i> {{\App\Models\Category::where('id',$related->cat_id)->value('title')}}
                                        @if ($related->child_cat_id != NULL)
                                            , {{\App\Models\Category::where('id',$related->child_cat_id)->value('title')}}
                                        @endif
                                    </a>
                                    <br>
                                    <br>
                                    <span style="float: none">
                                        <i class="fa fa-calendar"></i> Disponibilité : {{$related->date_d}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                @endforeach

                    </div>
                </div>
            </section>
            <!-- END SIMILAR PROPERTIES -->
        </div>
    </section>
    <!-- END SECTION PROPERTIES LISTING -->
@endsection
@section('upscripts')
<script src="{{asset('frontend/js/search.js')}}"></script>
<script src="{{asset('frontend/js/slick4.js')}}"></script>


@endsection
@section('scripts')
@if(session()->has('success'))

<script>
 $(document).ready(function () {
alertify.set('notifier','position','bottom-left');
alertify.success('{{session()->get('success')}}');
 });
</script>
@endif
@endsection
