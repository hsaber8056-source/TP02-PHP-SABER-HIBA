<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
    <section>
        <h1>table de multiplication</h1>
        <?php
            //1. Déclarer `$nombre = 7` et afficher sa table de multiplication de 1 à 10.
            $nombre = 7;
            for ($i = 0; $i <= 10; $i++) {
                echo $nombre, " x ",$i," = ",($nombre*$i) ,"<br>";

            }        
        ?>
    </section>
    <h1> Pyramide d'étoiles</h1>
    <section>
    <?php
        
        //2. Utiliser deux boucles `for` imbriquées pour produire une pyramide de six lignes, comportant respectivement 1, 2, 3, 4, 5 et 6 étoiles.

        for ($i = 1; $i <= 6; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    ?>
    </section>
</body>
</html>
