@extends('layouts.app')

@section('content')
<div class="hero-tabel">
    <h1>Daftar Pembayaran</h1>
    <div class="container-80">
        <a href="{{ route('pembayarans.create') }}" class="btn btn-primary mb-3">Tambah Pembayaran</a>
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
                    <th>Order</th>
                    <th>Metode Pembayaran</th>
                    <th>Jumlah Pembayaran</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembayarans as $pembayaran)
                    <tr>
                        <td>{{ $pembayaran->id }}</td>
                        <td>{{ $pembayaran->order->id }}</td>
                        <td>{{ $pembayaran->metodePembayaran }}</td>
                        <td>{{ $pembayaran->jumlahPembayaran }}</td>
                        <td>{{ $pembayaran->tanggalPembayaran }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('pembayarans.show', $pembayaran->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('pembayarans.edit', $pembayaran->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pembayarans.destroy', $pembayaran->id) }}" method="POST" style="display:inline-block;">
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