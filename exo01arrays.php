<?php
require __DIR__.'/vendor/autoload.php';
$emptArray = [];
    
$cartes = [
 'pique',
 'coeur',
 'tréfle',
 'AS',
 'carreau',
];
dump($cartes);
$number = random_int(1, 4);
 dump($number);

 $cartesJouee = array_splice ($cartes, $number, -1,2);

 dump($cartesJouee);
 


echo "vous avez tire la carte n°{$number},{$cartesJouee [0]}.<br>\n";


