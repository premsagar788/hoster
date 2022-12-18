@extends('layouts.dashboard')

@section('title', 'User Orders')

@include('user.sidebar')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Orders</h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
			class="fas fa-download fa-sm text-white-50"></i> Export orders</a>
		</div>

		<!-- Content Row -->
		<div class="row">
			<table class="table table-hover table-bordered table-responsive-sm">
				<thead class="bg-dark text-white">
					<tr>
						<td>Product</td>
						<td>Year/(s)</td>
						<td>Price</td>
						<td>Status</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					@if($orders)
					@foreach($orders as $order)
					<tr>
						<td>{{ $order->product }}</td>
						<td>{{ $order->quantity }}</td>
						<td>{{ $order->price }}</td>
						<td>
							@if ($order->status == 'Pending')
								<span class="text-danger">{{ $order->status }}</span>
							@elseif ($order->status == 'Paid')
								<span class="text-success">{{ $order->status }}</span>
							@endif
						</td>
						<td>
							<a href="#" class="btn btn-primary">Edit</a>
							<a href="#" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>

	<!-- /.container-fluid -->
	@endsection