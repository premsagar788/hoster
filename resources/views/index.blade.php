@extends('layouts.site')

@section('title', 'Home - Web hosting & Domain')

@section('content')

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="container">
				<div class="carousel-caption-first-slide text-start">
					<h1>Find your perfect domain</h1>
					<p>Enter your domain name & start your business today!</p>
					<form action="{{ url('/domains') }}" method="post">
						@csrf
						<div class="col col-lg-4 col-md-6 col-sm-12 mb-3">
							<input type="text" name="domain" class="form-control col col-lg-4" placeholder="Enter your preferred domain name" required />
						</div>
						<input type="submit" name="submit" value="Check »" class="btn btn-primary btn-lg" >
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container marketing">
	<!-- Three columns of text below the carousel -->
	<div class="row">
		<div class="col-lg-4">
			<i class="fa fa-cloud fa-5x"></i>
			<p class="heading">Suprior Speed Performance</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eg et dolor. Aenean massa.Cum sociis nato que penatibuset.</p>
			<p><a class="btn btn-primary" href="{{ asset('/about') }}" role="button">Read More</a></p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
			<i class="fa fa-server fa-5x"></i>
			<p class="heading">Powerful Control Panel</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eg et dolor. Aenean massa.Cum sociis nato que penatibuset.</p>
			<p><a class="btn btn-primary" href="{{ asset('/about') }}" role="button">Read More</a></p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
			<i class="fa fa-globe fa-5x"></i>
			<p class="heading">Guranteed 99.9% Uptime</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eg et dolor. Aenean massa.Cum sociis nato que penatibuset.</p>
			<p><a class="btn btn-primary" href="{{ asset('/about') }}" role="button">Read More</a></p>
		</div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
</div>

@include('partials.pricing')

@include('partials.faq')

@include('partials.partners')

@endsection