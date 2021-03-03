<?php
//cek data ada atau tidak di $_GET
if( !isset($_GET['nama']) ||
    !isset($_GET['model']) ||
    !isset($_GET['ukuran']) ||
    !isset($_GET['harga']))){
    //redirect
    header('Location: lat1.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li>
            <img src='img/<?=$jenis['foto'];?>'>
        </li>
        <li>Nama: <?= $jenis['nama']; ?></li>
        <li>Model: <?= $jenis['model']; ?></li>
        <li>Ukuran: <?= $jenis['ukuran']; ?></li>
        <li>Harga: <?= $jenis['harga']; ?></li>
    </ul>
<a href='lat1.php'>Kembali</a>

</body>
</html>