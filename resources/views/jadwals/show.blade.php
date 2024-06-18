@extends('layouts.app')

@section('content')
<div class="hero-login">
    <div class="login-container">
        <div class="card-header"><h2>Detail Jadwal Pendakian</h2></div>
        
        <div class="input-container">
            <label class="form-label">Jadwal Pendakian</label>
            <input type="text" class="form-control" value="{{ $jadwal->jadwalPendakian }}" readonly>
        </div>
        <div class="input-container">
            <label class="form-label">Lokasi</label>
            <input type="text" class="form-control" value="{{ $jadwal->lokasi }}" readonly>
        </div>
        <div class="input-container">
            <label class="form-label">Harga</label>
            <input type="text" class="form-control" value="{{ $jadwal->harga }}" readonly>
        </div>
        <div class="input-container">
            <label class="form-label">Kuota</label>
            <input type="text" class="form-control" value="{{ $jadwal->kuota }}" readonly>
        </div>
        <div class="input-container">
            <a href="{{ route('jadwals.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection