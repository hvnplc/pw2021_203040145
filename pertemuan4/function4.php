<?php

$tulisan = 'Selamat datang di kuliah pemograman web 2';
echo '<center><br><br>';
echo str_replace('a', '*', $tulisan), '<br>';
$kuliah = "pemogramn web 2";
echo str_replace($kuliah, '<b>$kuliah</b>', $tulisan);


?>