<?php

use App\Http\Controllers\ShowcaseController;
use App\Http\Livewire\CartComponent;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminShowcaseController;
use App\Http\Controllers\ContactController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CheckoutController;

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
Route::get('/showcase', [ShowcaseController::class, 'index'])->name("showcase");



//------------------Controller About Us------------------//
Route::get('/aboutus', [AboutUsController::class, 'index'])->name("aboutus");




//------------------Controller Contact------------------//
Route::get('/contact', [ContactController::class, 'index'])->name("contact");


//------------------Controller Checkout------------------//

// Kode buat route kalo pas masuk page nya harus login
Route::group(['middleware' => ['auth']], function () {
    Route::get('/cart', [ShowcaseController::class, 'getCart'])->name("cart");
    Route::get('/cart/{id}', [ShowcaseController::class, 'RemoveItem'])->name("remove");
    Route::get('/checkout', [CheckoutController::class, 'render'])->name("checkout");
    Route::get('/showcase/{id}', [ShowcaseController::class, 'addItem'])->name("add-item");
});


// Admin Section
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/home', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::post('/home/{id}', [AdminHomeController::class, 'update'])->name('admin.home.post');

    Route::get('/showcase', [AdminShowcaseController::class, 'index'])->name('admin.showcase');
    Route::post('/showcase', [AdminShowcaseController::class, 'store'])->name('admin.showcase.store');
    Route::post('/showcase/{id}', [AdminShowcaseController::class, 'update'])->name('admin.showcase.post');
    Route::get('/showcase/delete/{id}', [AdminShowcaseController::class, 'destroy'])->name('admin.showcase.destroy');
});
