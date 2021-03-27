<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->level == 'user') {
            $order = Order::where('user_id', Auth::user()->id)->get();
        } else {
            $order = Order::orderBy('user_id')->get();
        }
        return view('dashboard', ["order" => $order, "len" => count($order)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order_finished = Order::find($id);
        $order_finished->done = 1;
        $order_finished->save();
        return back()->with('success', 'Order is done! You can delete this order, thank you for your order!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->comment) {
            $order_confirmation = Order::find($id);
            $order_confirmation->comment = $request->comment;
            $order_confirmation->status = True;
            $order_confirmation->save();
            return back()->with('success', 'Order is Confirmed!');
        }
        return back()->with('error', 'Comment must be filled!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::where('id', $id)->delete();
        return back()->with('success', "You're succesfully delete the order!");
    }
}
