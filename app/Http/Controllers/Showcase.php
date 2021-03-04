<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Showcase extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Showcase.showcase");
    }

    public function __invoke(Request $request)
    {
        //
    }
}
