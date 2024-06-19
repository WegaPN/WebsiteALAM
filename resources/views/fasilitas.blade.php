@extends('layouts.app')

@section('title', 'Fasilitas Mendaki')

@section('content')
<section>
    <div class="bg-fasilitas">
        <h1>FASILITAS YANG TERSEDIA</h1>
        <h4>PENDAFTAR WAJIB MEMBACA DAN MEMAHAMI SEMUA PERATURAN PENDAKIAN !!!</h4>
        <div class="container-fasilitas">
        <div class="teksf">Fasilitas</div>
        <div><h2> Pos Simaksi</h2></div>
        <div><img src="/img/pos1.jpg" class="pos"></div>
        <div><figcaption>(Bagi Pendaki Yang Tidak Bisa Mendaftar Online, Bisa Melakukan Pendaftaran Secara Langsung Di Pos Pendaftaran Gunung Putri)</figcaption></div>    
        <div><h2>Lahan Parkir</h2></div>
        <div><img src="/img/pos2.jpg" class="pos"></div>
        <div><figcaption>(Bagi Pendaki Yang Membawa Kendaraan Pribadi, Bisa Menyimpan Kendaraannya Di kawasan Parkir Gunung Putri)</figcaption></div>
        <div><h2>MCK</h2></div>
        <div><img src="/img/mck.jpg" class="pos"></div>
        <div><figcaption>(Terdapat Fasilitas MCK di kawasan camping Gunung Putri)</figcaption></div>
    </div>
    </section>
@endsection
