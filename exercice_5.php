<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 5</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 5</h1>
            <p>Traduire ce code avec des if et des else :</p>
            <blockquote>< ?php echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!'; ?></blockquote>
        </div>
        <div>
            <p>
                <?php
                $gender = 'Homme';
                if ($gender != 'Homme') {
                    echo 'C\'est une développeuse !!!';
                } else {
                    echo 'C\'est un développeur !!!';
                }
                ?>
            </p>
        </div>
    </body>
</html>