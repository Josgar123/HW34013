<?php
require_once("db-util.php");
require_once("model-prefered-customer-movie.php");
$pageTitle = "Preferred-Customer-Movie";
include "view-header.php";
$movies = selectMovies();
include "model-prefered-customer-movie.php";
include "view-footer.php";
    ?>
