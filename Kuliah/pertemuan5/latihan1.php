<?php
// ARRAY
// Membuat array
$hari = array('senin', 'selasa', 'rabu');
$bulan = ['Januari', 'Fenruari', 'Maret'];
$myArray = ['Shandika', 39, false];
$Binatang = ['🐕', '🐖', '🐎', '🐘', '🐑'];

// Mencetak array
// Mencetak 1 elemen array menggunakan echo

echo $hari[1];
echo "<br>";
echo $Binatang[3];
echo "<br>";
var_dump($Binatang);
echo "<br>";
print_r($Binatang);
echo "<hr>";

// Manipulasi array
// menggunakan array

$hari[3] = 'kamis';
print_r($hari);
echo "<br>";
// menambahkan elemen di akhir dengan mengosongkan lidexnya
$hari[] = "Jum'at";
$hari[] =  'sabru';
print_r($hari);
echo "<br>";

// menambahkan elemen di akhir menggunakan array_push
$bulan[] = "April";
array_push($bulan, 'Mei', 'juni', 'juli');
print_r($bulan);

?>