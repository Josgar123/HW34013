<?php
require_once("db-util.php");
require_once("model-movies.php");
$pageTitle = "Movies";
include "view-header.php";

if(isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
    if(insertMovie($_POST['mName'], $_POST['mRuntime'], $_POST['mYear'], $_POST['mGenre'])){
    echo'<div class="alert alert-success" role="alert">Movie Added!</div>';
      } else {
    echo '<div class="alert alert-danger" role="alert">Error!</div>';
    }
    break;
     case "Edit":
    if(updateMovie($_POST['mName'], $_POST['mRuntime'], $_POST['mYear'], $_POST['mGenre'], $_POST['mid'])){
    echo'<div class="alert alert-success" role="alert">Movie Edited!</div>';
      } else {
    echo '<div class="alert alert-danger" role="alert">Error!</div>';
    }
    break;
     case "Delete":
    if(deleteMovie($_POST['mid'])){
    echo'<div class="alert alert-success" role="alert">Movie Deleted!</div>';
      } else {
    echo '<div class="alert alert-danger" role="alert">Error!</div>';
    }
    break;
  }
}

$movies = selectMovies();
include "view-movies.php";
include "view-footer.php";
    ?>
