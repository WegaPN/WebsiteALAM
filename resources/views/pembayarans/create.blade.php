@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pembayaran</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('pembayarans.store') }}" method="POST">
        @csrf
        <div class="input-container">
            <label for="user_id" class="form-label">User ID</label>
            <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('user_id') }}">
        </div>
        <div class="input-container">
            <label for="order_id" class="form-label">Order ID</label>
            <input type="text" class="form-control" id="order_id" name="order_id" value="{{ old('order_id') }}">
        </div>
        <div class="input-container">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan">{{ old('keterangan') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pembayarans.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection