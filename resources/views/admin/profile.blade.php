@extends('layouts.dashboard')

@section('title', 'Admin Dashboard')

@include('admin.sidebar')

@section('content')
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Profile</h1>
		</div>

		<!-- Content Row -->
		<div class="row">


		</div>
	</div>
	<!-- /.container-fluid -->
@endsection

<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>