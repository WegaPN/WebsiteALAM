@extends('layouts.app')

@section('title', 'Daftar Jadwal Pendakian')

@section('content')
    <h1>Daftar Jadwal Pendakian</h1>
    <a href="{{ route('jadwals.create') }}">Tambah Jadwal Pendakian Baru</a>
    <ul>
        @foreach($jadwals as $jadwal)
            <li>{{ $jadwal->jadwalPendakian }} - {{ $jadwal->lokasi }} - {{ $jadwal->harga }} - {{ $jadwal->kuota }}</li>
        @endforeach
    </ul>
@endsection
