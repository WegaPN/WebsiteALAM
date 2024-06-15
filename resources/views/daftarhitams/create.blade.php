@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Daftar Hitam</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('daftarHitams.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">User</label>
            <select class="form-control" id="user_id" name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggalBlacklist" class="form-label">Tanggal Blacklist</label>
            <input type="date" class="form-control" id="tanggalBlacklist" name="tanggalBlacklist" value="{{ old('tanggalBlacklist') }}">
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan">{{ old('keterangan') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('daftarHitams.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
