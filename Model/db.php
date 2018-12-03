<?php

try {
   $db = new PDO('mysql:host=localhost;dbname=Portfolio;charset=utf8', 'phpmyadmin', 'O7dwjfb9');
}
catch (Exception $e) {
       die('Erreur : ' . $e->getMessage());
}

?>
