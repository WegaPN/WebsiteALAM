<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function __construct()
    {
        // Middleware to handle permissions for various actions
        $this->middleware('permission:pembayaran-list|pembayaran-create|pembayaran-edit|pembayaran-delete', ['only' => ['index']]);
        $this->middleware('permission:pembayaran-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:pembayaran-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:pembayaran-delete', ['only' => ['destroy']]);
    }

    // Display a listing of the resource.
    public function index()
    {
        $pembayarans = Pembayaran::all();
        return view('pembayarans.index', compact('pembayarans'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('pembayarans.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'order_id' => 'required|exists:orders,id',
            'keterangan' => 'nullable|string',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('pembayarans.index')->with('success', 'Pembayaran berhasil ditambahkan.');
    }

    // Display the specified resource.
    public function show(Pembayaran $pembayaran)
    {
        return view('pembayarans.show', compact('pembayaran'));
    }

    // Show the form for editing the specified resource.
    public function edit(Pembayaran $pembayaran)
    {
        return view('pembayarans.edit', compact('pembayaran'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Pembayaran $pembayaran)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'order_id' => 'required|exists:orders,id',
            'keterangan' => 'nullable|string',
        ]);

        $pembayaran->update($request->all());

        return redirect()->route('pembayarans.index')->with('success', 'Data pembayaran berhasil diperbarui.');
    }

    // Remove the specified resource from storage.
    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();

        return redirect()->route('pembayarans.index')->with('success', 'Pembayaran berhasil dihapus.');
    }
}
