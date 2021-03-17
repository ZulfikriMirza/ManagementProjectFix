<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use jasa;

class CartController extends Controller
{
    public function store($jasa_id,$nama_jasa,$estimasi_harga)
    {
        jasa::add($jasa_id,$nama_jasa,1,$estimasi_harga)->associate('App\Models\Product');
    }

    public function index(){
    	return view("cart.cart");
    }
}
