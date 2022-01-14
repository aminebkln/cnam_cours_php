


<?php
/*
Afficher tous les éléments du tableau $fruits avec une boucle foreach.
Afficher le message « première itération » lors de la première itération et le message « dernière itération » lors de la dernière itération.
Pour déterminer s’il s’agit de la dernière itération, vous devez utiliser la fonction count().
*/


    $fruit  = ['ananas','banane', 'cerise'];

    foreach( $fruit as $number => $int){
        echo "$number <br>";
    
        if($number==0 ){
            echo "première itération<br>";
        }

    
        
        if($number == 2){
            echo "dernière itération <br>";
        }
    


        
    }
    