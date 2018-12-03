<?php

session_start();

require "Model/db.php";
require "Model/bioManager.php";

?>

<?php

if ($_GET["action"] === "delete") {
    $id = $_GET["id"];
    deleteBio($id, $db);
    header("location: bioList.php");
    exit;
}

if ($_GET["action"] === "update") {
    updateBio($bio, $db);
    header("location: bioList.php");
    exit;
}

if ($_GET["action"] === "add") {
    addBio($_POST, $db);
    header("location: bioList.php");
    exit;
}

?>
