<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa List</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
    <?php 
        foreach ($mahasiswa as $nama) {
            echo "<li>$nama</li>";
        }
    ?>
    </ol>
    <div>
       <img src="/image/BSG-Black.jpg" alt="" width="100px">
       <img src="/image/BSG-Red.jpg" alt="" width="100px">
       <img src="/image/ok-setda.png" alt="" width="100px"> 
    </div>
    <div>
        Copyright <?= date("Y"); ?>
    </div>
<script src="/js/style.js"></script>   
</body>
</html>
