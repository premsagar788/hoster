@extends('layouts.site')

@section('title', 'Cart')

@section('content')

  <div class="jumbotron">
    <div class="container">
      <h1>Cart</h1>
      <p>Review your cart before checking out!</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <table id="cart" class="table table-hover table-condensed">
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

            
                
                    
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs">
                                    <h4 class="nomargin">testddd.com</h4>
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
                            

            </tbody>
            <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Total 11.25</strong></td>
                <td><button>Checkout</button></td>
            </tr>
            <tr>
                <td><a href="http://hosterport.com" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total $11.25</strong></td>
                <td>
                    <a href="checkout" style="color:white; text-decoration: none;">
                        <button class="btn btn-success">
                         Checkout <i class="fa fa-angle-right"></i>
                        </button>
                    </a>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
  </div>

@endsection