<?php
require_once("db-util.php");
require_once("model-prefered-customer-movie.php");
$pageTitle = "Preferred-Viewer-Movie";
include "view-header.php";
$movies = selectMovies();
include "view-months-by-viewers.php");
include "view-footer.php";
    ?>
