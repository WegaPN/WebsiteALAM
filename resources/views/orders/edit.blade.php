@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Order</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="user_id" class="form-label">User</label>
            <select class="form-control" id="user_id" name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $order->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jadwal_id" class="form-label">Jadwal</label>
            <select class="form-control" id="jadwal_id" name="jadwal_id">
                @foreach ($jadwals as $jadwal)
                    <option value="{{ $jadwal->id }}" {{ $jadwal->id == $order->jadwal_id ? 'selected' : '' }}>{{ $jadwal->jadwalPendakian }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $order->jumlah }}">
        </div>
        <div class="mb-3">
            <label for="namaPendaki" class="form-label">Nama Pendaki</label>
            <input type="text" class="form-control" id="namaPendaki" name="namaPendaki" value="{{ $order->namaPendaki }}">
        </div>
        <div class="mb-3">
            <label for="tanggalOrder" class="form-label">Tanggal Order</label>
            <input type="date" class="form-control" id="tanggalOrder" name="tanggalOrder" value="{{ $order->tanggalOrder }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
