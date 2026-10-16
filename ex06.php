<?php
//1. Déclarer `$numeroMois = 3`.
//$numeroMois = 3
$numereMois = (int) date("m");
//2. Utiliser `switch` pour afficher le nom français correspondant aux nombres de 1 à 12.
switch ($numereMois ) {
    case 1:
        echo "Janvier";
        break;
    case 2:
        echo "Février";
        break;
    case 3:
        echo "Mars";
        break;
    case 4:
        echo "Avril";
        break;
    case 5:
        echo "Mai";
        break;
    case 6:
        echo "Juin";
        break;
    case 7:
        echo "Juillet";
        break;
    case 8:
        echo "Août";
        break;
    case 9:
        echo "Septembre";
        break;
    case 10:
        echo "Octobre";
        break;
    case 11:
        echo "Novembre";
        break;
    case 12:
        echo "Décembre";
        break;
//3. Prévoir un cas `default` affichant « Numéro de mois invalide ».        
    default:
        echo "Numéro de mois invalide";
}


?>