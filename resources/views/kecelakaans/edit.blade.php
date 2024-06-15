@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kecelakaan</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('kecelakaans.update', $kecelakaan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titikLokasi" class="form-label">Titik Lokasi</label>
            <input type="text" class="form-control" id="titikLokasi" name="titikLokasi" value="{{ $kecelakaan->titikLokasi }}">
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan">{{ $kecelakaan->keterangan }}</textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $kecelakaan->tanggal }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kecelakaans.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
