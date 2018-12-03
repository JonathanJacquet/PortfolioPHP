<?php
  include "template/nav.php";
?>

<div class="contener_header">
  <h1>PAGE DE CONNEXION</h1>
</div>

<h3> Formulaire de connexion</h3>
  <form action="login.php" method="post">
    <div>
      <label for="name"><strong>Nom :</strong></label>
      <input type="text" id="name" name="name" placeholder="Nom">
    </div>
    <div>
      <label for="Password"><strong>Mot de passe : </strong></label>
      <input type="password" class="form-control" id="Password" name="Password" placeholder="Mot de passe" required>
    </div>
    <div class="button">
      <button type="submit">Envoyer</button>
    </div>
  </form>

<?php
  include "template/footer.php";
?>
