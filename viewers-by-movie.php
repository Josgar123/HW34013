<?php
require_once("db-util.php");
require_once("model-viewers-by-movie.php");
$pageTitle = "Viewers by Movie";
include "view-header.php";
$viewers = selectViewersByMovie($_GET['id']);
include "view-viewers-by-movie.php";
include "view-footer.php";
