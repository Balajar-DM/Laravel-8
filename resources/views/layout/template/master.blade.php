<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>@yield('title', 'Sistem Informasi Mahasiswa')</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link @yield('mhs')" href="{{ route('siswa') }}">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('dos')" href="{{ route('dosen') }}">Data Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('gal')" href="{{ route('gambar') }}">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('inf')" href="{{ route('info', ['fakultas' => 'TEKNIK', 'jurusan' => 'PTIK']) }}">Info</a>
            </li>
        </ul>
    </nav>

    {{-- @yield('content') --}}
    @section('content')
        <div class="alert alert-primary text-center">Sistem Informasi Mahasiswa</div>
    @show


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