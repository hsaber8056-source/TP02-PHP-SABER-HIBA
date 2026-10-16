<?php
//1. Déclarer une variable `$moyenne`.
$moyenne=21;
//2. Vérifier que sa valeur est comprise entre 0 et 20 ; sinon afficher « Note invalide ».
if ($moyenne < 0 || $moyenne > 20) {
    echo "Note invalide";
}else {
    echo "Non validé";
}
echo"<br>";
/*3. Pour une valeur valide, afficher :

| Moyenne | Message |
|---|---|
| Inférieure à 10 | Non validé |
| De 10 inclus à 12 exclu | Passable |
| De 12 inclus à 14 exclu | Assez bien |
| De 14 inclus à 16 exclu | Bien |
| De 16 à 20 inclus | Très bien |
*/
if ($moyenne < 10) {
    echo "Non validé";
}
elseif ($moyenne >= 10 && $moyenne < 12) {
    echo "Passable";
}
elseif ($moyenne >= 12 && $moyenne < 14) {
    echo "Assez bien";
}
elseif ($moyenne >= 14 && $moyenne < 16) {
    echo "Bien";
}
elseif ($moyenne >= 16 && $moyenne <= 20) {
    echo "Très bien";
}
else {
    echo "la note est non carrect";
}


?>