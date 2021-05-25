<?php
require_once '../database.php';
require_once '../models/slider.php';

$link = db_connect();
$slide = slide_get($link, $_GET['id']);

include("../view/slide.php");
?>