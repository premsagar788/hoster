<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Invoice;
use Illuminate\Http\Request;

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

    public function processCheckout(Request $request)
    {
		$user = User::find(auth()->user()->id);
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
            $order->additional_notes = $request->input('notes');
	    	$order->save();
	    	$this->success = true;

            $invoice = new Invoice();

            $invoice->uoid = rand(000000000000000, 999999999999999);
            $invoice->product = $key['name'];
            $invoice->quantity = $key['quantity'];
            $invoice->price = $key['price'];
            $invoice->payment_method = $request->input('payment');            
            $invoice->user_id = $user->id;
            $invoice->order_id = $order->id;

            $invoice->save();
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
