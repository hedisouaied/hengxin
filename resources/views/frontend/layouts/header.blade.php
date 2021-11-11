<header id="header-container" class="header head-tr">
    <!-- Header -->
    <div id="header" class="head-tr bottom @if (!isset($header_home))
    cloned sticky
    @endif">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a style="border: solid #cc5857;padding: 5px;" href="{{route('home')}}"><img src="{{asset('frontend/images/logo hengxin.svg')}}" data-sticky-logo="{{asset('frontend/images/logo hengxin black.svg')}}" style="margin: 6px;" alt="logo-hengxin"></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 head-tr">
                    <ul id="responsive">
                        <li><a href="{{route('home')}}">Accueil</a></li>
                        <li><a href="{{route('tous.locaux')}}">Tous les locaux</a></li>
                            <li><a href="#">Villes</a>
                                <ul>
                                    @foreach (\App\Models\Category::where('status','active')->where('is_parent', 1)->get() as $city)

                                <li>
                                    <a href="{{route('local.ville',$city->slug)}}">{{$city->title}}</a>
                                </li>
                                    @endforeach
                                </ul>

                            </li>
                            <li><a href="{{route('vendre.locaux')}}">À vendre</a></li>
                            <li><a href="{{route('louer.locaux')}}">À louer</a></li>

                            <li><a href="{{route('blog.list')}}">Actualités</a></li>
                            <li><a href="{{route('about.us')}}">À-propos</a></li>
                            <li><a href="{{route('contact.us')}}">Contact</a></li>

                            <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-3 border-bottom-0"><a href="{{route('maselection.status')}}" class="button border btn-lg btn-block text-center">(<span class="basket-item-count">0</span>) Ma séléction<i class="fas fa-heart ml-2"></i></a></li>

                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->

            <!-- Right Side Content / End -->
            <div class="right-side d-none d-none d-lg-none d-xl-flex">
                <!-- Header Widget -->
                <div class="header-widget">
                    <a href="{{route('maselection.status')}}" class="button border">Ma séléction (<span class="basket-item-count">0</span>)</a>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->



        </div>
    </div>
    <!-- Header / End -->

</header>
