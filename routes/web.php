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

Route::get('/about', function(){
	return view('about');
});

Route::get('/pricing', function(){
	return view('pricing');
});

Route::get('/domains', [App\Http\Controllers\DomainsController::class, 'index'])->name('domains');;

Route::get('/faq', function(){
	return view('faq');
});

Route::post('/domain', [App\Http\Controllers\DomainsController::class, 'check']);