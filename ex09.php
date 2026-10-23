
<?php

$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nombreValides = 0;
$meilleureNote = 0;
$meilleurEtudiant = "";

echo "<table border='1'>";
echo "<tr>
        <th>Étudiant</th>
        <th>Note</th>
        <th>Résultat</th>
      </tr>";
//1. Afficher les étudiants et leurs notes dans un tableau HTML avec `foreach`.
//2. Ajouter une colonne « Validé » ou « Non validé », avec un seuil de 10.
foreach ($notes as $nom => $note) {

    if ($note >= 10) {
        $resultat = "Validé";
        $nombreValides++;
    } else {
        $resultat = "Non validé";
    }

    echo "<tr>";
    echo "<td>$nom</td>";
    echo "<td>$note</td>";
    echo "<td>$resultat</td>";
    echo "</tr>";
//3. Calculer la somme des .
    $somme += $note;
//5. Déterminer la meilleure note et le nom de l'étudiant correspondant en parcourant le tableau.
    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }
}

echo "</table>";
//3.la moyenne de la classe.
$moyenne = $somme / count($notes);

echo "<p>Somme des notes : $somme</p>";
echo "<p>Moyenne de la classe : $moyenne</p>";
echo "<p>Nombre d'étudiants validés : $nombreValides</p>";
echo "<p>Meilleure note : $meilleureNote</p>";
echo "<p>Meilleur étudiant : $meilleurEtudiant</p>";

?>

