@extends('layouts.app')

@section('content')
<div class="hero-login">
    <div class="login-container">
        <div class="card-header"><h2>Detail Daftar Hitam</h2></div>
        
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
        
        <div class="input-container">
            <a href="{{ route('daftarHitams.index') }}" class="btn btn-secondary">{{ __('Kembali') }}</a>
        </div>
    </div>
</div>
@endsection