<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
    	return view('checkout');
    }

    public function processCheckout(Request $request)
    {
    	$cart = session('cart');
    	foreach ($cart as $key) {
    		dd($key['name']);
    	}
    	$order = new Order();
    	
    	dd($request->all());
    }
}
