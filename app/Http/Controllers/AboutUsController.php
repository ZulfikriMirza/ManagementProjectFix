<?php

namespace App\Http\Controllers;

use App\Models\adminLinks;

class AboutUsController extends Controller
{
    //
    public function index()
    {
        return view("AboutUs.aboutus", [
            'adminlinks' => adminLinks::all(),
        ]);
    }
}
