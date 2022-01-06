<?php




require __DIR__.'/vendor/autoload.php';




$isWateroff = (bool) random_int(0, 1);
$isGasoff = (bool) random_int(0,1);
dump ($isWateroff);
dump ($isGasoff);
if ($isWateroff && $isGasoff) {
     
    echo 'on puet partir en we! <br>';
} else {

    echo 'on ne peut pas partie en we<br>';
    
    







}