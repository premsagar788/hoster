<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Http\Requests\CheckoutPostRequest;

class FrontendController extends Controller
{
	protected $success;

	public function __construct()
    {
        $this->success;
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
    	return view('checkout');
    }

    public function processCheckout(CheckoutPostRequest $request)
    {
		$user = User::findOrFail(auth()->user()->id);

    	$user->name = $request->input('name');
    	$user->address = $request->input('address');
    	$user->city = $request->input('city');
    	$user->country = $request->input('country');
    	$user->phone = $request->input('phone');
    	$user->save();

    	foreach (session('cart') as $key) {
	    	$order = new Order();
	    	
	    	$order->product = $key['name'];
	    	$order->quantity = $key['quantity'];
	    	$order->price = $key['price'];
	    	$order->payment_method = $request->input('payment');
	    	$order->user_id = $user->id;
	    	$order->save();
	    	$this->success = true;
    	}
    	if ($this->isSuccess()) {
    		session()->forget('cart');
    		return redirect('/')->with('success', 'Order placed successfully!');   
    	}
    }

    private function isSuccess(): bool
    {
    	return $this->success ? true : false;
    }
}
