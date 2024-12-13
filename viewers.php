<?php
require_once("db-util.php");
require_once("model-viewers.php");
$pageTitle = "Viewers";
include "view-header.php";

if(isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
    if(insertViewer($_POST['vName'], $_POST['vDesc'])){
    echo'<div class="alert alert-success" role="alert">Viewer Added!</div>';
      } else {
    echo '<div class="alert alert-danger" role="alert">Error!</div>';
    }
    break;
     case "Edit":
    if(updateViewer($_POST['vName'], $_POST['vDesc'], $_POST['vid'])){
    echo'<div class="alert alert-success" role="alert">Viewer Edited!</div>';
      } else {
    echo '<div class="alert alert-danger" role="alert">Error!</div>';
    }
    break;
     case "Delete":
    if(deleteViewer($_POST['vid'])){
    echo'<div class="alert alert-success" role="alert">Viewer Deleted!</div>';
      } else {
    echo '<div class="alert alert-danger" role="alert">Error!</div>';
    }
    break;
  }
}

$viewers = selectViewers();
include "view-viewers.php";
include "view-footer.php";
?>
