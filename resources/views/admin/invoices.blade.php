@extends('layouts.dashboard')

@section('title', 'User Invoices')

@include('admin.sidebar')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Invoices</h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
			class="fas fa-download fa-sm text-white-50"></i> Export invoices</a>
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
					@if($invoices)
					@foreach($invoices as $invoice)
					<tr>
						<td>{{ $invoice->product }}</td>
						<td>{{ $invoice->quantity }}</td>
						<td>{{ $invoice->price }}</td>
						<td>
							@if ($invoice->status == 'Pending')
								<span class="text-danger">{{ $invoice->status }}</span>
							@elseif ($invoice->status == 'Paid')
								<span class="text-success">{{ $invoice->status }}</span>
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

	<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
	<script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>