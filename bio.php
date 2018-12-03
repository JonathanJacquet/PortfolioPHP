<?php

session_start();
if(!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header("Location: index.php");
    exit;
}

?>

<?php
  include "template/nav.php";
?>

<div class="contener_header">
  <h1>BIOGRAPHIE</h1>
</div>


<form action="bioTreatment.php?action=add" method="post" enctype="multipart/form-data">
  <div>
    <label for="Titre">Titre :</label>
    <textarea id="text" id ="Titre" name="Titre"></textarea>
  </div>
  <div>
    <label for="Description">Description de la biographie :</label>
    <textarea id="text" id ="Description" name="Description"></textarea>
  </div>
  <div class="button">
    <button type="submit">Envoyer</button>
  </div>
</form>


<?php
  include "template/footer.php";
?>
