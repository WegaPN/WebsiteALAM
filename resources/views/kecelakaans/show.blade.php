@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Kecelakaan</h1>
    <div class="mb-3">
        <label class="form-label">Titik Lokasi</label>
        <input type="text" class="form-control" value="{{ $kecelakaan->titikLokasi }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Keterangan</label>
        <textarea class="form-control" readonly>{{ $kecelakaan->keterangan }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal</label>
        <input type="text" class="form-control" value="{{ $kecelakaan->tanggal }}" readonly>
    </div>
    <a href="{{ route('kecelakaans.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection