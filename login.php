
<?php
//On charge le fichier avec les fonctions qui renvoient nos données
require "Model/db.php";
$reponses = $db->query('SELECT * FROM Users');
$reponse = $reponses->fetchall();
//On vérifie si le formulaire a été rempli
if(!empty($_POST)) {
  //On nettoie les entrées du formulaire
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }
  //On récupère les utilisateurs stockés
  foreach ($reponse as $key =>$user) {
    if($user["Nom"] === $_POST["name"] && $_POST["Password"] === $user["Password"]) {
      //On démarre une session pour y stocker les informations de l'utilisateur
      session_start();
      $_SESSION["user"] = $user;
      // if ($_SESSION["user"]["Statut"] === "Admin") {
        header("Location: admin.php");
        exit;
      }
      else {
        header("Location: index.php");
        exit;
      }
    }
  }

 ?>
