<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 7</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 7</h1>
            <p>Traduire ce code avec des if et des else :</p>
            <blockquote>< ?php echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!'; ?></blockquote>
        </div>
        <div>
            <p>
                <?php
                $isOk = true;
                if ($isOk == false) {
                    echo 'C\'est pas bon !!!';
                } else {
                    echo 'C\'est ok !!';
                }
                ?>
            </p>
        </div>
    </body>
</html>