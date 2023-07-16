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

	<!-- Marketing messaging and featurettes
		================================================== -->
		<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">
	<!-- Three columns of text below the carousel -->
	<div class="row">
		<div class="col-lg-4">
			<i class="fa fa-cloud fa-5x"></i>
			<p class="heading">Suprior Speed Performance</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eg et dolor. Aenean massa.Cum sociis nato que penatibuset.</p>
			<p><a class="btn btn-dark" href="#" role="button">Read More</a></p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
			<i class="fa fa-server fa-5x"></i>
			<p class="heading">Powerful Control Panel</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eg et dolor. Aenean massa.Cum sociis nato que penatibuset.</p>
			<p><a class="btn btn-dark" href="#" role="button">Read More</a></p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
			<i class="fa fa-globe fa-5x"></i>
			<p class="heading">Guranteed 99.9% Uptime</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eg et dolor. Aenean massa.Cum sociis nato que penatibuset.</p>
			<p><a class="btn btn-dark" href="#" role="button">Read More</a></p>
		</div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
</div>

<section class="pricing-section">
	<h2 class="text-center">Plan and Pricing</h2>
	<p class="text-center">Cum sociis natoque penatibus et magnis dis parturient montes, nasceturridiculus mus.donequam felis, ultricies nec, pellentesque eu.</p>
	<br>
	<div class="container">
		<div class="row row-cols-1 row-cols-md-4 mb-4 text-center">
			<div class="col">
				<div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-header py-3">
						<h4 class="my-0 fw-normal">Free</h4>
					</div>
					<div class="card-body">
						<h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
						<ul class="list-unstyled mt-3 mb-4">
							<li>10 users included</li>
							<li>2 GB of storage</li>
							<li>Email support</li>
							<li>Help center access</li>
						</ul>
						<button type="button" class="w-100 btn-lg btn-outline-primary">Sign up for free</button>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-header py-3">
						<h4 class="my-0 fw-normal">Standard</h4>
					</div>
					<div class="card-body">
						<h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
						<ul class="list-unstyled mt-3 mb-4">
							<li>20 users included</li>
							<li>10 GB of storage</li>
							<li>Priority email support</li>
							<li>Help center access</li>
						</ul>
						<button type="button" class="w-100 btn-lg btn-outline-primary">Get started</button>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-header py-3">
						<h4 class="my-0 fw-normal">Pro</h4>
					</div>
					<div class="card-body">
						<h1 class="card-title pricing-card-title">$20<small class="text-muted fw-light">/mo</small></h1>
						<ul class="list-unstyled mt-3 mb-4">
							<li>20 users included</li>
							<li>10 GB of storage</li>
							<li>Priority email support</li>
							<li>Help center access</li>
						</ul>
						<button type="button" class="w-100 btn-lg btn-outline-primary">Get started</button>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card mb-4 rounded-3 shadow-sm border-primary">
					<div class="card-header py-3 text-white bg-primary border-primary">
						<h4 class="my-0 fw-normal">Enterprise</h4>
					</div>
					<div class="card-body">
						<h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
						<ul class="list-unstyled mt-3 mb-4">
							<li>30 users included</li>
							<li>15 GB of storage</li>
							<li>Phone and email support</li>
							<li>Help center access</li>
						</ul>
						<button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- START THE FEATURETTES -->

<div class="container pt-5">
	<div class="row featurette">
		<div class="col-md-7">
			<h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
			<p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
		</div>
		<div class="col-md-5">
			<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
		</div>
	</div>

	<div class="row featurette pb-5 pt-5">
		<div class="col-md-7 order-md-2">
			<h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
			<p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
		</div>
		<div class="col-md-5 order-md-1">
			<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

		</div>
	</div>
	<!-- /END THE FEATURETTES -->
</div><!-- /.container -->

@endsection