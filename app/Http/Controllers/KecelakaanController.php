<?php

namespace App\Http\Controllers;

use App\Models\Kecelakaan;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class KecelakaanController extends Controller
{
    public function __construct()
    {
        // Middleware to handle permissions for various actions
        $this->middleware('permission:kecelakaan-list|kecelakaan-create|kecelakaan-edit|kecelakaan-delete', ['only' => ['index']]);
        $this->middleware('permission:kecelakaan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:kecelakaan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:kecelakaan-delete', ['only' => ['destroy']]);
    }

    // Display a listing of the resource.
    public function index()
    {
        $kecelakaans = Kecelakaan::all();
        return view('kecelakaans.index', compact('kecelakaans'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('kecelakaans.create');
    }

    // Store a newly created resource in storage.
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

    // Display the specified resource.
    public function show(Kecelakaan $kecelakaan)
    {
        return view('kecelakaans.show', compact('kecelakaan'));
    }

    // Show the form for editing the specified resource.
    public function edit(Kecelakaan $kecelakaan)
    {
        return view('kecelakaans.edit', compact('kecelakaan'));
    }

    // Update the specified resource in storage.
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

    // Remove the specified resource from storage.
    public function destroy(Kecelakaan $kecelakaan)
    {
        $kecelakaan->delete();

        return redirect()->route('kecelakaans.index')->with('success', 'Kecelakaan berhasil dihapus.');
    }
}
