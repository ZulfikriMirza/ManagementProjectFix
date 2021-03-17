<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Showcase extends Component
{

    public function render()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('livewire.showcase', [
            'products' => $products
        ]);
    }
}
