<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\withPagination;
use Cart;

class Showcase extends Component
{
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('cart');
    }

    use WithPagination;
    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.showcase',['products' => $products])->layout("template");
    }
}
