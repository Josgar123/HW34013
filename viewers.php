<?php
require_once("db-util.php");
require_once("model-viewers.php");
$pageTitle = "Viewers";
include "view-header.php";
$movies = selectViewers();
include "view-movies.php";
include "view-footer.php";
