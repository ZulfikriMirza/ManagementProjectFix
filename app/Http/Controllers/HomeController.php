<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdminHome;
use App\Models\AdminListJasa;
use App\Models\AdminProject;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Jasa;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $adminHome = AdminHome::all();
        $adminProject = AdminProject::all();
        $adminListJasa = AdminListJasa::all();
        $jasas = Jasa::all();
        return view("Home.index", [
            "adminHome" => $adminHome,
            "adminProject" => $adminProject,
            "adminListJasa" => $adminListJasa,
            "jasas" => $jasas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addItem($name, $harga)
    {
        $id_user = Auth::id();
        $cart = Cart::create([
            'user_id' => $id_user,
            'name' => $name,
            'harga' => $harga,
        ]);
        $cart->save();
        return back()->with('success', 'Berhasil Menambahkan Jasa ke Keranjang');
    }

    public function getCart(Request $request)
    {
        
        $carts = auth()->user()->cart;
        return view('cart.cart', [
            'carts' => $carts,
        ]);
    }

    public function RemoveItem($id)
    {

        $carts = Cart::find($id);
        $carts->delete();
        return back();
    }
}
