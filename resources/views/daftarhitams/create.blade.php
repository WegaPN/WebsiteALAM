@extends('layouts.app')

@section('content')
<div class="hero-login">
    <div class="login-container">
        <div class="card-header"><h2>Tambah Daftar Hitam</h2></div>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('daftarHitams.store') }}" method="POST">
            @csrf
            
            <div class="input-container">
                <label for="user_id">{{ __('User') }}</label>
                <select class="form-control" id="user_id" name="user_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="input-container">
                <label for="tanggalBlacklist">{{ __('Tanggal Blacklist') }}</label>
                <input type="date" class="form-control" id="tanggalBlacklist" name="tanggalBlacklist" value="{{ old('tanggalBlacklist') }}">
            </div>
            
            <div class="input-container">
                <label for="keterangan">{{ __('Keterangan') }}</label>
                <textarea class="form-control" id="keterangan" name="keterangan">{{ old('keterangan') }}</textarea>
            </div>
            
            <div class="input-container">
                <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                <a href="{{ route('daftarHitams.index') }}" class="btn btn-secondary">{{ __('Batal') }}</a>
            </div>
        </form>
    </div>
</div>
@endsection