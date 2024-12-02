<?php
require_once("db-util.php");
require_once("model-sections-by-viewer.php");
$pageTitle = "Months by Viewer";
include "view-header.php";
$months = selectMonthsByViewer($_POST['cid']);
include "view-months-by-viewer.php";
include "view-footer.php";
