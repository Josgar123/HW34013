<?php
require_once("db-util.php");
require_once("model-months-by-viewer.php");
$pageTitle = "Movie by Directors";
include "view-header.php";

if(isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
    if(insertMovieViewer($_POST['mid'], $_POST['vid'])){
    echo'<div class="alert alert-success" role="alert">Movie Viewer Added!</div>';
      } else {
    echo '<div class="alert alert-danger" role="alert">Error!</div>';
    }
    break;
     case "Edit":
    if(updateMovieViewer($_POST['mid'], $_POST['vid'], $_POST['mmid'])){
    echo'<div class="alert alert-success" role="alert">Movie Viewer Edited!</div>';
      } else {
    echo '<div class="alert alert-danger" role="alert">Error!</div>';
    }
    break;
     case "Delete":
    if(deleteMovieViewer($_POST['mmid'])){
    echo'<div class="alert alert-success" role="alert">Movie Viewer Deleted!</div>';
      } else {
    echo '<div class="alert alert-danger" role="alert">Error!</div>';
    }
    break;
  }
}

$movies = selectMonthsByViewer();
include "view-months-by-viewers.php";
include "view-footer.php";
