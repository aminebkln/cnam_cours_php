<?php

$emptArray = [];

$cartes = [ 'pique','coeur',' trèfle','AS','carreau'];

$cartes = [
 'pique',
 'coeur',
 'tréfle',
 'AS',
 'carreau',
];

$number = random_int(0, 5);
 
echo "vous avez tire la carte n°1,:{$cartes[$number]}<br>\n";