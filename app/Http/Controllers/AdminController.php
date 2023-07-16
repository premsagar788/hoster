<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Invoice;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.dashboard');
    }

    public function userProfile()
    {
    	return view('admin.profile');
    }

    public function orders()
    {
    	$orders = DB::table('orders')->get()->toArray();
    	return view('admin.orders')->with(compact('orders'));
    }

    public function invoices()
    {
    	$invoices = Invoice::all();
    	return view('admin.invoices')->with(compact('invoices'));
    }
}
