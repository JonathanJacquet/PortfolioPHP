
<?php
  session_start();
  if(!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header("Location: index.php");
    exit;
  }
  require "Model/db.php";
  require "Model/ProjetManager.php";
  include "template/nav.php";

  $id = $_GET["id"];
  $projet = getProjet($id, $db);
?>


<form action="projetTreatment.php?action=update" method="post">
  <div class="form-group col-sm-12 col-md-7 col-lg-6">
    <input type="hidden" name="IDbiog" value="<?php echo $id; ?>">
    <label for="titre">Titre : </label>
    <input type="text" class="form-control" id="titre" name="Name" <?php echo "value='" . $projet["Name"] . "'"; ?>>
  </div>
  <div class="form-group col-sm-12 col-md-7 col-lg-6">
    <label for="description">Description : </label>
    <textarea name="description" id="Description" cols="80" rows="20"><?php echo $projet["Description"]; ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary col-1 flex center ml-5 ">Enregistrer</button>
</form>

<?php
include "template/footer.php";
?>
