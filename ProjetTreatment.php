<?php
session_start();

require "Model/db.php";
require "Model/ProjetManager.php";
require "Model/imageManager.php";
?>

<?php
//On déclare une variable pour stoker le chemin des images
$Chemin = "img/" . $_FILES['Image']['name'];
//FOnction qui ajoute une image
addImage($_FILES['Image']['name'], $Chemin,$db);
var_dump($_FILES);
$id = getLastImageID($db);
//Fonction qui ajoute un projet
addProjet($_POST, $id["LAST_INSERT_ID()"],$db);
//Déplace les images du fichier temporaire vers le dossier img/
  move_uploaded_file($_FILES['Image']['tmp_name'], $Chemin);
  header("Location: admin.php");
  exit;


  //Si l'action concerne une suppresion
if ($_GET["action"] === "delete") {
    $di = $_GET["id"];
    deleteProjet($di, $db);
    header("location: listProjet.php");
    exit;
}
//Si l'action concerne une modification
if ($_GET["action"] === "update") {
    updateProjet($projet, $db);
    header("location: listProjet.php");
    exit;
}
  // var_dump($Chemin);
// updateProjet($projet, $db);
//   header("Location: admin.php");
//   exit;
//


?>
