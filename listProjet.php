<!--
  ~~~~~~~~~~ | Star Header |~~~~~~~~~~~
-->

<?php
  session_start();
  require "Model/db.php";
  require "Model/ProjetManager.php";
  include "template/nav.php";
?>

<!--
  ~~~~~~~~~~ | End Header |~~~~~~~~~~~
-->
<?php

$projet = getListProjet($db);

?>
<?php
if(!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
  header("Location: index.php");
  exit;
}
?>


<main>
  <div class="contener_header">
    <h1>Liste des projets</h1>
  </div>


  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">ID_Projet</th>
        <th scope="col">Nom du projet</th>
        <th scope="col">Description</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($projet as $key => $value) {
      ?>

      <tr>
        <th scope="row"><?php echo $value["ID_Projet"]; ?></th>
        <td><?php echo $value["Name"]; ?></td>
        <td><?php echo $value["Description"]; ?></td>
        <td>
          <a class="button_yellow" href="updateProjet.php?id=<?php echo $value["ID_Projet"];?>">Modifier</a>
          <!-- <a class="button_red" href="ProjetTreatment.php?action=delete&&id=<?php echo $value["ID_Projet"];?>">Supprimer</a> -->
          <!-- <a class="button_red" href="<?php echo 'ProjetTreatment.php?id=' . $value['ID_Projet'] .  '&action=delete'; ?>">Supprimer</a> -->
          <a href="ProjetTreatment.php?action=delete&&id=<?php echo $value["ID_Projet"];?>">Supprimer</a>

        </td>
      </tr>
  <?php
}
?>
    </tbody>
  </table>


  <?php
    include "template/footer.php";
  ?>
