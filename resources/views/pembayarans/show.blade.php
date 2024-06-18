@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pembayaran</h1>
    <div class="input-container">
        <label class="form-label">User ID</label>
        <input type="text" class="form-control" value="{{ $pembayaran->user_id }}" readonly>
    </div>
    <div class="input-container">
        <label class="form-label">Order ID</label>
        <input type="text" class="form-control" value="{{ $pembayaran->order_id }}" readonly>
    </div>
    <div class="input-container">
        <label class="form-label">Keterangan</label>
        <textarea class="form-control" readonly>{{ $pembayaran->keterangan }}</textarea>
    </div>
    <a href="{{ route('pembayarans.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection