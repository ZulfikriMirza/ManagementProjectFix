<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\adminLinks;
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
            'adminlinks' => adminLinks::all(),
        ]);
    }

    public function ajax($id)
    {
        $cities = City::where('province_id', '=', $id)->pluck('city_name', 'id');

        return json_encode($cities);
    }
}
