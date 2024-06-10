@extends('layouts.app')

@section('title', 'Daftar Jadwal Pendakian')

@section('content')
<div class="hero-tabel">
        <h1>Jadwal & Kuota Pendakian</h1>
    <div class="container-80">
        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Kuota</th>
                    <th>Pesan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01/01/2001</td>
                    <td>30</td>
                    <td><button>Pergi</button></td>
                </tr>
            </tbody>
        </table>
    </div> 
</div>
@endsection
