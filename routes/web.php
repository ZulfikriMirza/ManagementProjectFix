<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminShowcaseController;
use App\Http\Controllers\ContactController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormCheckout;
use App\Models\adminLinks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


//------------------Controller HOME------------------//
Route::get('/', [HomeController::class, 'index'])->name("home");




//------------------Controller About Us------------------//
Route::get('/aboutus', [AboutUsController::class, 'index'])->name("aboutus");



//------------------Controller Contact------------------//
Route::get('/contact', [ContactController::class, 'index'])->name("contact");
Route::post('/contact', [ContactController::class, 'store'])->name("contact.post");



//------------------Controller Showcase------------------//
Route::get('/showcase/{cat?}', function ($cat = 1) {
    $arr = [];
    $prod = DB::table('products')->select('image', 'category_name')->orderBy('category_name')->get();
    foreach ($prod as $item) {
        if (!array_key_exists($item->category_name, $arr)) {
            $arr[$item->category_name] = [];
        }
        array_push($arr[$item->category_name], $item->image);
    }
    return view('Showcase.showcase', [
        'products' => $arr,
        'cat' => $cat,
        'adminlinks' => adminLinks::all(),
    ]);
})->name("showcase");


//------------------Controller Dashboard------------------//
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/{id}', [DashboardController::class, 'update'])->name('dashboard.update');
    Route::get('/dashboard/finished/{id}', [DashboardController::class, 'edit'])->name('dashboard.finish');
    Route::get('/dashboard/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
});


//------------------Controller Checkout------------------//

Route::group(['middleware' => ['auth', "verified"]], function () {
    Route::get('/cart', [HomeController::class, 'getCart'])->name("cart");
    Route::get('/cart/{id}', [HomeController::class, 'RemoveItem'])->name("remove");

    Route::get('/checkout', [CheckoutController::class, 'index'])->name("checkout");
    Route::get('/checkout/ajax/{id}', [CheckoutController::class, 'ajax'])->name("getCity");
    Route::post('/checkout', [FormCheckout::class, 'postCheckout'])->name("CheckoutPost");

    Route::get('/home/update/{name}/{harga}', [HomeController::class, 'addItem'])->name("add-item");
});


// Admin Section
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/home', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::post('/home/{id}', [AdminHomeController::class, 'update'])->name('admin.home.post');

    Route::get('/showcase', [AdminShowcaseController::class, 'index'])->name('admin.showcase');
    Route::post('/showcase', [AdminShowcaseController::class, 'store'])->name('admin.showcase.store');
    Route::post('/showcase/{id}', [AdminShowcaseController::class, 'update'])->name('admin.showcase.post');
    Route::get('/showcase/delete/{id}', [AdminShowcaseController::class, 'destroy'])->name('admin.showcase.destroy');
    Route::get('/showcase/cat/{cat}', [AdminShowcaseController::class, 'select_category'])->name('admin.showcase.cat');

    Route::get('/links', function () {
        return view("admin.adminEditLink", [
            'adminLinks' => adminLinks::all(),
        ]);
    })->name('admin.links');

    Route::post('/links/{id}', function (Request $request, $id) {
        $adminItem = adminLinks::all();
        foreach ($adminItem as $item) {
            if (isset($_POST['adminButton' . $item->id])) {
                if ($request['adminLink' . $item->id] == null) {
                    return back()->with('error', 'You have to fill the input data!');
                }
                $admin_update = adminLinks::find($item->id);
                $admin_update->link = $request['adminLink' . $item->id];
                $admin_update->save();
                return back()->with('success', 'You have successfully update the data!');
            }
        }
    })->name('admin.links.post');
});
