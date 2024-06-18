@extends('layouts.app')

@section('content')
<div class="hero-login">
    <div class="login-container">
        <div class="card-header"><h2>Tambah Jadwal Pendakian</h2></div>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('jadwals.store') }}" method="POST">
            @csrf
            <div class="input-container">
                <label for="jadwalPendakian" class="form-label">Jadwal Pendakian</label>
                <input type="date" class="form-control @error('jadwalPendakian') is-invalid @enderror" id="jadwalPendakian" name="jadwalPendakian" value="{{ old('jadwalPendakian') }}">
                @error('jadwalPendakian')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-container">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ old('lokasi') }}">
                @error('lokasi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-container">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}">
                @error('harga')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-container">
                <label for="kuota" class="form-label">Kuota</label>
                <input type="number" class="form-control @error('kuota') is-invalid @enderror" id="kuota" name="kuota" value="{{ old('kuota') }}">
                @error('kuota')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-container">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('jadwals.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection