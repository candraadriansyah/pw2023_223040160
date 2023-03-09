<?php
$angka1 = 10;
$angka2 = 5;
// GANJIL
// cek jika $angka dibagi 2, sisanya 1
// if ($angka1 % 2 == 1 && $angka2 % 2 == 1) {
//     echo "$angka1 adalah bilangan GANJIL!";
//     echo "<br>";
//     echo "$angka2 adalah bilangan GANJIL!";
// } else {
//     echo "$angka1 adalah bilangan GENAP!";
// //     echo "<br>";
// //     echo "$angka2 adalah bilangan GENAP!";
// }

function cek_genap_ganjil($angka){
    if ($angka %2 == 1){
        return "$angka adalah bilangan GANJIL!";
    }else {
        return "$angka adalah bilangan GENAP!";
    }

}
echo cek_genap_ganjil($angka1);
echo cek_genap_ganjil($angka2);
echo cek_genap_ganjil(102);