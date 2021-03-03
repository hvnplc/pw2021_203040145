<?php
/*variable scope / lingkup variabel
$x = 10; //local variable

function tampilx(){
    global $x; //get dari variabel global
    echo $x;
}
tampilx();
*/
//super global
//var_dump($_GET);

$laptop = [
    [ "nama"=>"DELL",
      "model"=>"Area 51m",
      "ukuran"=>"17.3",
      "harga"=>"40.000.000,00",
      "foto"=> 'dell.jpg'
    ],
    [ "nama"=>"Asus",
      "model"=>"GX550LXS",
      "ukuran"=>"15.6",
      "harga"=>"97.999.999,00",
      "foto"=> 'asus.jpg'
    ]]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1> Daftar Laptop </h1>
    <?php foreach($laptop as $jenis): ?>
    <ul>
        
        <li>
            <a href='lat2.php?nama=<?= $jenis['nama']; ?>'><?= $jenis['nama']; ?> </a>
        
    </ul>
    <?php endforeach; ?>
</body>
</html>