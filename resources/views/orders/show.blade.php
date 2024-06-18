@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Order</h1>
    <div class="input-container">
        <label class="form-label">User</label>
        <input type="text" class="form-control" value="{{ $order->user->name }}" readonly>
    </div>
    <div class="input-container">
        <label class="form-label">Jadwal</label>
        <input type="text" class="form-control" value="{{ $order->jadwal->jadwalPendakian }}" readonly>
    </div>
    <div class="input-container">
        <label class="form-label">Jumlah</label>
        <input type="text" class="form-control" value="{{ $order->jumlah }}" readonly>
    </div>
    <div class="input-container">
        <label class="form-label">Nama Pendaki</label>
        <input type="text" class="form-control" value="{{ $order->namaPendaki }}" readonly>
    </div>
    <div class="input-container">
        <label class="form-label">Tanggal Order</label>
        <input type="text" class="form-control" value="{{ $order->tanggalOrder }}" readonly>
    </div>
    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection