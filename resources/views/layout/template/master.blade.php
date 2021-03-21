<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link @yield('mhs')" href="/siswa">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('dos')" href="/dosen">Data Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('gal')" href="/gallery">Gallery</a>
            </li>
        </ul>
    </nav>

    @yield('content')


    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem Informasi Mahasiswa | Copyright © {{ date('Y') }}
        </div>
    </footer>
</body>
<script src="/js/jquery-3.3.1.slim.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

</html>
