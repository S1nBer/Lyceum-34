<?php
require_once '../database.php';
require_once '../models/navbar.php';

$link = db_connect();
$section = section_get($link, $_GET['id']);

include("../view/section.php");
?>