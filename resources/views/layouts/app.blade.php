<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')

</head>
<body>
    <header>
        <div class="logo">Gunung Putri Lembang</div>
        <nav>
            <ul>
                <li><a href="#info">Info Keselamatan</a></li>
                <li><a href="{{ route('jadwals.index') }}">Jadwal Pendakian</a></li>
                <li><a href="#login">Login/Register</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
<footer class="footer">Footer</footer>
</html>
