<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
/* Auth Routes */
Route::post('login','App\Http\Controllers\AuthController@login');
Route::post('register','App\Http\Controllers\AuthController@register');

/* Cart Routes */
Route::post('addtocart',[ProductController::class,'addToCart']);
Route::get('get_cartitems','App\Http\Controllers\ProductController@getCartItems');

Route::get('get_products',[ProductController::class,'getAllProducts']);

/* Stripe Payments */
Route::post('payment_checkout',[ProductController::class,'paymentCheckout']);
