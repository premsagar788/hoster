<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\Order;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserProfile;

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
        $orders = DB::table('order_details')->where('user_id', auth()->user()->id)->get();
    	return view('user.orders')->with(compact('orders'));
    }

    public function invoices()
    {
    	$invoices = Invoice::all();
    	return view('user.invoices')->with(compact('invoices'));
    }

    public function updateProfile(UpdateUserProfile $request)
    {
    	$user = User::findOrFail(auth()->user()->id);

    	try {
		  $user->name = $request->input('fullname');
	    	$user->address = $request->input('address');
	    	$user->city = $request->input('city');
	    	$user->country = $request->input('country');
	    	$user->phone = $request->input('phone');
	    	$user->save();
    		return redirect('/user/profile')->with('message', 'User profile updated successfully!');
		} catch (\Exception $e) {
		    return $e->getMessage();
		}
    }
}
