<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Backend\AdminCategoriesController;
use App\Http\Controllers\Backend\AdminProductController;


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

/*      Frontend APIS        */



Route::get('/', 'App\Http\Controllers\Frontend\HomeController@index')->name('home');
Route::get('/cart', 'App\Http\Controllers\Frontend\HomeController@cart')->name('cart');
Route::post('/addtocart/{id}', 'App\Http\Controllers\Frontend\HomeController@addtocart');

Route::post('/cartcheckout', 'App\Http\Controllers\Frontend\HomeController@cartcheckout');
Route::get('/stripe-payment/{order_id}', [HomeController::class, 'showstripeform'])->name('stripe-show-form');
Route::post('/stripe-payment', [HomeController::class, 'makepayment'])->name('stripe.payment');

require __DIR__.'/auth.php';

Route::get('admin/login',[AdminAuthController::class, 'adminlogin'])->name('admin.login');
Route::post('admin/checklogin',[AdminAuthController::class, 'checklogin']);
Route::get('admin/adminlogout',[AdminAuthController::class, 'adminlogout']);
/* Categories */
Route::get('admin/add_category',[AdminCategoriesController::class, 'add_category']);
Route::post('admin/save_category',[AdminCategoriesController::class, 'save_category']);
Route::get('admin/edit_category/{id}',[AdminCategoriesController::class, 'edit_category']);
Route::post('admin/update_category',[AdminCategoriesController::class, 'update_category']);
Route::get('admin/delete_category/{id}',[AdminCategoriesController::class, 'delete_category']);
Route::get('admin/categories',[AdminCategoriesController::class, 'all_categories'])->name('admin.categories');
/* end categories routes */
/* Products routes */
Route::get('admin/add_product',[AdminProductController::class, 'add_product']);
Route::post('admin/save_product',[AdminProductController::class, 'save_product']);
Route::get('admin/edit_product/{id}',[AdminProductController::class, 'edit_product']);
Route::post('admin/update_product',[AdminProductController::class, 'update_product']);
Route::get('admin/delete_product/{id}',[AdminProductController::class, 'delete_product']);
Route::get('admin/products',[AdminProductController::class, 'all_products'])->name('admin.products');
/* end products routes  */
Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard')->middleware('is_admin');
