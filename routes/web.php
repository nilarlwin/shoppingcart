<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;

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

/*Route::get('/', function () {
    return view('frontends.index');
});*/
Route::get('/',[FrontendsController::class,'index'])->name('frontends.index');
Route::get('detail',[FrontendsController::class,'show'])->name('frontends.detail');

Auth::routes();

Route::get('cart/{id}',[CartController::class,'create'])->name('cart.create');
Route::get('view/cart',[CartController::class,'index'])->name('cart.index');
Route::get('cart/{id}/add',[CartController::class,'add'])->name('cart.add');
Route::get('cart/{id}/subtract',[CartController::class,'subtract'])->name('cart.subtract');
Route::get('cart/{id}/delete',[CartController::class,'delete'])->name('cart.delete');
Route::post('cart/check-out',[CartController::class,'checkOut'])->name('cart.checkout');
Route::get('message',[CartController::class,'message'])->name('cart.message');

Route::middleware('auth')->group(function(){
Route::get('user',[UserController::class,'create'])->name('user.create');
Route::post('user',[UserController::class,'store'])->name('user.store');
Route::get('users',[UserController::class,'index'])->name('user.show');
Route::get('users/{id}',[UserController::class,'show'])->name('user.index');
Route::get('users/{id}/delete',[UserController::class,'destroy'])->name('user.delete');
Route::get('users/{id}/edit',[UserController::class,'edit'])->name('user.edit');
Route::post('users/{id}/edit',[UserController::class,'update'])->name('user.update');

Route::get('product',[ProductController::class,'create'])->name('product.create');
Route::post('product',[ProductController::class,'store'])->name('product.store');
Route::get('products',[ProductController::class,'index'])->name('product.show');
Route::get('products/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('products/{id}/edit',[ProductController::class,'update'])->name('product.update');
Route::get('products/{id}/delete',[ProductController::class,'destroy'])->name('product.delete');

Route::get('orders',[OrderController::class,'index'])->name('order.index');
Route::get('orders/{id}',[OrderController::class,'show'])->name('order.show');
Route::get('orders/{id}/delete',[OrderController::class,'destroy'])->name('order.delete');

Route::get('contactcustomer',[ContactController::class,'show'])->name('contactcustomer.show');
Route::get('contactcustomer/{id}',[ContactController::class,'edit'])->name('contactcustomer.edit');
Route::post('contactcustomer/{id}/edit',[ContactController::class,'update'])->name('contactcustomer.update');
Route::get('contactcustomer/{id}/delete',[ContactController::class,'destroy'])->name('contactcustomer.delete');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('product/boy-tshirt',[PageController::class,'boytshirt'])->name('boy-tshirt.show');
Route::get('product/boy-short-shirt',[PageController::class,'boysshirt'])->name('boy-sshirt.show');
Route::get('product/boy-long-shirt',[PageController::class,'boylshirt'])->name('boy-lshirt.show');
Route::get('product/girl-tshirt',[PageController::class,'girltshirt'])->name('girl-tshirt.show');
Route::get('product/girl-dress',[PageController::class,'girldress'])->name('girl-dress.show');
Route::get('product/girl-long-shirt',[PageController::class,'girllshirt'])->name('girl-lshirt.show');
Route::get('aboutus',[PageController::class,'about'])->name('about.show');
Route::get('contactus',[PageController::class,'contact'])->name('contact.show');
Route::post('contactus',[PageController::class,'contactus'])->name('contact.success');


