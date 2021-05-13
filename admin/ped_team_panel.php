<?php
require_once '../database.php';
require_once '../models/ped_team.php';


$link = db_connect();
$categories = categories_all($link);
/*$teachers = teachers_all($prof);*/
if(isset($_POST['category'])){
   $category = $_POST['category'];
   $teachers = teachers_all($link, $category);}


include("../view/teachers_admin.php");
?>