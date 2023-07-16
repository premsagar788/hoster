<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\Order;
use App\Models\Invoice;
use Illuminate\Http\Request;
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

        $details = '';
        $total = 0;

    	$order = new Order();
    	$order->payment_method = $request->input('payment');
    	$order->user_id = $user->id;
        $order->order_no = rand(000000000000000, 999999999999999);
        $order->additional_notes = $request->input('notes');
    	$order->save();

    	foreach (session('cart') as $key) {
            $insert = DB::table('order_details')->insert([
                'order_id'  => $order->order_no, 
                'product'   => $key['name'],
                'years'     => $key['quantity'],
                'price'     => ltrim($key['price'], '$'),
                'user_id'   => auth()->user()->id
            ]);
            $this->success = true;
            // $invoice = new Invoice();

            // $invoice->uoid = rand(000000000000000, 999999999999999);
            // $invoice->product = $key['name'];
            // $invoice->quantity = $key['quantity'];
            // $invoice->price = $key['price'];
            // $invoice->payment_method = $request->input('payment');            
            // $invoice->user_id = $user->id;
            // $invoice->order_id = $order->id;

            // $invoice->save();

            // $total = $total + ltrim($order->price, '$');
            // $details =  $order->id . ',' . $details;
    	}        

    	if ($this->isSuccess()) {
    		session()->forget('cart');
    		return redirect('/')->with('success', 'Order placed successfully!');   
    	} else {
            return redirect()->back()->withErrors();
        }
    }

    private function isSuccess(): bool
    {
    	return $this->success ? true : false;
    }
}
