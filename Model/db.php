<?php

try {
   $db = new PDO('mysql:host=localhost;dbname=Portfolio;charset=utf8', 'phpmyadmin', '');
}
catch (Exception $e) {
       die('Erreur : ' . $e->getMessage());
}

?>
