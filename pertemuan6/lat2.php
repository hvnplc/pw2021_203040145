<?php
//$mahasiswa = [
 //               ["fikri fadhlurohman", "203040145", "email", "Teknik Informatika"],
   //             ["aldi ergdf", "203040111", "email", "Teknik Informatika"],
     //           ["agus aosjihdfg", "203040222", "email", "Teknik Informatika"],
     //       ];
//array associative
//array numerik yang key dari string nya di buat sendiri
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
              ],
              [ "nama"=>"Lenovo",
                "model"=>"Y740Si",
                "ukuran"=>"17",
                "harga"=>"35.499.000,00",
                "foto"=> 'lenovo.jpg'
              ],
              [ "nama"=>"Acer",
                "model"=>"AN71551",
                "ukuran"=>"15.6",
                "harga"=>"21.099.000",
                "foto"=> 'acer.jpg'
              ],
              [ "nama"=>"HP",
                "model"=>"17t-cb100",
                "ukuran"=>"17.3",
                "harga"=>"T15.461.892,83",
                "foto"=> 'hp.jpg'
              ]
              
             ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Laptop</title>
</head>
<body>
    <h1> Daftar Laptop </h1>

    <?php foreach($laptop as $jenis): ?>
    <ul>
        <li>
            <img src='img/<?=$jenis['foto'];?>'>
        </li>
        <li>Nama: <?= $jenis['nama']; ?></li>
        <li>Model: <?= $jenis['model']; ?></li>
        <li>Ukuran: <?= $jenis['ukuran']; ?></li>
        <li>Harga: <?= $jenis['harga']; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>