<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 2</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 2</h1>
            <p>Créer une variable isEasy de type booléan et l'initialiser avec une valeur.<br />Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.<br />Bonus : L'écrire de deux manières différentes.</p>
        </div>
        <div>
            <p><?php
                $isEasy = true;
                if ($isEasy == true) {
                    echo 'C\'est facile';
                } else {
                    echo 'C\'est dificile';
                }
                
                echo '<br /></p><h2>Bonus :</h2><p>';
                
                switch ($isEasy) { 
                    case true:
                        echo 'C\'est facile';
                    break;
    
                    case false:
                        echo 'C\'est dificile';
                    break;
                }
            ?></p>
        </div>
    </body>
</html>