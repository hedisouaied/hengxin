 <!-- START FOOTER -->
 <footer class="first-footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="netabout">
                        <a href="{{route('home')}}" class="logo">
                            <img style="width: 40%" src="{{asset('frontend/images/logo-hengxin-white.svg')}}" alt="netcom">
                        </a>
                        <p>{{get_setting('content')}}</p>
                    </div>
                    <div class="contactus">
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p class="in-p">{{get_setting('address')}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p class="in-p">{{get_setting('phone')}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p class="in-p ti">{{get_setting('email')}}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>Plan de site</h3>
                        <div class="nav-footer">
                            <ul>
                                <li><a href="{{route('home')}}">Accueil</a></li>
                                <li><a href="{{route('tous.locaux')}}">Tous locaux</a></li>
                                <li><a href="{{route('blog.list')}}">Actualités</a></li>
                                <li><a href="{{route('home')}}">À-propos</a></li>
                                <li class="no-mgb"><a href="{{route('home')}}">Contact</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget">
                        <h3>Actualités</h3>
                        <div class="twitter-widget contuct">
                            <div class="twitter-area">
                                @foreach (\App\Models\Blog::where('status','active')->orderBy('id', 'DESC')->limit(3)->get() as $footer_blogs)
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <i class="fas fa-blog" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5><a href="{{route('blog.detail',$footer_blogs->slug)}}">@Hengxin</a> {{$footer_blogs->title}}</h5>
                                        <h4>@php
                                            $date = date('Y-m-d',strtotime($footer_blogs->updated_at));
                                            setlocale (LC_TIME, 'fr_FR.utf8','fra');
                                            echo (strftime("%A %d %B",strtotime($date)));
                                        @endphp</h4>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="newsletters">
                        <h3>Newsletters</h3>
                        <p>Inscrivez-vous à notre newsletter pour obtenir les dernières mises à jour et offres. Abonnez-vous pour recevoir des nouvelles dans votre boîte de réception.</p>
                    </div>
                    <div class="bloq-email form-inline">
                        <label for="subscribeEmail" class="error"></label>
                        <div class="email news_data">
                            <input class="news_id" type="email" name="email" placeholder="Entrez Votre Email">
                                @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            <input type="submit" class="add-to-news-btn" value="Abonnez">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <p>Made with&nbsp; <img src="{{asset('frontend/images/heart-icon.png')}}" alt="heart-icon" width="17" height="17">&nbsp; By <a style="color: white;" href="https://tounesconnect.com/">TounesConnect © 2021 All Rights Reserved</a></p>
            <ul class="netsocials">
                @if (get_setting('facebook') != "#")
                <li><a href="{{get_setting('facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                @endif
                @if (get_setting('linkedin') != "#")
                <li><a href="{{get_setting('linkedin')}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                @endif
                @if (get_setting('instagram') != "#")
                <li><a href="{{get_setting('instagram')}}"><i class="fab fa-instagram"></i></a></li>
                @endif
                @if (get_setting('twitter') != "#")
                <li><a href="{{get_setting('twitter')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                @endif
                @if (get_setting('youtube') != "#")
                <li><a href="{{get_setting('youtube')}}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                @endif
            </ul>

        </div>
    </div>

</footer>

<a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
<!-- END FOOTER -->
