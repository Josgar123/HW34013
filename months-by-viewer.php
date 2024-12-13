<?php
require_once("db-util.php");
require_once("model-months-by-viewer.php");
$pageTitle = "Movie by Directors";
include "view-header.php";
$months = selectMonthsByViewer($_POST['cid']);
include "view-months-by-viewers.php";
include "view-footer.php";
