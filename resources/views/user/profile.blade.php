@extends('layouts.dashboard')

@section('title', 'User Profile')

@include('user.sidebar')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Profile</h1>
	</div>

	@if($errors->any())
		@foreach ($errors->all() as $error)
	    	<p>{{ $error }}</p>
	    @endforeach
	@endif

	@if(session('message'))
		<p class="text-success">{{ session('message') }}</p>
	@endif

	<!-- Content Row -->
	<div class="row">
		<div class="col-lg-9">
			<form class="user" method="post" action="{{ url('/user/profile') }}">
				@csrf
				<div class="form-group">
					<input type="text" class="form-control form-control-user" placeholder="First Name" value="{{ auth()->user()->name }}" name="fullname">
				</div>
				<div class="form-group">
					<input type="email" class="form-control form-control-user" placeholder="Email Address" value="{{ auth()->user()->email }}" readonly="">
				</div>
				<div class="form-group row">
					<div class="col-sm-6 mb-3 mb-sm-0">
						<input type="text" class="form-control form-control-user" placeholder="Enter your address" value="{{ auth()->user()->address }}" name="address">
					</div>
					<div class="col-sm-6">
						<input type="text" class="form-control form-control-user" placeholder="Enter city" value="{{ auth()->user()->city }}" name="city">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-6 mb-3 mb-sm-0">
						<input type="text" class="form-control form-control-user" placeholder="Enter country of residence" value="{{ auth()->user()->country }}" name="country">
					</div>
					<div class="col-sm-6">
						<input type="text" class="form-control form-control-user" placeholder="Enter phone number" value="{{ auth()->user()->phone }}" name="phone">
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
		</div>
		<div class="col lg-3 bg-gradient-warning">
			<span class="bg-dark"></span>
		</div>
	</div>
</div>

<!-- /.container-fluid -->
@endsection