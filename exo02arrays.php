<?php
require __DIR__.'/vendor/autoload.php';
$emptArray = [];

$cartes = [
 '5 pique',
 '9 tréfle',
 ' 2 AS',
 '7 carreau',
 ' 4 coeur',
];
dump($cartes);
$number1 = random_int(1, 5);
$number2 = random_int(1, 5);

dump($number1);

dump($number2);

if($number1 == $number2){echo"vous tiré le meme chifre "; exit();}

$cartesJouee1 = array_splice ($cartes, $number1 -1, 1);

$cartesJouee2 = array_splice ($cartes, $number2 -1,1);

dump($cartesJouee1);

dump($cartesJouee2);
echo "Vous avez tiré la carte $cartesJouee1[0] en cartes 1";
echo "Vous avez tiré la carte $cartesJouee2[0]en cartes 2";

$valCartes1 = (int) $cartesJouee1[0];
$valCartes2 = (int) $cartesJouee2[0];

if($valCartes1 == $valCartes2){
    
    echo "les carte sont de la meme valeur  ";
 } elseif($valCartes1 > $valCartes2){
     echo "la carte $valCartes1 est superieur à la $valCartes2";
  } elseif ($valCartes1  <  $valCartes2 ){}
