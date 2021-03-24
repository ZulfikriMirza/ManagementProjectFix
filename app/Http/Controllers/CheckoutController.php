<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\City;
use App\Models\Province;
use App\Models\Order;


class CheckoutController extends Controller
{
    public function index()
    {
        $province = Province::all();
        $order = Order::all();
        return view("Checkout.checkout", [
            "provinsi" => $province,
            "order" => $order,
        ]);
    }

    public function ajax($id)
    {
        $cities = City::where('province_id', '=', $id)->pluck('city_name', 'id');

        return json_encode($cities);
    }



}
