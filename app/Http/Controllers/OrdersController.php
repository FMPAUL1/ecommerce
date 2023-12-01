<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
   
    public function index()
    {
        return view('order.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Orders::create($request->all());
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $orders)
    {
        $order = Orders::findOrFail($orders->id);
        return view('order.single', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders)
    {
        $order = Orders::findOrFail($orders->id);
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orders $orders)
    {
        $orders = Orders::findOrFail($orders->id);
        $orders->update($request->all()); 
        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $orders)
    {
        $orders = Orders::findOrFail($orders->id);
        $orders->delete(); 
        return redirect()->route('orders.index');
    }
}
