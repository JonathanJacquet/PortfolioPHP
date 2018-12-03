<?php
// Fonction qui ajoute une biographie
function addBio($bio, $db)  {
  $query = $db->prepare("INSERT INTO Bio (Titre, Description) VALUES (?)");
  $query->execute([$bio["Titre"], $bio["Description"]]);
}


// Fonction qui recupère toutes les biographies
function getAllBio($db) {
    $query = $db->query("SELECT * FROM Bio");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// Fonction qui supprime une biographie
function deleteBio($id, $db) {
    $query = $db->prepare("DELETE FROM Bio WHERE ID_Bio = ?");
    $query->execute([$id]);
}

// Fonction qui recupère une seule biographie
function getOneBio($id, $db) {
    $query = $db->prepare("SELECT * FROM Bio WHERE ID_Bio = ?");
    $query->execute([$id]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

// Fonction qui modifie une biographie
function updateBio($bio, $db) {
    $req = $db->prepare("UPDATE Bio SET Titre = :Titre, Description = :Description WHERE ID_Bio = :ID_Bio");
    $req->execute([
        "Titre" => $bio['Titre'],
        "Description" => $bio['Description'],
        "ID_Bio" => $bio['ID_Bio']
        ]);
    return $req;
}
?>
