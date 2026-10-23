<?php
//3. Récupérer les données avec `$_POST` et afficher le même message.
$nom = $_POST["nom"] ;
$prenom = $_POST["prenom"] ;
$groupe = $_POST["groupe"] ;
echo"NOM : " .htmlspecialchars($nom) . "<br>";
echo"PRENOM : " .htmlspecialchars($prenom) . "<br>";
echo"GROUPE : " .htmlspecialchars($groupe) . "<br>";
//echo "<h4>Bienvenue " . $nom . " " . $prenom. ", vous êtes dans le groupe " . $groupe . ".</h4>";
if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    echo "Veuillez envoyer le formulaire avec la méthode POST.";

} elseif (!isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"])) {

    echo "Erreur : les trois champs sont obligatoires.";

} else {

    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $groupe = trim($_POST["groupe"]);

    if ($nom === "" || $prenom === "" || $groupe === "") {

        echo "Erreur : tous les champs sont obligatoires.";

    } else {

        echo "Bienvenue "
            . htmlspecialchars($nom, ENT_QUOTES, "UTF-8") . " "
            . htmlspecialchars($prenom, ENT_QUOTES, "UTF-8")
            . ", groupe "
            . htmlspecialchars($groupe, ENT_QUOTES, "UTF-8")
            . ".";
    }
}
?>