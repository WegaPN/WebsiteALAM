@extends('layouts.app')

@section('title', 'Fasilitas Mendaki')

@section('content')
<section class="facilities">
        <h1 class="facilities-title">FASILITAS</h1>
        <div class="facility-cards">
            <div class="facility-card">
                <h3>Fasilitas 1</h3>
                <img src="/img/ketentuan.webp" alt="Fasilitas 1">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vulputate urna sit amet sollicitudin.</p>
            </div>
            <div class="facility-card">
                <h3>Fasilitas 2</h3>
                <img src="/img/fasilitas.webp" alt="Fasilitas 2">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vulputate urna sit amet sollicitudin.</p>
            </div>
            <div class="facility-card">
                <h3>Fasilitas 3</h3>
                <img src="/img/persiapan.jpg" alt="Fasilitas 3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vulputate urna sit amet sollicitudin.</p>
            </div>
        </div>
    </section>
@endsection
