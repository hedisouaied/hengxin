@extends('backend.layouts.master')


@section('content')

<div id="wrapper">
	<div class="main-content">
        <div class="row small-spacing">
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-success text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-diamond"></i>
						<p class="text text-white"><a class="text-white" href="{{route('local.index')}}">Local</a></p>
						<h2 class="counter">{{\App\Models\Product::count()}}</h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-info text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fas fa-city"></i>
						<p class="text text-white"><a class="text-white" href="{{route('localisation.index')}}">Ville</a></p>
						<h2 class="counter">{{\App\Models\Category::where('is_parent',1)->count()}}</h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-danger text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fas fa-globe-europe"></i>
						<p class="text text-white"><a class="text-white" href="{{route('devis.index')}}">devis</a></p>
						<h2 class="counter">{{\App\Models\devis::count()}}</h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-warning text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-envelope"></i>
						<p class="text text-white"><a class="text-white" href="{{route('contacts.index')}}">messages</a></p>
						<h2 class="counter">{{\App\Models\Contact::count()}}</h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
		</div>
		<!-- .row -->


		<div class="row small-spacing">
			<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Dérnier Témoignage</h4>
					<div class="review-list">
                        @foreach (\App\Models\Feedback::where('status','active')->orderby('id', 'DESC')->limit(5)->get() as $rev)
						<div class="review-item">
							<div class="top">
								<div class="name">{{$rev->title}}</div>
								<!-- /.name -->
								<div class="date">{{$rev->updated_at}}</div>
								<!-- /.date -->
							</div>
							<!-- /.top -->
							<div class="desc">{{$rev->description}}</div>
							<!-- /.desc -->
						</div>
                        @endforeach
						<!-- /.review-item -->
					</div>
					<!-- /.review-list -->
				</div>
				<!-- /.box-content -->
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.main-content -->
</div>

@endsection
