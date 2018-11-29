<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 6</h1>
            <p>Traduire ce code avec des if et des else :</p>
            <blockquote>< ?php echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur'; ?></blockquote>
        </div>
        <div>
            <p>
                <?php
                $age = '5';
                if ($age >= '18') {
                    echo 'Tu es majeur';
                } else {
                    echo 'Tu n\'es pas majeur';
                }
                ?>
            </p>
        </div>
    </body>
</html>