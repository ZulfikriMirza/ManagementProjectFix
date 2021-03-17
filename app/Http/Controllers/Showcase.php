<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Cart;

class Showcase extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function __invoke(Request $request)
    {
        //
    }
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('cart');
    }

    use WithPagination;
    public function render()
    {
        $products = Product::paginate(12);
        return view("Showcase.showcase",['products'=>$products]);
    }
}
