<?php

/*
Créez toutes les cartes de l'as au roi de cœut en utilisant une boucle for.
Le résultat doit être un tableau contenant les éléments suivants : ['1 cœur', '2 cœur', ..., '13 cœur']
Ensuite, utilisez une boucle foreach pour afficher tous les éléments du tableau.
*/


require __DIR__.'/vendor/autoload.php';

// creation un tableau vide

$cartes = [
];

for ($i=0;$i<13;$i++){

    $num=$i+1;

    $cartes[] = "$num coeur";

   
}
dump($cartes);
$nomcartes = $cartes ;
$nomcartes = preg_replace('/^1 /', 'as ',$nomcartes);
$nomcartes = preg_replace('/^11 /', 'valet ',$nomcartes);
$nomcartes = preg_replace('/^12 /', 'dame ',$nomcartes);
$nomcartes = preg_replace('/^13 /', 'rois ',$nomcartes);
// on afficher touts les elements avec une boucle foreach
 foreach ($nomcartes as $element) {
     
    echo $element."<br>";

 }