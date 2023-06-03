<?php
// ARRAY ASSOCIATIVE
// Array yang index string yang kita buat sendiri
$mahasiswa = [
['nama' => 'chandra','peliharaan'=>'🐕','makanan' => '🌭'],
['nama' => 'galuh','peliharaan' =>'🐖','makanan' => '🍕'],
['nama' => 'ichka','peliharaan' =>'🐎','makanan' =>'🧀'],
['nama' => 'febry', 'peliharaan'=>'🐘','makanan' => '🥓'],
['nama' => 'mahesa','peliharaan'=>'🐑','makanan' => '🍟']]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
</head>


<body>
<h2>Daftar Mahasiswa </h2>
<?php foreach($mahasiswa as $mhs){ ?>   
    
<ul>
    <li>nama: <?= $mhs['nama'];  ?></li>
    <li>makanan favorite: <?= $mhs['makanan']; ?></li>
    <li>peliharaan: <?= $mhs['peliharaan']; ?><li>
</ul>
<?php } ?>
</body>


</html>