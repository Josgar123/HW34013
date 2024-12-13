<?php
require_once("db-util.php");
require_once("model-viewers.php");
$pageTitle = "Viewers";
include "view-header.php";

if(isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
    insertViewer($_POST['vName'], $_POST['vDesc']);
    break;
  }
}

$viewers = selectViewers();
include "view-viewers.php";
include "view-footer.php";
?>
