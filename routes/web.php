<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
use App\Models\Product;
use App\Http\Controllers\send_email;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', function (){
    return view('layout.main');
});
Route::get('/primary', function (){
    return view('primary.primary');
});
Route::view('/add','product.addProduct')->name('addProduct');
Route::post('/store',[Products::class,'store'])->name('storeProduct');
Route::view('/show','product.showProducts')->name('showProducts');
//reset password manual //////////////////////////////////////////////
Route::get('/reset-password',function (){
   return view('myauth.email');
})->name('reset-password');
Route::get('/send-email',[send_email::class,'sent'])->name('send-email');
Route::get('/account',function (){
  return view('email.account');
})->name('account');
Route::get('/ok',[send_email::class,'ok'])->name('ok');
Route::post('new-password',[send_email::class,'new'])->name('new-password');
///////////////////////////////////////////////////////////////////////
Route::get('/detalis',function(){
return view('product.detalisProduct');
});
Route::get('/detalis',[Products::class,'show'])->name('detalisProduct');
Route::get('/category',[Products::class,'index'])->name('ShowCategory');
Route::get('/addcart/{product}',[Products::class,'add'])->name('cartadd');
Route::get('/showCart',[Products::class,'showCart'])->name('showCart');
Route::post('/paypal',[\App\Http\Controllers\paypalcontroller::class,'index'])->name('paypal');
Route::get('/test1',[\App\Http\Controllers\paypalcontroller::class,'paypalreturn'])->name('paypal-return');
Route::get('/test2',[\App\Http\Controllers\paypalcontroller::class,'paypalcancel'])->name('paypal-cancel');
