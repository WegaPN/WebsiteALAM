<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class JadwalController extends Controller
{
    public function __construct()
    {
        // Middleware to handle permissions for various actions
        $this->middleware('permission:jadwal-list|jadwal-create|jadwal-edit|jadwal-delete', ['only' => ['index']]);
        $this->middleware('permission:jadwal-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:jadwal-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:jadwal-delete', ['only' => ['destroy']]);
    }

    // Display a listing of the resource.
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('jadwals.index', compact('jadwals'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('jadwals.create');
    }

    // Store a newly created resource in storage.
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

    // Display the specified resource.
    public function show(Jadwal $jadwal)
    {
        return view('jadwals.show', compact('jadwal'));
    }

    // Show the form for editing the specified resource.
    public function edit(Jadwal $jadwal)
    {
        return view('jadwals.edit', compact('jadwal'));
    }

    // Update the specified resource in storage.
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

    // Remove the specified resource from storage.
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();

        return redirect()->route('jadwals.index')->with('success', 'Jadwal pendakian berhasil dihapus.');
    }
}
