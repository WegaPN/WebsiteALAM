@extends('layouts.app')

@section('title', 'Daftar Pembayaran')

@section('content')
    <h1>Daftar Pembayaran</h1>
    <a href="{{ route('pembayarans.create') }}">Tambah Pembayaran Baru</a>
    <ul>
        @foreach($pembayarans as $pembayaran)
            <li>{{ $pembayaran->keterangan }}</li>
        @endforeach
    </ul>
@endsection
