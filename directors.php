<?php
require_once("db-util.php");
require_once("model-directors.php");
$pageTitle = "Directors";
include "view-header.php";

if(isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
    if(insertDirector($_POST['dName'], $_POST['dAge'], $_POST['dMovies'])){
    echo'<div class="alert alert-success" role="alert">Director Added!</div>';
      } else {
    echo '<div class="alert alert-danger" role="alert">Error!</div>';
    }
    break;
     case "Edit":
    if(updateDirector($_POST['dName'], $_POST['dAge'], $_POST['dMovies'], $_POST['did'])){
    echo'<div class="alert alert-success" role="alert">Director Edited!</div>';
      } else {
    echo '<div class="alert alert-danger" role="alert">Error!</div>';
    }
    break;
     case "Delete":
    if(deleteDirector($_POST['did'])){
    echo'<div class="alert alert-success" role="alert">Director Deleted!</div>';
      } else {
    echo '<div class="alert alert-danger" role="alert">Error!</div>';
    }
    break;
  }
}

$directors = selectDirectors();
include "view-directors.php";
include "view-footer.php";
    ?>
