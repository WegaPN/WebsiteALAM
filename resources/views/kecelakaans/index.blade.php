@extends('layouts.app')

@section('content')
<div class="hero-tabel">
    <h1>Daftar Kecelakaan</h1>
    <div class="container-80">
        <a href="{{ route('kecelakaans.create') }}" class="btn btn-primary mb-3">Tambah Kecelakaan</a>
        <br>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titik Lokasi</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kecelakaans as $kecelakaan)
                    <tr>
                        <td>{{ $kecelakaan->id }}</td>
                        <td>{{ $kecelakaan->titikLokasi }}</td>
                        <td>{{ $kecelakaan->keterangan }}</td>
                        <td>{{ $kecelakaan->tanggal }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('kecelakaans.show', $kecelakaan->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('kecelakaans.edit', $kecelakaan->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kecelakaans.destroy', $kecelakaan->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection