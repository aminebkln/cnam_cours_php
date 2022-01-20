<?php
require __DIR__.'/vendor/autoload.php';
/*
Créez toutes les cartes de l'as au roi dans les quatre couleurs en utilisant une boucle foreach qui parcours un tableau contenant les quatre couleurs et une boucle for qui est imbriquée.
Une carte est représentée par un tableau à clé alphanumérique, comme ci-dessous avec l'as de cœur :
[
    'value': 1,
    'color: 'cœur',
]
Le résultat final doit être un tableau contenant les éléments suivants :
[
    [
        'value': 1,
        'color: 'cœur',
    ],
    [
        'value': 2,
        'color: 'cœur',
    ],
    [
        'value': 3,
        'color: 'cœur',
    ],
    ...
        [
        'value': 13,
        'color: 'cœur',
    ],
    ...
]
Ensuite, utilisez deux boucles foreach imbriquées pour afficher tous les éléments du tableau.
*/
$colors = ['cœur', 'carreau', 'treffle', 'pique'];
// on cree un tableau vide  
$cartes = [];
// on utilise la boucle pour recupuré chaque couleur
foreach ($colors as  $color) {
    // on fais une boucle pour cree une cartes de 13 cartes par couleurs
   for ($i=0; $i<13; $i++){
    $num=$i+1;
      $tab = [
          "value" => $num , 
          "color" => $color,

      ];
      $cartes[]= $tab;


   }
}
dump ($cartes);
foreach($cartes as $color){
    foreach($color as $donner){
        echo "$donner ";




    }
    echo "<br>";
}