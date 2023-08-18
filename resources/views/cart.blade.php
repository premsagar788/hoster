@extends('layouts.site')

@section('title', 'Cart')

@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@endsection

@section('content')
<?php $total = 0 ?>

<div class="jumbotron">
  <div class="container">
    <h1>Cart</h1>
    <p>Review your cart before checking out!</p>
  </div>
</div>

@if(session('cart'))
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
        @foreach($cart as $product)
        <?php $total = $total + (double) $product['price'] * (int) $product['quantity']; ?>
        <tr>
          <td data-th="Product">
            <div class="row">
              <div class="col-sm-3 hidden-xs">
                <p>{{ $product['name'] }}</p>
              </div>
              <div class="col-sm-9"></div>
            </div>
          </td>
          <td data-th="Price">{{ $product['price'] }}</td>
          <td data-th="Quantity">
            <input type="number" value="{{ $product['quantity'] }}" class="form-control quantity">
          </td>
          <td data-th="Subtotal" class="text-center">{{ $product['price'] * $product['quantity'] }}</td>
          <td class="actions" data-th="">
            <button class="btn btn-info btn-sm update-cart" data-id="testddd.com"><i class="fa fa-refresh"></i></button>
            <button id="delete" class="btn btn-danger btn-sm remove-from-cart" value="{{ $product['name'] }}"><i class="fa fa-trash-o"></i></button>
          </td>
        </tr>
        @endforeach
        @endif
      </tbody>
      <tfoot>
        <tr class="visible-xs">
          <td class="text-center"><strong>0</strong></td>
          <td>
            <button>Checkout</button>
          </td>
        </tr>
        <tr>
          <td>
            <a href="#" class="btn btn-warning"> Continue Shopping</a>
          </td>
          <td colspan="2" class=""></td>
          <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
          <td>
            <a href="checkout" class="btn btn-success" style="color:white; text-decoration: none;">
            Checkout</a>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>

@else

    <h1 align="center"><i class="fa fa-trash-o"></i></h1>
    <h3 align="center" class="pb-5">Oh no! Looks like empty Cart!</h3>

@endif

@include('partials.partners')

<script type="text/javascript">
   
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    $("#delete").click(function(e){
  
        e.preventDefault();

        let domain = $("#delete").val();
   
        $.ajax({
           type:'POST',
           url:"{{ url('delete') }}"+ '/' +domain,
           data:{domain:domain},
           success:function(data){
              alert(data.success);
              location.reload();
           }
        });
    });
</script>

@endsection