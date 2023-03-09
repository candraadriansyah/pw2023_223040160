<?php 
function urutanAngka ($number){
    $angkaAwal = 1;
    for ($i = 1; $i <= $number; $i++) {
        for ($j = 1; $j <= $i; $j++){
            echo $angkaAwal++ . " ";
        }    
        echo "<br>";
    }
}
    urutanAngka(5);
?>