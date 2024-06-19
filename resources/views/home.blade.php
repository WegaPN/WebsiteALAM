@extends('layouts.app')

@section('content')
<div class="hero-login">
    <div class="login-container">
        <div class="card-header"><h2>{{ __('Dashboard') }}</h2></div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <br>

            {{ __('You are logged in!') }}
        </div>

        <div class="input-container">
            <a href="{{ ('/') }}" class="btn btn-primary">
                {{ __('Go to Home') }}
            </a>
        </div>
    </div>
</div>
@endsection
