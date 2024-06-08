@extends('layouts.app')

@section('title', 'Daftar Kecelakaan')

@section('content')
    <h1>Daftar Kecelakaan</h1>
    <a href="{{ route('kecelakaans.create') }}">Tambah Kecelakaan Baru</a>
    <ul>
        @foreach($kecelakaans as $kecelakaan)
            <li>{{ $kecelakaan->titikLokasi }} - {{ $kecelakaan->keterangan }} - {{ $kecelakaan->tanggal }}</li>
        @endforeach
    </ul>
@endsection
