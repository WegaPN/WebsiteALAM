<?php

namespace App\Http\Controllers;

use App\Models\Kecelakaan;
use Illuminate\Http\Request;

class KecelakaanController extends Controller
{
    public function index()
    {
        $kecelakaans = Kecelakaan::all();
        return view('kecelakaans.index', compact('kecelakaans'));
    }

    public function create()
    {
        return view('kecelakaans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titikLokasi' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'tanggal' => 'required|date',
        ]);

        Kecelakaan::create($request->all());

        return redirect()->route('kecelakaans.index')->with('success', 'Kecelakaan berhasil ditambahkan.');
    }

    public function show(Kecelakaan $kecelakaan)
    {
        return view('kecelakaans.show', compact('kecelakaan'));
    }

    public function edit(Kecelakaan $kecelakaan)
    {
        return view('kecelakaans.edit', compact('kecelakaan'));
    }

    public function update(Request $request, Kecelakaan $kecelakaan)
    {
        $request->validate([
            'titikLokasi' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'tanggal' => 'required|date',
        ]);

        $kecelakaan->update($request->all());

        return redirect()->route('kecelakaans.index')->with('success', 'Data kecelakaan berhasil diperbarui.');
    }

    public function destroy(Kecelakaan $kecelakaan)
    {
        $kecelakaan->delete();

        return redirect()->route('kecelakaans.index')->with('success', 'Kecelakaan berhasil dihapus.');
    }
}
