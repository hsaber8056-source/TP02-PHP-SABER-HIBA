<?php
//2. Envoyer les données à `ex10_get.php` avec la méthode GET.
$nom = $_GET["nom"] ;
$prenom = $_GET["prenom"] ;
$groupe = $_GET["groupe"] ;
echo"NOM : " .htmlspecialchars($nom) . "<br>";
echo"PRENOM : " .htmlspecialchars($prenom) . "<br>";
echo"GROUPE : " .htmlspecialchars($groupe) . "<br>";
//3. Récupérer les données avec `$_GET` et afficher un message de bienvenue contenant les trois informations.
//echo "<h4>Bienvenue " . $nom . " " . $prenom. ", vous êtes dans le groupe " . $groupe . ".</h4>";
//////////////////////////
if ($_SERVER["REQUEST_METHOD"] !== "GET" ||
    !isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])) {

    echo "Veuillez remplir et envoyer le formulaire GET.";

} else {

    $nom = trim($_GET["nom"]);
    $prenom = trim($_GET["prenom"]);
    $groupe = trim($_GET["groupe"]);

    if ($nom === "" || $prenom === "" || $groupe === "") {

        echo "Erreur : tous les champs sont obligatoires.";

    } else {

        echo "<h4>Bienvenue "
            . htmlspecialchars($nom, ENT_QUOTES, "UTF-8") . " "
            . htmlspecialchars($prenom, ENT_QUOTES, "UTF-8")
            . ", groupe "
            . htmlspecialchars($groupe, ENT_QUOTES, "UTF-8")
            . ".</h4>";
    }
}
?>