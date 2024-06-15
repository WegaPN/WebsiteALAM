@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Jadwal Pendakian</h1>
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
        <div class="mb-3">
            <label for="jadwalPendakian" class="form-label">Jadwal Pendakian</label>
            <input type="date" class="form-control" id="jadwalPendakian" name="jadwalPendakian" value="{{ old('jadwalPendakian') }}">
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ old('lokasi') }}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga') }}">
        </div>
        <div class="mb-3">
            <label for="kuota" class="form-label">Kuota</label>
            <input type="number" class="form-control" id="kuota" name="kuota" value="{{ old('kuota') }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('jadwals.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
