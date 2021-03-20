<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class Showcase extends Component
{

    use WithPagination;
    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.showcase', [
            'products' => $products
        ]);
    }
    public function addItem($id)
    {
        dd($id);
    }
}
