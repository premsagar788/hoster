@extends('layouts.site')

@section('title', 'Checkout')

@section('content')

<div class="jumbotron">
  <div class="container">
    <h1>Checkout</h1>
    <p>Place order and create your website today!</p>
  </div>
</div>
<section>
  <div class="container">
    <div class="row">
      <div class="col col-lg-8 col-sm-12 col-md-6">
        <div class="form-holder">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <form method="post" action="{{ url('checkout') }}">
            @csrf

            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <label for="inputName1">Name</label>
                <input id="inputName1" type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" required>
              </div>
              <div class="col-xs-12 col-sm-6">
                <label for="inputEmail1">Email</label>
                <input id="inputEmail1" type="email" name="email" class="form-control"  value="@auth {{ Auth::user()->email }} @endauth" readonly="">
              </div>
              <div class="col-xs-12 col-sm-6">
                <label for="inputName1">Address</label>
                <input id="inputName1" type="text" name="address" value="@auth {{ Auth::user()->address }} @endauth" class="form-control" required>
              </div>
              <div class="col-xs-12 col-sm-6">
                <label for="inputEmail1">City</label>
                <input id="inputEmail1" type="text" name="city" class="form-control" value="@auth {{ Auth::user()->city }} @endauth" required>
              </div>
              <div class="col-xs-12 col-sm-6">
                <label for="inputEmail1">Country</label>
                <input id="inputEmail1" type="text" name="country" class="form-control" value="@auth {{ Auth::user()->country }} @endauth" required>
              </div>
              <div class="col-xs-12 col-sm-6">
                <label for="inputMobile">Mobile Number</label>
                <input id="inputMobile" type="number" name="phone" value="@auth {{ Auth::user()->phone }} @endauth" class="form-control" required>
              </div>
              <div class="col-xs-12">
                <label for="inputSubject1">Payment Method</label>
                <div class="select-holder">
                  <select id="inputSubject1" name="payment" class="form-control" required>
                    <option value="" disabled selected>Select Payment Method</option>
                    <option>Easy Paisa</option>
                    <option>Jazz Cash</option>
                    <option>Bank Account</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-12">
                <label for="inputMessage1">Your message</label>
                <textarea id="inputMessage1" name="notes" class="form-control" rows="2" placeholder="You can enter any additional notes or information you want included with your order here..."></textarea>
              </div>
              <div class="col-xs-12 pt-2">
                <div class="submit-holder">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col col-lg-4 col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Your cart</h5>
            @if(session('cart') !== null)
              @foreach(session('cart') as $product)
                <p><u>Product:</u> {{ $product['name'] }}</p>
                <p><u>Quantity:</u> {{ count((array) session('cart')) }}</p>
                <p><u>Price:</u> {{ $product['price'] }}</p>
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('partials.partners')

@endsection