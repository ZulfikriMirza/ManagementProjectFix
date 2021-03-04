<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("User.userpage");
    }

    public function __invoke(Request $request)
    {
        //
    }
}