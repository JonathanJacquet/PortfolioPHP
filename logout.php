<?php
//On démarre à la session
session_start();
//On la vide les variables de la session
session_unset();
//On détruit la session
session_destroy();

header("Location: index.php?success=Vous avez été déconnecté.");
 ?>
