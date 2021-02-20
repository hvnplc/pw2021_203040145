<?php

$tulisan = 'Selamat datang di kuliah pemograman web 2';


echo '<center><br><br>';
echo '<b>Teks Asli</b><br>', $tulisan, '<br><b> menjadi </b><br><br>';
echo substr($tulisan, 8) , '<br>';
echo substr($tulisan, 8, 6) , '<br>';
echo substr($tulisan, -17) , '<br>';


?>