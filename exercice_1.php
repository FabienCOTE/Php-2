<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 1</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 1</h1>
            <p>Créer une variable age et l'initialiser avec une valeur.<br />Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>
        </div>
        <div>
            <p><?php
                $age = 29;
                if($age >= 18) {
                    echo 'Vous êtes majeur';
                } else {
                    echo 'Vous êtes mineur';
                }
            ?></p>
        </div>
    </body>
</html>