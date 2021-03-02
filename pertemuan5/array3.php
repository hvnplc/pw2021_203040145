<?php
$mahasiswa =[
    ["fikri fadhlurrohman", "203040145", "Teknik Informatika", "email"],
    ["Dody ferdianysah", "203040111", "Teknik Informatika", "email"],
    ["erik", "203040222", "Teknik Informatika", "email"]
            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>


    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
      <li>Nama: <?php echo $mhs[0]; ?></li>
      <li>Nrp: <?php echo $mhs[1]; ?></li>
      <li>Jurusan:<?php echo $mhs[2]; ?></li>
      <li>Email:<?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>



</body>
</html>