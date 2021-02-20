<?php

    //$a = 'informatika';
    //kondisi 1 pilihan
    //if ($a == 'informatika') {
    //    echo 'Login';
    // }else
    //    echo 'salah';



    //lampu hijau   = maju
    //lampu kuning  = hati hati
    //lampu merah   = berhenti

//$lampu = 'biru';

//if ($lampu == 'merah') {
//    echo 'berhenti';
//} elseif ($lampu == 'kuning') {
//    echo 'siap-siap';
//} elseif ($lampu = 'hijau') {
//    echo 'maju';
//} else{
//    echo 'lampu tidak terditeksi';
//}

//nilai >= 80 : nilai A
//nilai >= 70 : nilai B
//nilai >= 60 : nilai c
//nilai <= 59 : nilai d

$nilai = '40';

if ($nilai >= '80') {
    echo 'A';
} elseif ($nilai >= '70') {
    echo 'B';
} elseif ($nilai >= '60') {
    echo 'C';
} else{
    echo 'D';
}






$kondisi = (date('H') <12) ? 'Selamat Pagi' ; "Selamat Siang";
echo $kondisi;

?>