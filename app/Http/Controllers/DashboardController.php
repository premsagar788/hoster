<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Invoice;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('user.dashboard');
    }

    public function userProfile()
    {
    	return view('user.profile');
    }

    public function orders()
    {
    	$orders = Order::where('user_id', auth()->user()->id)->get();
    	return view('user.orders')->with(compact('orders'));
    }

    public function invoices()
    {
    	$invoices = Invoice::all();
    	return view('user.invoices')->with(compact('invoices'));
    }
}
