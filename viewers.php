<?php
require_once("db-util.php");
require_once("model-viewers.php");
$pageTitle = "Viewers";
include "view-header.php";
$movies = selectViewers();
include "view-viewers.php";
include "view-footer.php";
?>
