<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jasa;
use Session;
use App\Models\Cart;
class CartController extends Controller
{
    public function index(){
        $jasas = Jasa::all();
        return view('cart.cart',['jasa'=>$jasas]);
      }
  
      public function getTambahKeranjang(Request $request, $id)
      {
        $jasas = Jasa::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($jasas, $jasas->id);
  
        $request->session()->put('cart',$cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('Home.listJasa');
      }
  
      public function getCart()
      {
        if (!Session::has('cart')){
          return view('cart.cart',['jasa'=>null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalHarga;
        // $total = number_format($total,0,',','.');
        return view('cart.cart',['jasa'=>$cart->items, 'totalHarga'=>$total]);
      }
  
      public function getTambah(Request $request, $id)
      {
        $jasas = Jasa::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($jasas, $jasas->id);
  
        $request->session()->put('cart',$cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('cart.cart');
      }
  
      public function getReduceOne($id)
      {
        $oldCart = Session::has('cart') ? Session::get('cart') : null; //metode if else untuk cek apakah ada cart didalam session
        $cart = new Cart($oldCart);
        $cart->reduceOne($id);
  
        if(count($cart->items)>0){
          Session::put('cart',$cart);
        }else{
          Session::forget('cart');
        }
        return redirect()->route('cart.cart');
      }
  
      public function getRemoveItem($id)
      {
        $oldCart = Session::has('cart') ? Session::get('cart') : null; //metode if else untuk cek apakah ada cart didalam session
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
  
        if(count($cart->items)>0){
          Session::put('cart',$cart);
        }else{
          Session::forget('cart');
        }
  
        return redirect()->route('cart.cart');
      }
  
}
