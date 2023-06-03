<?php
$mahasiswa = [
['chandra','🐕','🌭'],
['galuh','🐖','🍕'],
['ichka','🐎','🧀'],
['febry','🐘','🥓'],
['mahesa','🐑','🍟']]


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
    <li>nama: <?= $mhs[0];  ?></li>
    <li>makanan favorite: <?= $mhs[2]; ?></li>
    <li>peliharaan: <?= $mhs[1]; ?><li>
</ul>
<?php } ?>
</body>


</html>