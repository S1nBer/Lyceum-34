<?php
require_once '../database.php';
require_once '../models/ped_team.php';

$link = db_connect();
$categories = categories_all($link);

if(isset($_POST['category'])){
   $category = $_POST['category'];
   $teachers = teachers_all($link, $category);}

include("../components/teachers.php");

?>