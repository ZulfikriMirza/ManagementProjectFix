<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart as CartModel;

class Cart extends Component
{
    public function render()
    {
        $carts = CartModel::orderBy('created_at', 'DESC')->get();
        return view('livewire.cart', [
            'carts' => $carts
        ]);
    }
}
