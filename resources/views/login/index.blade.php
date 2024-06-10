@extends('layouts.app')

@section('title', 'Daftar Kecelakaan')

@section('content')
<div class="hero-login">
        <div class="login-container">
            <h2>Login</h2>
            <form action="#" method="POST">
                <div class="input-container">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-container">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="remember-me">
                    <input type="checkbox" id="remember-me" name="remember-me">
                    <label for="remember-me">Remember Me</label>
                </div>
                <button type="submit">Login</button>
                <div class="register-link">
                    <a href="#">Don't have an account? Register</a>
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
