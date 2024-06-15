@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Jadwal Pendakian</h1>
    <div class="mb-3">
        <label class="form-label">Jadwal Pendakian</label>
        <input type="text" class="form-control" value="{{ $jadwal->jadwalPendakian }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Lokasi</label>
        <input type="text" class="form-control" value="{{ $jadwal->lokasi }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="text" class="form-control" value="{{ $jadwal->harga }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Kuota</label>
        <input type="text" class="form-control" value="{{ $jadwal->kuota }}" readonly>
    </div>
    <a href="{{ route('jadwals.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
