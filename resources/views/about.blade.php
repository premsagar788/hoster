@extends('layouts.site')

@section('title', 'About')

@section('content')

<div class="jumbotron">
  <div class="container">
    <h1>About {{ config('app.name') }}</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
  </div>
</div>

<div class="container marketing pt-5 pb-5">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-6 col-sm-12">
      <img src="{{ asset('/images/aboutimg.jpg') }}" width="100%">
    </div>
    <div class="col-lg-6">
      <h2>About Us</h2>
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
      <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

</div>
<br>

@include('partials.faq')

@include('partials.partners')

@endsection