<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 8</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 8</h1>
            <p>Traduire ce code avec des if et des else :</p>
            <blockquote>< ?php echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!'; ?></blockquote>
        </div>
        <div>
            <p>
                <?php
                $isOk = true;
                if ($isOk) {
                    echo 'C\'est ok !!';
                } else {
                    echo 'C\'est pas bon !!!';
                }
                ?>
            </p>
        </div>
    </body>
</html>