<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Halaman Admin</h1>
        <div class="row">
            <div class="col-12">
                @component('layout.composlots.alert', ['class' => 'warning', 'title' => 'Info'])
                    100 Data mahasiswa perlu diperbaiki
                @endcomponent

                @component('layout.composlots.alert', ['class' => 'danger', 'title' => 'Pengumuman'])
                    Hari ini deadline laporan perjanalan dinas!
                @endcomponent

                @component('layout.composlots.alert', ['class' => 'success', 'title' => 'Pengajuan'])
                    Bulan depan cuti panjang
                @endcomponent
            </div>
        </div>
    </div>
</body>
<script src="/js/jquery-3.3.1.slim.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

</html>
