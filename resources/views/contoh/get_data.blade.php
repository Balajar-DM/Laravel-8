<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa List</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center mt-3 py-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nilai }}</h1>
        <br>
            <ins>Example if in blade :</ins> <br>
        @if (($nilai >= 0) and ($nilai < 50))
            <div class="alert alert-danger d-inline-block">
            Maaf, anda tidak lulus
            </div>
        @elseif (($nilai >= 50) and ($nilai <= 100))
        <div class="alert alert-success d-inline-block">
            Selamat, anda lulus
            </div>
        @endif
            <hr>
            <ins>Example switch in blade</ins> <br>
            @switch($nilai)
                @case(0)
                    <div class="alert alert-danger d-inline-block">Tidak ikut ujian</div>
                    @break
                @case(75)
                    <div class="alert alert-success d-inline-block">Lumayan</div>
                    @break
                @case(100)
                    <div class="alert alert-success d-inline-block">Sempurna</div>
                    @break
                @default
                    <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
            @endswitch
    </div>
    <script src="/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>