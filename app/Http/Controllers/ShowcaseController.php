<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ShowcaseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $users = User::all();
        return view('Showcase.showcase', [
            'products' => $products,
            'users' => $users
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
        // dd()
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

    public function addItem($id)
    {


        $produk = Product::find($id);
        $id_user = Auth::id();
        $cart_name = $produk->name;
        $cart_harga = $produk->harga;
        $cart = Cart::create([
            'user_id' => $id_user,
            'name' => $cart_name,
            'harga' => $cart_harga,
        ]);
        $cart->save();
        return back();
        // jadi urang ngambil id dari product buat nge masukin nama harga ke database cart
        // $carts = Cart::all();
        // Cart::add($carts->$product_id, $carts->$name, 1, $carts->$harga);
        // return view('Showcase.showcase');
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
