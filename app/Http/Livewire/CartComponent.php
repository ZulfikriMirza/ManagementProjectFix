<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Carbon\Carbon;

class CartComponent extends Component
{

    public $tax = "0%";

    public function render()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();

        $condition = new \Darryldecode\Cart\CartCondition([
            'name' => 'pajak',
            'type' => 'tax',
            'target' => 'total',
            'value' => $this->tax,
            'order' => 1
        ]);

        \Cart::session(Auth()->id())->condition($condition);
        $items = \Cart::session(Auth()->id())->getContent()->sortBy(function ($cart){
            return $cart->attributes->get('added_at');
        });

        if(\Cart::isEmpty()){
            $cartData = [];
        }else{
            foreach($items as $item){
                $cart[] = [
                    'rowId' => $row->id,
                    'name' => $item->name,
                    'pricesingle' => $item->harga,
                    'price' => $item->getPriceSum(),
                ];
            }
            
            $cartData = collect($cart);
        }

        $sub_total = \Cart::session(Auth()->id())->getSubTotal();
        $total = \Cart::session(Auth()->id())->getTotal();

        $newCondition = \Cart::session(Auth()->id())->getCondition('pajak');
        $pajak = $newCondition->getCalculatedValue($sub_total);

        $summary = [
            'sub_total' => $sub_total,
            'pajak' => $pajak,
            'total' => $total
        ];

        return view('livewire.cart-component', [
            'products' => $products,
            'carts' => $cartData,
            'summary' => $summary
        ]);

    }

    public function addItem($id){

        $rowId = "Cart".$id;
        dd($rowId);
        $cart = \Cart::session(Auth()->id())->getContent();
        $cekItemId = $cart->whereIn('id', $rowId);

        if($cekItemId->IsNotEmpty()){
            \Cart::session(Auth()->id())->update($rowId, [
                'quantity' =>[
                    'relative' => true,
                    'value' => 1
                ]
            ]);



        }else{

            $product = Product::findOrFail($id);
            \Cart::session(Auth()->id())->add([
                'id' => "Cart".$product->id,
                'name' => $product->name,
                'price' => $product->harga,
                'quantity' => 1,
                'attributes' =>[
                    'added_at' => Carbon::now() 
                ],
            ]);
        }
        return redirect()->route('Livewire.Showcase');
    }
}
