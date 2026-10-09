<?php
//1. Définir la constante `TAUX_TVA` à `20` et la constante `DEVISE` à `"MAD"`.
define("TAUX_TVA" , 20);
$DIVISE = "MAD";
//2. Déclarer un prix unitaire HT de `60` et une quantité de `3`.
$prix_unutaire_HT=60;
$quantite = 3;
//3. Calculer le total HT, le montant de TVA et le total TTC.
$total_HT =$prix_unutaire_HT*$quantite;
$montant_TVA = $total_HT*(TAUX_TVA / 100);
$totale_TTC = $total_HT + $montant_TVA;
echo"le total HT = $total_HT $DIVISE<br>";
echo"le montant de TVA = $montant_TVA $DIVISE<br>";
echo "montant final = $totale_TTC  $DIVISE<br>";
//4. Ajouter `15 MAD` de frais de livraison au total TTC avec `+=`.
$totale_TTC += 15;
echo "le total TTC = $totale_TTC  $DIVISE<br>";
if  (defined("TAUX_TVA")){
    echo"TAUX_TVA est existe";
}else{
    echo"TAUX_TVA n'est pas existe";
}
?>