<?php

use App\Http\Controllers\ListJasaController;
use App\Http\Controllers\Showcase;
use App\Http\Controllers\HomePageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//------------------Controller List Jasa------------------//
Route::get('/listjasa', [ListJasaController::class, 'index']);




//------------------Controller Showcase------------------//
Route::get('/showcase', [Showcase::class, 'index']);



//------------------Controller Home------------------//
Route::get('/', [HomePageController::class, 'index']);


//------------------Controller User------------------//
Route::get('/user', [UserPageController::class, 'index']);



//------------------Controller About Us------------------//
Route::get('/aboutus', [AboutUsController::class, 'index']);




//------------------Controller Contact------------------//
Route::get('/contact', [ContactController::class, 'index']);

