@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Daftar Hitam</h1>
    <div class="mb-3">
        <label class="form-label">User</label>
        <input type="text" class="form-control" value="{{ $daftarHitam->user->name }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal Blacklist</label>
        <input type="text" class="form-control" value="{{ $daftarHitam->tanggalBlacklist }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Keterangan</label>
        <textarea class="form-control" readonly>{{ $daftarHitam->keterangan }}</textarea>
    </div>
    <a href="{{ route('daftarHitams.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
