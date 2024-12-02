<?php
require_once("db-util.php");
require_once("model-movies.php");
$pageTitle = "Movies";
include "view-header.php";
$movies = selectMovies();
include "view-movies.php";
include "view-footer.php";
    ?>
