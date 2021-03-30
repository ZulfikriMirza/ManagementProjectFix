<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserComment;
use App\Models\adminLinks;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        return view("Contact.contact", [
            'adminlinks' => adminLinks::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (
            $request->contactName &&
            $request->contactEmail &&
            $request->contactComment
        ) {
            $email = Auth::user() ? Auth::user()->email : $request->contactEmail;
            Mail::to("mesweb.design@gmail.com")->send(new UserComment($request->contactName, $request->contactComment, $email));
            return back()->with('success', 'Email has been sent!');
        } else {
            return back()->with('error', 'You have to fill all inputs!');
        }
    }
}
