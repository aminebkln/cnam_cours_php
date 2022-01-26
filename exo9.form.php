<?php

/*
Vérifiez que tous les champs ont bien été remplis.
S'il y a des erreurs, affichez un message d'erreur dans la div au dessus du champ correspondant.
Pour le moment le message de confirmation s'affiche en permanence.
Vous devez le masquez s'il n'est pas pertinent :
- s'il y a des erreurs, il doit être masqué
- si l'utilisateur n'a envoyé aucune donné, il doit être masqué
*/

require __DIR__.'/vendor/autoload.php';

dump($_POST);

$errors = [];

if ($_POST) {
    if (empty($_POST['nom'] )) {
         // le champ nom est vide
        $errors['nom'] = 'Vous devez renseigner ce champ';
    }
     if (empty($_POST['email'] )) {
          // le champ email est vide 
        $errors['email'] = 'Vous devez renseigner ce champ';
    }
     if (empty($_POST['password'] )) { 
          // le champ password est vide
        $errors['password'] = 'Vous devez renseigner ce champ';
        // le message de confirmation
    if (!empty($_POST['nom'] &&  $_POST['email'] && $_POST['password'])) {
        
        $conf='votre compte et bien enregitré';
       
    }
}
}
      

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo</title>
</head>
<body>
    <h1>Exo</h1>
    
    <div class="confirmation">
   
    <?php if (!empty($nom)&&!empty($email)&&!empty($password)):?> 
        <? $conf ?>
        <?php endif ?>
    
      
    </div>

    <form action="" method="post">
        <p> </p>
        <div>
            <div class="error">

            <?php if (isset($errors['nom'])): ?>
                    <?= $errors['nom'] ?>
                <?php endif ?>
           
            </div>
            <input type="text" name="nom" placeholder="votre nom d'utilisateur" value="<?= htmlentities($_POST['nom'] ?? '') ?>">
        </div>
        <div>
            <div class="error">

            <?php if (isset($errors['email'])): ?>
                    <?= $errors['email'] ?>
                <?php endif ?>
            </div>
            <input type="email" name="email" placeholder="votre mail" value="<?= htmlentities($_POST['email'] ?? '') ?>">
        </div>
        <div>
            <div class="error">

            <?php if (isset($errors['password'])): ?>
                    <?= $errors['password'] ?>
                <?php endif ?>
            </div>
            <input type="password" name="password" placeholder="votre mot de passe" value="<?= htmlentities($_POST['password'] ?? '') ?>">
        </div>
        <div>
            <button type="submit">Valider</button>
        </div>
    </form>
</body>
</html>