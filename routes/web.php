<?php

use App\Http\Controllers\Showcase;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserPageController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use Illuminate\Foundation\Application;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//------------------Controller HOME------------------//
Route::get('/', [HomeController::class, 'index'])->name("home");



//------------------Controller Showcase------------------//
Route::get('/showcase', [Showcase::class, 'index'])->name("showcase");



//------------------Controller User------------------//
Route::get('/user', [UserPageController::class, 'index']);



//------------------Controller About Us------------------//
Route::get('/aboutus', [AboutUsController::class, 'index'])->name("aboutus");



//------------------Controller Contact------------------//
Route::get('/contact', [ContactController::class, 'index'])->name("contact");


//------------------Controller Checkout------------------//
Route::get('/checkout', [CartController::class, 'index'])->name("checkout");
Route::post('/Keranjang','CartController@getCart')->name('cart.keranjang');
Route::post('/Tambahkeranjang','CartController@getTambahKeranjang')->name('cart.TambahKeranjang');
Route::post('/Tambah/{id}','CartController@getTambah')->name('cart.plus');
Route::post('/reduce/{id]','CartController@getReduceOne')->name('cart.reduceOne');
Route::post('/remove/{id]','CartController@getRemoveItem')->name('cart.remove');

// Route::get('/Keranjang',[
//     'uses' => 'CartController@getCart',
//     'as'=> 'cart.keranjang'
//   ]);
  
  
//   Route::get('/Tambahkeranjang/{id}',[
//     'uses' => 'CartController@getTambahKeranjang',
//     'as'=> 'cart.TambahKeranjang'
//   ]);
  
//   Route::get('/Tambah/{id}',[
//     'uses' => 'CartController@getTambah',
//     'as'=> 'cart.plus'
//   ]);
  
//   route::get('/reduce/{id}',[
//     'uses'=>'CartController@getReduceOne',
//     'as'=>'cart.reduceOne'
//   ]);
  
//   route::get('/remove/{id}',[
//     'uses'=>'CartController@getRemoveItem',
//     'as'=>'cart.remove'
//   ]);