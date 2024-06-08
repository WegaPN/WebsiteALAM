<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')

</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('users.index') }}">Users</a></li>
            <li><a href="{{ route('jadwals.index') }}">Jadwal Pendakian</a></li>
            <li><a href="{{ route('orders.index') }}">Orders</a></li>
            <li><a href="{{ route('pembayarans.index') }}">Pembayaran</a></li>
            <li><a href="{{ route('daftarHitams.index') }}">Daftar Hitam</a></li>
            <li><a href="{{ route('kecelakaans.index') }}">Kecelakaan</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
