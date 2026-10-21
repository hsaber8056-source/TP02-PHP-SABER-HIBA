
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
<?php
echo"<h2>Q1</h2>";
//1. Avec `while`, afficher les nombres pairs de 0 à 20 inclus et mettre uniquement 10 en gras.
$i=0;
while($i<=20){
    if($i== 10){
        echo"<b>".$i."</b><br>";
    }else{
        echo $i."<br>";
    }
    $i+=2;
}
echo"<br><h2>Q2</h2>";
//2. Initialiser un compteur à 5. Avec la condition « compteur inférieur à 5 », comparer une boucle `while` et une boucle `do-while`. Réinitialiser le compteur avant chaque boucle et compter les exécutions de leur corps.
// Boucle while
$compteur = 5;
$executionWhile = 0;

while ($compteur < 5) {
    echo "while : " . $compteur . "<br>";
    $executionWhile++;
    $compteur++;
}

echo "Nombre d'executions de while : " . $executionWhile . "<br>";

// Boucle do-while
$compteur = 5;
$executionDoWhile = 0;

do {
    $executionDoWhile++;
    $compteur++;
} while ($compteur < 5);

echo "Nombre d'executions de do-while : " . $executionDoWhile;
echo"<br><h2>Q3</h2>";
//3. Parcourir les entiers de 1 à 20. Utiliser `continue` pour ignorer les multiples de 3 et `break` pour arrêter la boucle dès que le compteur atteint 16, avant son affichage.
for ($i = 1; $i <= 20; $i++) {

    if ($i >= 16) {
        break;
    }

    if ($i % 3 == 0) {
        continue;
    }

    echo $i . "<br>";
}

?>    
</body>
</html>