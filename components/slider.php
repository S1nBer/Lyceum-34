<?php
require_once '../database.php';
require_once '../models/slider.php';

$link = db_connect();
$slides = slides_all($link);
include("../view/slider.php");
?>