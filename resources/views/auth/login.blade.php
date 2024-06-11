@extends('layouts.app')

@section('content')
<div class="hero-login">
        <div class="login-container">
        <div class="card-header"><h2>Login</h2></div>
        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-container">
                            <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="input-container">
                            <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input-container">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </div>

                        <div class="input-container">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                    </form>
        </div>
    </div>
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Register</h2>
            <form action="#" method="POST">
                <div class="input-container">
                    <label for="reg-username">Username</label>
                    <input type="text" id="reg-username" name="reg-username" required>
                </div>
                <div class="input-container">
                    <label for="reg-password">Password</label>
                    <input type="password" id="reg-password" name="reg-password" required>
                </div>
                <div class="input-container">
                    <label for="reg-password-confirm">Retype Password</label>
                    <input type="password" id="reg-password-confirm" name="reg-password-confirm" required>
                </div>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
@endsection
