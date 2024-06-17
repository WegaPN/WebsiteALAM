@extends('layouts.app')

@section('content')
<div class="hero-tabel">
    <h1>Daftar Jadwal Pendakian</h1>
    <div class="container-80">
        <a href="{{ route('jadwals.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jadwal Pendakian</th>
                    <th>Lokasi</th>
                    <th>Harga</th>
                    <th>Kuota</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwals as $jadwal)
                    <tr>
                        <td>{{ $jadwal->id }}</td>
                        <td>{{ $jadwal->jadwalPendakian }}</td>
                        <td>{{ $jadwal->lokasi }}</td>
                        <td>{{ $jadwal->harga }}</td>
                        <td>{{ $jadwal->kuota }}</td>
                        <td>
                            <a href="{{ route('jadwals.show', $jadwal->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('jadwals.edit', $jadwal->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('jadwals.destroy', $jadwal->id) }}" method="POST" style="display:inline-block;">
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