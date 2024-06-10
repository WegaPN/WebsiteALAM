@extends('layouts.app')

@section('title', 'Daftar Daftar Hitam')

@section('content')
<div class="hero-tabel">
        <h1>Daftar Hitam</h1>
        <div class="container-80">
            <table>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Alasan</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Merusak Fasilitas</td>
                        <td>01/01/2001</td>
                    </tr>
                </tbody>
            </table>
        </div> 
    </div> 
@endsection
