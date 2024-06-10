@extends('layouts.app')

@section('title', 'Daftar Kecelakaan')

@section('content')
<div class="hero-tabel">
        <h1>Daftar Kecelakaan</h1>
        <div class="container-80">
            <button id="reportButton">Laporkan kecelakaan</button>
            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Lokasi</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01/01/2001</td>
                        <td>Kaki Gunung</td>
                        <td>Longsor</td>
                    </tr>
                </tbody>
            </table>
        </div> 
    </div>
    <div id="kecelakaanModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Laporkan Kecelakaan</h2>
            <form action="#" method="POST">
                <div class="input-container">
                    <label for="reg-tanggal">Tanggal</label>
                    <input type="date" id="reg-tanggal" name="reg-tanggal" required>
                </div>
                <div class="input-container">
                    <label for="reg-lokasi">Lokasi</label>
                    <input type="text" id="reg-Lokasi" name="reg-Lokasi" required>
                </div>
                <div class="input-container">
                    <label for="reg-keterangan">Keterangan</label>
                    <input type="text" id="reg-keterangan" name="reg-keterangan" required>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
