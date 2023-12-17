@extends('layouts.site')

@section('title', 'Domains')

@section('content')

<div class="jumbotron">
  <div class="container">
    <h1>Find the perfect domain!</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    @if (session('success'))
    <div class="custom-toast">
      <strong class="mr-auto">Notification</strong>
      <small>Product added to the cart!</small>
    </div>
    @endif

    <form action="{{ url('/domains') }}" method="post">
      @csrf
      <div class="col col-lg-4 col-md-6 col-sm-12 mb-3">
        <input type="text" name="domain" class="form-control col col-lg-4" placeholder="Enter your preferred domain name" @if(isset($domain)) value="{{ $domain }}" @endif required>
      </div>
      <input type="submit" name="submit" value="Check »" class="btn btn-primary btn-lg">
    </form>
    @if(isset($status))
    @if($status == 'Unavailable')
    Domain is already registered! <a href="{{ url('whois/'.$domain) }}" class="btn btn-danger">Check Whois information!</a>
    @else
    Domain is available! <a href="{{ url('add-to-cart/'. $domain) }}" class="btn btn-success">Add to cart</a>
    @endif
    @endif
  </div>
</div>


<div class="row">
  <div class="col col-lg-12 col-sm-12 col-md-12">

  </div>
</div>

@include('partials.faq')

@include('partials.partners')

@endsection
