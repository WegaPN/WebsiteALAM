<?php

namespace App\Http\Controllers;

use App\Models\DaftarHitam;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class DaftarHitamController extends Controller
{
    public function __construct()
    {
        // Middleware to handle permissions for various actions
        $this->middleware('permission:daftarHitam-list|daftarHitam-create|daftarHitam-edit|daftarHitam-delete', ['only' => ['index']]);
        $this->middleware('permission:daftarHitam-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:daftarHitam-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:daftarHitam-delete', ['only' => ['destroy']]);
    }

    // Display a listing of the resource.
    public function index()
    {
        $daftarHitams = DaftarHitam::all();
        return view('daftarHitams.index', compact('daftarHitams'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('daftarHitams.create');
    }

    // Store a newly created resource in storage.
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

    // Display the specified resource.
    public function show(DaftarHitam $daftarHitam)
    {
        return view('daftarHitams.show', compact('daftarHitam'));
    }

    // Show the form for editing the specified resource.
    public function edit(DaftarHitam $daftarHitam)
    {
        return view('daftarHitams.edit', compact('daftarHitam'));
    }

    // Update the specified resource in storage.
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

    // Remove the specified resource from storage.
    public function destroy(DaftarHitam $daftarHitam)
    {
        $daftarHitam->delete();

        return redirect()->route('daftarHitams.index')->with('success', 'Pendaftaran hitam berhasil dihapus.');
    }
}
