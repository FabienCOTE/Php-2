<!DOCTYPE html>
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
            <p>
                <?php
                $isEasy = true;
                if ($isEasy == true) {
                    echo 'C\'est facile';
                } else {
                    echo 'C\'est dificile';
                }
                ?>
            </p>
            <p><?= ($isEasy == true) ? 'C\'est facile' : 'C\'est difficile'; ?></p>
            </p>
        </div>
    </body>
</html>