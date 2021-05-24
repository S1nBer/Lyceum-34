<?php
require_once '../database.php';
require_once '../models/navbar.php';

$link = db_connect();
$subsection = subsection_get($link, $_GET['id']);

include("../view/subsection.php");
?>