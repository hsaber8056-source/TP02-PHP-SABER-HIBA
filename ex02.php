<?php
//1. Déclarer `$nom`, `$prenom`, `$age` et `$formation` avec des données fictives.
    $nom="Hiba";
    $prenom= "Saber";
    $Groupe= 3;
    $feliere="IAP";
//2. Construire une phrase de présentation en utilisant la concaténation `.`.    
    echo"je m'appelle ".$nom." ".$prenom." en ".$Groupe."éme groupe du filiere ".$feliere.".<br>";
//3. Compléter cette phrase avec `.=` pour ajouter « J'apprends PHP ».    
    $presentation= "je m'appelle ".$nom." ".$prenom." en ".$Groupe."éme groupe du filiere ".$feliere." , ";
    echo $presentation.= " J'apprends PHP. <br>";
//4. Déclarer `$note = 12` et `$Note = 16`, puis afficher les deux valeurs.    
    $note = 12;
    $Note = 16;
    echo "note = ".$note."<br> Note = ".$Note;
?>