@extends('layouts.app')

@section('title', 'Daftar Daftar Hitam')

@section('content')
    <h1>Daftar Daftar Hitam</h1>
    <a href="{{ route('daftarHitams.create') }}">Tambah Daftar Hitam Baru</a>
    <ul>
        @foreach($daftarHitams as $daftarHitam)
            <li>{{ $daftarHitam->tanggalBlacklist }} - {{ $daftarHitam->keterangan }}</li>
        @endforeach
    </ul>
@endsection
