<!DOCTYPE html>
<html  lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 4</h1>
            <p>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.<br />Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.</p>
            <table>
                <tr>
                    <th>Magnitude</th>
                    <th>Phrase</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Micro-séisme impossible à ressentir.</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Séisme capable de tout détruire sur une très vaste zone.</td>
                </tr>
            </table>
            <p>Gérer tous les cas.<br />Utilser autre chose que des if else</p>
        </div>
        <div>
            <p>
                <?php
                $magnitude = 9;
                switch ($magnitude) {
                    case 1:
                        echo 'Micro-séisme impossible à ressentir.';
                        break;
                    case 2:
                        echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
                        break;
                    case 3:
                        echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
                        break;
                    case 4:
                        echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
                        break;
                    case 5:
                        echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
                        break;
                    case 6:
                        echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
                        break;
                    case 7:
                        echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
                        break;
                    case 8:
                        echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
                        break;
                    case 9:
                        echo 'Séisme capable de tout détruire sur une très vaste zone.';
                        break;
                    default : 
                        echo 'La valeur ne rentre pas dans l\'échelle de Richter';
                }
                ?>
            </p>
        </div>
    </body>
</html>