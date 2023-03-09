<?php 
$rluas = 10;
$rkeliling = 20;

function hitungLuasLingkaran ($r) {
    return 3.14 * $r *$r;
}

function hitungKelilingLingkaran ($r) {
    return 2 * 3.14 * $r ;
}

echo "<h4>Menghitung Luas Lingkaran</h4><br>";
echo "Jari-Jari = $rluas cm.<br>";
echo "Luas lingkaran = " . hitungLuasLingkaran($rluas) . "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4><br>";
echo "Jari-Jari = $rkeliling cm.<br>";
echo "Luas lingkaran = " . hitungKelilingLingkaran($rkeliling) . "<hr>";
?>