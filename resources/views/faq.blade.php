@extends('layouts.site')

@section('title', 'FAQ')

@section('content')

<div class="jumbotron">
  <div class="container">
    <h1>Frequently Asked Questions</h1>
    <p>These are the few of the questions asked by customers according to different case studies.</p>
    <p><a class="btn btn-primary" href="#" role="button">Learn more »</a></p>
  </div>
</div>  

@include('partials.faq')

@include('partials.partners')

@endsection