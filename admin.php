<!--
  ~~~~~~~~~~ | Star Header |~~~~~~~~~~~
-->

<?php
  session_start();
  require "Model/db.php";
  include "template/nav.php";
?>

<!--
  ~~~~~~~~~~ | End Header |~~~~~~~~~~~
-->
<?php
if(!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
  header("Location: index.php");
  exit;
}
?>


<main>
  <div class="contener_header">
    <h1>PAGE ADMIN</h1>
  </div>
<!-- Bouton projet -->
  <div class="contener_modif_page">
    <div class="contener_projet">
      <a href="projet.php" class="button_blue"><i class="fas fa-plus-square fa-1x">Ajouter un projet</i></a>
      <a href="projet.php" class="button_blue"><i class="fas fa-plus-square fa-1x">Modifier un projet</i></a>
      <a href="listProjet.php" class="button_blue"><i class="fas fa-plus-square fa-1x">Supprimer un projet</i></a>
    </div>
    <!-- Bouton bio -->
    <div class="contener_projet">
      <a href="bio.php" class="button_red"><i class="fas fa-edit fa-1x">Ecrire sa bio</i></a>
      <a href="" class="button_red"><i class="fas fa-edit fa-1x">Modifier sa bio</i></a>
      <a href="" class="button_red"><i class="fas fa-edit fa-1x">SUpprimer sa bio</i></a>
    </div>
  </div>
<!-- Bouton deconnexion -->
  <div class="contener_logout">
    <a href="logout.php" class="cv"><i class="fas fa-sign-out-alt"></i>Déconnexion</a>
  </div>
</main>

<!--
  ~~~~~~~~~ | Star Footer | ~~~~~~~~
-->
<?php
  include "template/footer.php";
?>

<!--
  ~~~~~~~~ | End Footer | ~~~~~~~~~~
-->
