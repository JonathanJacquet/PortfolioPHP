
<?php
//fonction qui AJOUTE projet
function addProjet($projet,$idImage, $db)  {
  $query = $db->prepare("INSERT INTO Projets (Name, Description, ID_Image) VALUES (?, ?, ?)");
  $query->execute([$projet["Name"], $projet["Description"], $idImage]);
}

//fonction qui liste les Projets
function getListProjet($db)  {
  $query = $db->query("SELECT * FROM Projets");
  $result= $query->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}

//function qui recupere un seul Projet
function getProjet($id, $db) {
  $query = $db->query("SELECT * FROM Projets WHERE ID_Projet = ?");
  $query->execute([$id]);
  $result = $query->fetch(PDO::FETCH_ASSOC);
  return $result;

}


// fonction qui SUPPRIME un projet
function deleteProjet($di, $db) {
  $query = $db->prepare("DELETE FROM Projets WHERE ID_Projet = ?");
  $query->execute([$di]);
}

// fonction qui modifie un projet
function updateProjet($projet, $db) {
    $query = $db->prepare("UPDATE Projets SET Name = :Name, Description = :Description WHERE ID_Projet = :ID_Projet");
    $query->execute([
        "Name" => $projet['Name'],
        "Description" => $projet['Description'],
        "ID_Projet" => $projet['ID_Projet']
        ]);
    return $query;
}
?>
