<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 3</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 3</h1>
            <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :<br />Homme<br />    Femme
            <p>En fonction de l'âge et du genre afficher la phrase correspondante :<br />Vous êtes un homme et vous êtes majeur<br />Vous êtes un homme et vous êtes mineur<br />Vous êtes une femme et vous êtes majeur<br />Vous êtes une femme et vous êtes mineur</p>
            <p>Gérer tous les cas.</p>
        </div>
        <div>
            <p>
                <?php
                $age = 19;
                $gender = 'Femme';
                if ($gender == 'Femme') {
                    $text = 'e';
                }
                if ($age >= 18 && ($gender == 'Homme' || $gender == 'Femme')) {
                    echo 'Vous êtes un' . $text . ' ' . strtolower($gender) . ' et vous êtes majeur' . $text;
                } else {
                    echo 'Vous êtes un' . $text . ' ' . strtolower($gender) . ' et vous êtes mineur' . $text;
                }
                ?>
            </p>
        </div>
    </body>
</html>