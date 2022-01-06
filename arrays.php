<?php
require __DIR__.'/vendor/autoload.php';
 
$emptArray = [];

$fruits = [ 'anans','banane','ceris',];


$fruits = [
'ananas',
'banane',
'ceris',

];
   dump ($fruits);
  echo "fruits n°1, : {$fruits[0]}<br>\n";

echo "fruits n°2, :{$fruits[1]}<br>\n";

echo "fruits n°3, :{$fruits[2]}<br>\n";

// accès en écriture au fruits n°1 avec $fruits [0]

$fruits[0] ='abricots';
   
dump($fruits);



// accès en lecture au fruits n°1 avec $fruits [0]

echo "fruits n°1 : {$fruits[0]}<br>\n";

// la fonction qui permet de connaitre la taille d'un tableau
$size = count($fruits);



echo "il y a {$size} fruits<br>\n";



echo "il y a " .count($fruits)." fruits<br>\n";



$fruits[] ='datte';

$fruits[] ='fraise';
dump($fruits);



$size = count($fruits);

echo " il y a {$size} fruits<br>\n";



// enlever le premier élément

$fruitA = array_shift($fruits);



dump($fruitA);

dump($fruits);



// enlever le dernier élément

$fruitF = array_pop($fruits);
dump($fruits);



$size = count($fruits);

echo " il y a {$size} fruits<br>\n";



// enlever le premier élément

$fruitA = array_shift($fruits);



dump($fruitA);

dump($fruits);



// enlever un elément au milieu de tableau 
//enlever a partir de l'index 1, 1seul elemnt 
$fruitsRemoved = arry_splice($fruits, 1, 1);

dump($fruitsRemoved);
dump(fruits);

//enlever un elément 
//@warning la foction unsent() ne reindexe pas le tableau 
//mais elle est plus simple et rapide 
unset($fruits[0]);

unset($fruits);
dump($spigliste);
if (!in_array('ananas', $sbigtListe)){
    echo "il n'ya pas d'ananas dans la liste<br>\n";
}
if (in_arry('carotte', $bigListe));