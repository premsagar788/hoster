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
          <form method="post" action="{{ url('checkout') }}">
            @csrf
            <input type="hidden" name="id" value="{{ Auth::id() }}">

            @if(!Auth::user()) 

            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <label for="inputName1">Name</label>
                <input id="inputName1" type="text"  class="form-control" name="name" required>
              </div>
              <div class="col-xs-12 col-sm-6">
                <label for="inputEmail1">Email</label>
                <input id="inputEmail1" type="email" class="form-control" required readonly="">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <label for="inputName1">Address</label>
                <input id="inputName1" type="text" name="address" class="form-control" >
              </div>
              <div class="col-xs-12 col-sm-6">
                <label for="inputEmail1">City</label>
                <input id="inputEmail1" type="text" name="city" class="form-control" required >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <label for="inputName1">Region</label>
                <input id="inputName1" type="text" name="region" class="form-control" >
              </div>
              <div class="col-xs-12 col-sm-6">
                <label for="inputEmail1">Country</label>
                <input id="inputEmail1" type="text" name="country" class="form-control" required >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <label for="inputName1">Mobile Number</label>
                <input id="inputName1" type="number" name="mobile" class="form-control" >
              </div>
              <div class="col-xs-12 col-sm-6">
                <label for="inputEmail1">Phone Number</label>
                <input id="inputEmail1" type="number" name="phone" class="form-control" >
              </div>
            </div>
            <div class="row">
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
            </div>
            <div class="row">
              <div class="col-xs-12">
                <label for="inputMessage1">Your message</label>
                <textarea id="inputMessage1" name="notes" class="form-control" rows="2" placeholder="You can enter any additional notes or information you want included with your order here..."></textarea>
              </div>
            </div>

            @else
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <label for="inputName1">Name</label>
                <input id="inputName1" type="text" value="{{ Auth::user()->name }}" class="form-control" name="name" required>
              </div>
              <div class="col-xs-12 col-sm-6">
                <label for="inputEmail1">Email</label>
                <input id="inputEmail1" type="email" class="form-control" required value="{{ Auth::user()->email }}" readonly="">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <label for="inputName1">Address</label>
                <input id="inputName1" type="text" name="address" value="{{ Auth::user()->address }}" class="form-control" >
              </div>
              <div class="col-xs-12 col-sm-6">
                <label for="inputEmail1">City</label>
                <input id="inputEmail1" type="text" name="city" class="form-control" required value="{{ Auth::user()->city }}" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <label for="inputName1">Region</label>
                <input id="inputName1" type="text" name="region" value="{{ Auth::user()->region }}" class="form-control" >
              </div>
              <div class="col-xs-12 col-sm-6">
                <label for="inputEmail1">Country</label>
                <input id="inputEmail1" type="text" name="country" class="form-control" required value="{{ Auth::user()->country }}" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <label for="inputName1">Mobile Number</label>
                <input id="inputName1" type="number" name="mobile" value="{{ Auth::user()->mobile }}" class="form-control" >
              </div>
              <div class="col-xs-12 col-sm-6">
                <label for="inputEmail1">Phone Number</label>
                <input id="inputEmail1" type="number" name="phone" class="form-control"  value="{{ Auth::user()->phone }}" >
              </div>
            </div>
            <div class="row">
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
            </div>
            <div class="row">
              <div class="col-xs-12">
                <label for="inputMessage1">Your message</label>
                <textarea id="inputMessage1" name="notes" class="form-control" rows="2" placeholder="You can enter any additional notes or information you want included with your order here..."></textarea>
              </div>
            </div>
            @endif
            <div class="row">
              <div class="col-xs-12">
                <div class="submit-holder">
                  <button type="submit" class="hbtn hbtn-blue">Send</button>
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