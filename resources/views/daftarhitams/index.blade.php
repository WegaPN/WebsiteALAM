@extends('layouts.app')

@section('content')
<div class="hero-tabel">
    <h1>Daftar Hitam</h1>
    <div class="container-80">
        <a href="{{ route('daftarHitams.create') }}" class="btn btn-primary mb-3">Tambah Daftar Hitam</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Tanggal Blacklist</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftarHitams as $daftarHitam)
                    <tr>
                        <td>{{ $daftarHitam->id }}</td>
                        <td>{{ $daftarHitam->user->name }}</td>
                        <td>{{ $daftarHitam->tanggalBlacklist }}</td>
                        <td>{{ $daftarHitam->keterangan }}</td>
                        <td>
                            <a href="{{ route('daftarHitams.show', $daftarHitam->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('daftarHitams.edit', $daftarHitam->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('daftarHitams.destroy', $daftarHitam->id) }}" method="POST" style="display:inline-block;">
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