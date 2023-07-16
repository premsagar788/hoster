@extends('layouts.dashboard')

@section('title', 'User Orders')

@include('admin.sidebar')

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
						<td>Order No</td>
						<td>Payment Method</td>
						<td>Status</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					@if($orders)
					@foreach($orders as $order)
					<tr>
						<td>{{ $order->order_no }}</td>
						<td>{{ $order->payment_method }}</td>
						<td>
							@if ($order->status == 'Pending')
								<span class="text-danger">{{ $order->status }}</span>
							@elseif ($order->status == 'Paid')
								<span class="text-success">{{ $order->status }}</span>
							@endif
						</td>
						<td>
							<a href="/user/order/view/{{ $order->order_no }}" class="btn btn-success">
							<span class="fa fa-eye"></span> View</a>
							<a href="/user/order/delete/{{ $order->order_no }}" class="btn btn-danger">
							<span class="fa fa-trash"></span> Delete</a>
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