<?php
require_once '../database.php';
require_once '../models/ped_team.php';
include_once('../models/upload.php'); 


$link = db_connect();
$categories = categories_all($link);

if(isset($_GET['action']))
   $action=$_GET['action'];
else
   $action="";


if($action=="add"){
      if(!empty($_POST)){
            // если была произведена отправка формы
         if(isset($_FILES['file'])) {
            // проверяем, можно ли загружать изображение
            $check = can_upload($_FILES['file']);
    
            if($check === true){
            // загружаем изображение на сервер
            $name = make_upload($_FILES['file']);
            //echo "<strong>Файл успешно загружен!</strong>";
            }
            else{
            // выводим сообщение об ошибке
            echo "<strong>$check</strong>";  
            }
         }
         if(!isset($name)){
            $name="";
         }
         teachers_new($link, $_POST['category'], $_POST['name'], $_POST['content'], $name, $_POST['class']);
         header("Location: ped_team_panel.php");
      }
      include("../view/new_teacher_admin.php");
   }

else{
   /*$teachers = teachers_all($prof);*/
if(isset($_POST['category'])){
      $category = $_POST['category'];
      $teachers = teachers_all($link, $category);}


include("../view/teachers_admin.php");}
?>