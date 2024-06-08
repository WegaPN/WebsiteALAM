<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::all();
        return view('pembayarans.index', compact('pembayarans'));
    }

    public function create()
    {
        return view('pembayarans.create');
    }

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

    public function show(Pembayaran $pembayaran)
    {
        return view('pembayarans.show', compact('pembayaran'));
    }

    public function edit(Pembayaran $pembayaran)
    {
        return view('pembayarans.edit', compact('pembayaran'));
    }

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

    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();

        return redirect()->route('pembayarans.index')->with('success', 'Pembayaran berhasil dihapus.');
    }
}
