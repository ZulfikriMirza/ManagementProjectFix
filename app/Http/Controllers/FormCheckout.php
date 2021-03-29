<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class FormCheckout extends Controller
{
    public function postCheckout(Request $request)
    {
        $validated = $request->validate([
            'name_depan' => 'required',
            'name_belakang' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'alamat' => 'required',
            'province_origin' => 'required',
            'origin' => 'required',
            'kec' => 'required',
            'posKode' => 'required',
            'harga' => 'required',
            'catatan' => 'required',
        ]);
        $order = Order::create([
            'name_depan' => $request->name_depan,
            'name_belakang' => $request->name_belakang,
            'email' => $request->email,
            'telphone' => $request->telephone,
            'address' => $request->alamat,
            'provinsi' => $request->province_origin,
            'kabupaten' => $request->origin,
            'kecamatan' => $request->kec,
            'kode_pos' => $request->posKode,
            'budget' => $request->harga,
            'note' => $request->catatan,
            'user_id' => Auth::user()->id,
            'user_name' => Auth::user()->name,
        ]);
        // fungsi dibawah belum jalan satupun
        $order->save();

        $cart = Cart::where("user_id", Auth::user()->id)->delete();

        return redirect()->route('dashboard')->with('success', 'Berhasil Melakukan Pemesanan Produk');
    }
}
