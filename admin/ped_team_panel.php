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

else if($action == "edit"){
   if(!isset($_GET['id']))
      header("Location: ped_team_panel.php");
   $id=(int)$_GET['id'];

   if(!empty($_POST) && $id > 0){
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
      $photo = photo_get($link, $id);
      $img = '../img/teachers/'.$photo['photo'];
      unlink($img);
      teachers_edit($link, $id, $_POST['category'], $_POST['name'], $_POST['content'], $name, $_POST['class']);
      header("Location: ped_team_panel.php");
      echo 'успех';
   }
   $teacher=teachers_get($link, $id);
   include("../view/teacher_admin.php");
}

else if($action == "delete"){
   $id=$_GET['id'];
   $photo = photo_get($link, $id);
   $img = '../img/teachers/'.$photo['photo'];
   unlink($img);
   $teacher = teachers_delete($link, $id);
   header("Location: ped_team_panel.php");
}

else{
   if(isset($_POST['category'])){
         $category = $_POST['category'];
         $teachers = teachers_all($link, $category);}

   include("../view/teachers_admin.php");}
?>