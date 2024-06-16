<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class OrderController extends Controller
{
    public function __construct()
    {
        // Middleware to handle permissions for various actions
        $this->middleware('permission:order-list|order-create|order-edit|order-delete', ['only' => ['index']]);
        $this->middleware('permission:order-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:order-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:order-delete', ['only' => ['destroy']]);
    }

    // Display a listing of the resource.
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('orders.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'jadwal_id' => 'required|exists:jadwals,id',
            'jumlah' => 'required|integer|min:1',
            'namaPendaki' => 'required|string|max:255',
            'tanggalOrder' => 'required|date',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')->with('success', 'Order berhasil ditambahkan.');
    }

    // Display the specified resource.
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    // Show the form for editing the specified resource.
    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'jadwal_id' => 'required|exists:jadwals,id',
            'jumlah' => 'required|integer|min:1',
            'namaPendaki' => 'required|string|max:255',
            'tanggalOrder' => 'required|date',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index')->with('success', 'Data order berhasil diperbarui.');
    }

    // Remove the specified resource from storage.
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order berhasil dihapus.');
    }
}
