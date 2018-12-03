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
    <!--<img src="img/avataaars.png" alt="avatar" height="100%" width="100%">-->
</div>
<form action="ProjetTreatment.php" method="post" enctype="multipart/form-data">
  <div>
    <label for="name">Nom du projet :</label>
    <input type="text" id="name" name="Name">
  </div>
  <div>
    <label for="img">Image :</label>
    <input type="file" id="image" name="Image">
  </div>
  <div>
    <label for="msg">Description du projet :</label>
    <textarea id="msg" id ="Description" name="Description"></textarea>
  </div>
  <div class="button">
    <button type="submit">Envoyer</button>
  </div>
</form>


<?php
  include "template/footer.php";
?>
