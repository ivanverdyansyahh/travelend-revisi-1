<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Destination;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();

        
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
        $order = new Order([
            "destination_id" => $request->destination_id,
            "name" => $request->name,
            "email" => $request->email,
            "no_telp" => $request->no_telp,
            "total_price" => $request->total_price,
            "total_ticket" => $request->total_ticket,
        ]);

        // $order->tour_id = $request->tour_id;
        // $order->name = $request->name;
        // $order->email = $request->email;
        // $order->no_telp = $request->no_telp;
        // $order->total_price = $request->total_price;
        // $order->total_ticket = $request->total_ticket;

        $order->save();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
        ];

        // Mail::to($data['email'])->send(new OrderMail($data));

        return 'Order berhasil dibuat';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
