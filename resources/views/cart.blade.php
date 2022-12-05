@extends('layouts.site')

@section('title', 'Cart')

@section('content')

<div class="jumbotron">
  <div class="container">
    <h1>Cart</h1>
    <p>Review your cart before checking out!</p>
  </div>
</div>
<div class="container cart">
  <div class="row">
    <table id="cart" class="table table-hover table-bordered">
      <thead>
        <tr>
          <th style="width:50%">Product</th>
          <th style="width:10%">Price</th>
          <th style="width:8%">Year (s)</th>
          <th style="width:22%" class="text-center">Subtotal</th>
          <th style="width:10%"></th>
        </tr>
      </thead>
      <tbody> 
        @if(session('cart') !== null)
        @foreach(session('cart') as $product)
        <tr>
          <td data-th="Product">
            <div class="row">
              <div class="col-sm-3 hidden-xs">
                <p>{{ $product['name'] }}</p>
              </div>
              <div class="col-sm-9">
                
              </div>
            </div>
          </td>
          <td data-th="Price">$11.25</td>
          <td data-th="Quantity">
            <input type="number" value="1" class="form-control quantity">
          </td>
          <td data-th="Subtotal" class="text-center">$11.25</td>
          <td class="actions" data-th="">
            <button class="btn btn-info btn-sm update-cart" data-id="testddd.com"><i class="fa fa-refresh"></i></button>
            <button class="btn btn-danger btn-sm remove-from-cart" data-id="testddd.com"><i class="fa fa-trash-o"></i></button>
          </td>
        </tr>
        @endforeach
        @endif
      </tbody>
      <tfoot>
        <tr class="visible-xs">
          <td class="text-center"><strong>Total 11.25</strong></td>
          <td>
            <button>Checkout</button>
          </td>
        </tr>
        <tr>
          <td>
            <a href="#" class="btn btn-warning"> Continue Shopping</a>
          </td>
          <td colspan="2" class=""></td>
          <td class="hidden-xs text-center"><strong>Total $11.25</strong></td>
          <td>
            <a href="checkout" class="btn btn-success" style="color:white; text-decoration: none;">
            Checkout</a>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<section class="partners">
  <div class="container">
    <h2 class="text-center text-white">Our Partners</h2>
    <br>
    <div class="row">
      <div class="col col-lg-2 col-md-6 col-sm-12">
        <img src="{{ asset('/images/logo1.png') }}">
      </div>

      <div class="col col-lg-2 col-md-6 col-sm-12">
        <img src="{{ asset('/images/logo2.png') }}">
      </div>

      <div class="col col-lg-2 col-md-6 col-sm-12">
        <img src="{{ asset('/images/logo3.png') }}">
      </div>

      <div class="col col-lg-2 col-md-6 col-sm-12">
        <img src="{{ asset('/images/logo4.png') }}">
      </div>

      <div class="col col-lg-2 col-md-6 col-sm-12">
        <img src="{{ asset('/images/logo5.png') }}">
      </div>

      <div class="col col-lg-2 col-md-6 col-sm-12">
        <img src="{{ asset('/images/logo6.png') }}">
      </div>
    </div>
  </div>
</section>

@endsection