<?php

namespace App\Http\Controllers;

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
}
