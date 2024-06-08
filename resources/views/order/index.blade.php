@extends('layouts.app')

@section('title', 'Daftar Order')

@section('content')
    <h1>Daftar Order</h1>
    <a href="{{ route('orders.create') }}">Tambah Order Baru</a>
    <ul>
        @foreach($orders as $order)
            <li>{{ $order->namaPendaki }} - {{ $order->jumlah }} - {{ $order->tanggalOrder }}</li>
        @endforeach
    </ul>
@endsection
