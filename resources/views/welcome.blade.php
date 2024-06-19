<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendakian Gunung Putri Lembang</title>
    <meta name="dicoding:email" content="devarefika28@gmail.com, wegapratama19@gmail.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <a href="/" class="logo"> <div class="logo">Gunung Putri Lembang</div> </a>
        <nav>
            <ul>
                <li><a href="pembayarans">Pembayaran</a></li>
                <li><a href="daftarHitams">Daftar Hitam</a></li>
                <li><a href="kecelakaans">Info Keselamatan</a></li>
                <li><a href="jadwals">Jadwal</a></li>
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            </ul>
        </nav>
    </header>
    <section class="hero">
        <div class="header-hero">
            <h1>Selamat datang di Website Pendakian Gunung Putri Lembang</h1>
            <button class="cta-button" onclick="window.location.href='/orders'">Pesan Tiket</button>
        </div>
    </section>
    
    <section class="jalur-pendakian">
        <h2>Jalur Pendakian</h2>
        <div class="map">
            <img src="img/map.png" alt="Map Jalur Pendakian">
        </div>
    </section>
    
    <section class="info-cards">
        <a href="/ketentuan" class="card card-1">
            <h3>Ketentuan & Kewajiban</h3>
        </a>
        <a href="/fasilitas" class="card card-2">
            <h3>Fasilitas</h3>
        </a>
        <a href="/larangan" class="card card-3">
            <h3>Larangan</h3>
        </a>
    </section>
    
    <div class ="help">
        <a href="#">
            <div class="icon">
                <i class="fas fa-phone"></i>
            </div>
        </a>
    </div>
</body>
<footer class="footer">Footer</footer>
</html>
