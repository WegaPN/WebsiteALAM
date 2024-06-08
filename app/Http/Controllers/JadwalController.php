<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('jadwals.index', compact('jadwals'));
    }

    public function create()
    {
        return view('jadwals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jadwalPendakian' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'kuota' => 'required|integer|min:0',
        ]);

        Jadwal::create($request->all());

        return redirect()->route('jadwals.index')->with('success', 'Jadwal pendakian berhasil ditambahkan.');
    }

    public function show(Jadwal $jadwal)
    {
        return view('jadwals.show', compact('jadwal'));
    }

    public function edit(Jadwal $jadwal)
    {
        return view('jadwals.edit', compact('jadwal'));
    }

    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'jadwalPendakian' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'kuota' => 'required|integer|min:0',
        ]);

        $jadwal->update($request->all());

        return redirect()->route('jadwals.index')->with('success', 'Data jadwal pendakian berhasil diperbarui.');
    }

    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();

        return redirect()->route('jadwals.index')->with('success', 'Jadwal pendakian berhasil dihapus.');
    }
}
