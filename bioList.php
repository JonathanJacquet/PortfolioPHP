<?php
include "template/nav.php";

require "Model/db.php";
include "Model/bioManager.php";
$bio = getAllBio($db);
?>


<?php
// if(!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
//   header("Location: index.php");
//   exit;
// }
?>

<main>
  <div class="contener_header">
    <h1>Biographie</h1>
  </div>

  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">ID_Bio</th>
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach ($bio as $key => $value) {
    ?>
      <tr>
        <th scope="row"><?php echo $value["ID_Bio"]; ?></th>
        <td><?php echo $value["Titre"]; ?></td>
        <td><?php echo $value["Description"]; ?></td>
        <td>
          <a href="biographieUpdate.php?id=<?php echo $value["ID_Bio"];?>">Modifier</a>
          <a href="bioTreatment.php?action=delete&&id=<?php echo $value["ID_Bio"];?>">Supprimer</a>
        </td>
      </tr>
      <?php
          }
      ?>
    </tbody>
  </table>

<?php
require "template/footer.php";
 ?>
