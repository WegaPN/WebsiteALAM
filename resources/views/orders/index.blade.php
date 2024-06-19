@extends('layouts.app')

@section('content')
<div class="hero-tabel">
    <h1>Daftar Order</h1>
    <div class="container-80">
        <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Tambah Order</a>
        <br>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Jadwal</th>
                    <th>Jumlah</th>
                    <th>Nama Pendaki</th>
                    <th>Tanggal Order</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->jadwal->jadwalPendakian }}</td>
                        <td>{{ $order->jumlah }}</td>
                        <td>{{ $order->namaPendaki }}</td>
                        <td>{{ $order->tanggalOrder }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline-block;">
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