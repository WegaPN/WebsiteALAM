<?php

namespace App\Http\Controllers;

use App\Models\DaftarHitam;
use Illuminate\Http\Request;

class DaftarHitamController extends Controller
{
    public function index()
    {
        $daftarHitams = DaftarHitam::all();
        return view('daftarHitams.index', compact('daftarHitams'));
    }

    public function create()
    {
        return view('daftarHitams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'tanggalBlacklist' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        DaftarHitam::create($request->all());

        return redirect()->route('daftarHitams.index')->with('success', 'Pendaftaran hitam berhasil ditambahkan.');
    }

    public function show(DaftarHitam $daftarHitam)
    {
        return view('daftarHitams.show', compact('daftarHitam'));
    }

    public function edit(DaftarHitam $daftarHitam)
    {
        return view('daftarHitams.edit', compact('daftarHitam'));
    }

    public function update(Request $request, DaftarHitam $daftarHitam)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'tanggalBlacklist' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $daftarHitam->update($request->all());

        return redirect()->route('daftarHitams.index')->with('success', 'Data pendaftaran hitam berhasil diperbarui.');
    }

    public function destroy(DaftarHitam $daftarHitam)
    {
        $daftarHitam->delete();

        return redirect()->route('daftarHitams.index')->with('success', 'Pendaftaran hitam berhasil dihapus.');
    }
}
