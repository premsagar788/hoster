@section('sidebar')

<!-- <li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
	aria-expanded="true" aria-controls="collapseTwo">
	<i class="fas fa-fw fa-cog"></i>
	<span>Components</span>
</a>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
	<div class="bg-white py-2 collapse-inner rounded">
		<h6 class="collapse-header">Custom Components:</h6>
		<a class="collapse-item" href="buttons.html">Buttons</a>
		<a class="collapse-item" href="cards.html">Cards</a>
	</div>
</div>
</li> -->

<li class="nav-item">
	<a class="nav-link" href="{{ url('admin/orders') }}">
		<i class="fas fa-fw fa-shopping-cart"></i>
		<span>Orders</span>
	</a>
</li>

<li class="nav-item">
	<a class="nav-link" href="{{ url('admin/invoices') }}">
		<i class="fas fa-fw fa-file"></i>
		<span>Invoices</span>
	</a>
</li>

<li class="nav-item">
	<a class="nav-link" href="{{ url('admin/profile') }}">
		<i class="fas fa-fw fa-user"></i>
		<span>Profile</span>
	</a>
</li>
@endsection