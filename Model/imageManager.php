<?php
// fonction qui permet d'ajouter une image à un projet
function addImage($Nom, $Chemin, $db) {
  $query = $db->prepare("INSERT INTO Images (Nom, Chemin) VALUES (?, ?)");
  $query->execute([$Nom, $Chemin]);
}

// fonction qui permet de recupérer le dernier ID de l'image
function getLastImageID($db) {
  $query = $db->query("SELECT LAST_INSERT_ID() FROM Images");
  $result= $query->fetch(PDO::FETCH_ASSOC);
  return $result;
}
?>
