<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];
//1. Afficher les étudiants et leurs notes dans un tableau HTML avec `foreach`.

foreach ($notes as $nom => $note) {
    echo $nom . " : " . $note . "<br>";
}
//2. Ajouter une colonne « Validé » ou « Non validé », avec un seuil de 10.
$nbValides = 0;
if ($note >= 10) {
    $resultat = "Validé";
    $nbValides++;
} else {
    $resultat = "Non validé";
}
//3. Calculer la somme des notes et la moyenne de la classe.
?>