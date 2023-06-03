<?php
$mahasiswa = ['chandra','galuh','ichka','febry','mahesa'];
$Binatang = ['🐕', '🐖', '🐎', '🐘', '🐑'];
$makanan = ['🌭', '🍕', '🥓','🍟', '🧀'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
<h2>Daftar Mahasiswa </h2>
<?php foreach ($mahasiswa as $i => $m){ ?>   
    
<ul>
    <li>nama: <?= $m;  ?></li>
    <li>makanan favorite: <?= $makanan[$i]; ?></li>
    <li>peliharaan: <?= $Binatang[$i]; ?><li>
</ul>
<?php } ?>
</body>


</html>