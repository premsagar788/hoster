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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cart', [App\Http\Controllers\FrontendController::class, 'cart']);

Route::get('/about', function(){
	return view('about');
});

Route::get('/pricing', function(){
	return view('pricing');
});

Route::controller(App\Http\Controllers\DomainsController::class)->group(function () {
    Route::get('/domains', 'index');
    Route::post('/domains', 'check');
    Route::get('/whois/{domain}', 'whois');
    Route::get('/add-to-cart/{product}', 'addToCart');
});

Route::get('/faq', function(){
	return view('faq');
});

Route::get('auth/google', 'App\Http\Controllers\SocialController@googleRedirect');
Route::get('auth/google/callback', 'App\Http\Controllers\SocialController@loginWithGoogle');

Route::group(['prefix'=>'user', 'middleware' => 'auth', 'role:user'], function(){
    Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'userProfile']);
});