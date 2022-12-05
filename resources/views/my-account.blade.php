@extends('layouts.site')

@section('title', 'My Account')

@section('content')

<div class="jumbotron">
  <div class="container">
    <h1>My Account</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
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

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <i class="fa fa-cloud fa-5x"></i>
      <h2>Heading</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
      <p><a class="btn btn-dark" href="#" role="button">View details »</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <i class="fa fa-server fa-5x"></i>
      <h2>Heading</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
      <p><a class="btn btn-dark" href="#" role="button">View details »</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <i class="fa fa-globe fa-5x"></i>
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-dark" href="#" role="button">View details »</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

</div>
@endsection