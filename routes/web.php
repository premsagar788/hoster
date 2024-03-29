<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('index');
});


Route::get('/home', function () {
	return redirect('/');
});

Route::get('/cart', [App\Http\Controllers\FrontendController::class, 'cart']);
Route::get('/checkout', [App\Http\Controllers\FrontendController::class, 'checkout'])->middleware('auth');
Route::post('/checkout', [App\Http\Controllers\FrontendController::class, 'processCheckout'])->middleware('auth');

Route::get('/about', function() {
	return view('about');
});

Route::get('/pricing', function() {
	return view('pricing');
});

Route::controller(App\Http\Controllers\DomainsController::class)->group(function () {
    Route::get('/domains', 'index');
    Route::post('/domains', 'check');
    Route::get('/whois/{domain}', 'whois');
    Route::get('/add-to-cart/{product}', 'addToCart');
    Route::post('/delete/{domain}', 'deleteCart');
});

Route::get('/faq', function(){
	return view('faq');
});

Route::get('auth/google', 'App\Http\Controllers\SocialController@googleRedirect');
Route::get('auth/google/callback', 'App\Http\Controllers\SocialController@loginWithGoogle');

Route::group(['controller'=> App\Http\Controllers\DashboardController::class, 
    'prefix'=>'user', 'middleware' => 'auth', 'role:user'], function() {
    Route::get('/dashboard', 'index');
    Route::get('/profile', 'userProfile');
    Route::post('/profile', 'updateProfile');
    Route::get('/orders', 'orders');
    Route::get('/invoices', 'invoices');
});

Route::group(['prefix'=>'admin', 'middleware' => 'auth', 'role:admin'], function() {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'userProfile']);
    Route::get('/orders', [App\Http\Controllers\AdminController::class, 'orders']);
    Route::get('/invoices', [App\Http\Controllers\AdminController::class, 'invoices']);
});