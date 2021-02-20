<?php

function luas_dua_kubus($a, $b) {
    $luas_a = $a * $a *$a;
    $luas_a = $b * $b *$b;
    $total = $luas_a + $luas_a;
    return $total;
}
echo '<b><center><br><br>';
echo luas_dua_kubus(9,4);

?>