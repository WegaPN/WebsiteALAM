@extends('layouts.app')

@section('content')
<div class="hero-login">
    <div class="login-container">
        <div class="card-header"><h2>Edit Kecelakaan</h2></div>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('kecelakaans.update', $kecelakaan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-container">
                <label for="titikLokasi">{{ __('Titik Lokasi') }}</label>
                <input type="text" class="form-control" id="titikLokasi" name="titikLokasi" value="{{ $kecelakaan->titikLokasi }}">
            </div>
            
            <div class="input-container">
                <label for="keterangan">{{ __('Keterangan') }}</label>
                <textarea class="form-control" id="keterangan" name="keterangan">{{ $kecelakaan->keterangan }}</textarea>
            </div>
            
            <div class="input-container">
                <label for="tanggal">{{ __('Tanggal') }}</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $kecelakaan->tanggal }}">
            </div>
            
            <div class="input-container">
                <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                <a href="{{ route('kecelakaans.index') }}" class="btn btn-secondary">{{ __('Batal') }}</a>
            </div>
        </form>
    </div>
</div>
@endsection