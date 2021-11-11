<div class="main-menu">
	<header class="header">
		<a href="{{route('admin')}}" class="logo">Hengxin</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="{{route('admin')}}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Tableau de bord</span></a>
				</li>
				<li>
					<a class="waves-effect parent-item" href="{{route('banner.edit',1)}}"><i class="menu-icon mdi mdi-image"></i><span>Gestion de la bannière</span></a>

				</li>
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-sitemap"></i><span>Gestion des villes</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('localisation.index')}}">Villes/Débarquements</a></li>
						<li><a href="{{route('localisation.create')}}">Ajouter Ville</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi fa fa-shopping-bag"></i><span>Gestion des Specialités</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('specialite.index')}}">specialités</a></li>
						<li><a href="{{route('specialite.create')}}">Ajouter specialité</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-briefcase"></i><span>Gestion des locaux</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('local.index')}}">Locaux</a></li>
						<li><a href="{{route('local.create')}}">Ajouter local</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-newspaper"></i><span>Gestion d'actualités</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('actualite.index')}}">Actualités</a></li>
						<li><a href="{{route('actualite.create')}}">Ajouter actualité</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fas fa-handshake"></i><span>Gestion d'équipe</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('equipe.index')}}">équipe</a></li>
						<li><a href="{{route('equipe.create')}}">Ajouter Membre</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fas fa-comment-dots"></i><span>Gestion des Témoignages</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('feedback.index')}}">Témoignages</a></li>
						<li><a href="{{route('feedback.create')}}">Ajouter témoignage</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-users"></i><span>Gestion des admins</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('user.index')}}">Tous admins</a></li>
						<li><a href="{{route('user.create')}}">Ajouter admin</a></li>
					</ul>
				</li>
                <li>
					<a class="waves-effect" href="{{route('contacts.index')}}"><i class="menu-icon fa fa-envelope"></i><span>Messages</span></a>
                </li>
                <li>
					<a class="waves-effect" href="{{route('devis.index')}}"><i class="menu-icon fas fa-globe-europe"></i><span>Devis</span></a>
                </li>
                <li>
					<a class="waves-effect" href="{{route('newsletter.index')}}"><i class="menu-icon fas fa-clipboard-list"></i><span>NewsLetter</span></a>
                </li>
               <!-- <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-tag"></i><span>Post tag</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="icons-font-awesome-icons.html">Font Awesome</a></li>
						<li><a href="icons-fontello.html">Fontello</a></li>
						<li><a href="icons-material-icons.html">Material Design Icons</a></li>
						<li><a href="icons-material-design-iconic.html">Material Design Iconic Font</a></li>
						<li><a href="icons-themify-icons.html">Themify Icons</a></li>
					</ul>
				</li>
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-sitemap"></i><span>Post Category</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="icons-font-awesome-icons.html">Font Awesome</a></li>
						<li><a href="icons-fontello.html">Fontello</a></li>
						<li><a href="icons-material-icons.html">Material Design Icons</a></li>
						<li><a href="icons-material-design-iconic.html">Material Design Iconic Font</a></li>
						<li><a href="icons-themify-icons.html">Themify Icons</a></li>
					</ul>
				</li>

                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-star"></i><span>Review Management</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="icons-font-awesome-icons.html">Font Awesome</a></li>
						<li><a href="icons-fontello.html">Fontello</a></li>
						<li><a href="icons-material-icons.html">Material Design Icons</a></li>
						<li><a href="icons-material-design-iconic.html">Material Design Iconic Font</a></li>
						<li><a href="icons-themify-icons.html">Themify Icons</a></li>
					</ul>
				</li>
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-gift"></i><span>Coupon Management</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="icons-font-awesome-icons.html">Font Awesome</a></li>
						<li><a href="icons-fontello.html">Fontello</a></li>
						<li><a href="icons-material-icons.html">Material Design Icons</a></li>
						<li><a href="icons-material-design-iconic.html">Material Design Iconic Font</a></li>
						<li><a href="icons-themify-icons.html">Themify Icons</a></li>
					</ul>
				</li>

				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-comment"></i><span>Comments Management</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="icons-font-awesome-icons.html">Font Awesome</a></li>
						<li><a href="icons-fontello.html">Fontello</a></li>
						<li><a href="icons-material-icons.html">Material Design Icons</a></li>
						<li><a href="icons-material-design-iconic.html">Material Design Iconic Font</a></li>
						<li><a href="icons-themify-icons.html">Themify Icons</a></li>
					</ul>
				</li>-->
                <li>
					<a class="waves-effect" href="{{route('about.index')}}"><i class="menu-icon mdi mdi-settings"></i><span>à propos</span></a>
                </li>
			</ul>
		</div>
	</div>
</div>

