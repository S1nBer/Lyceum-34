<?php
require_once '../database.php';
require_once '../models/slider.php';

$link = db_connect();

if(isset($_GET['action']))
   $action = $_GET['action'];
else
   $action = "";

if($action == "add"){
   if(!empty($_POST)){
      // если была произведена отправка формы
      if(isset($_FILES['file'])) {
         // проверяем, можно ли загружать изображение
         $check = can_upload_slide($_FILES['file']);
 
         if($check === true){
         // загружаем изображение на сервер
         $name = make_upload_slide($_FILES['file']);
         //echo "<strong>Файл успешно загружен!</strong>";
         }
         else{
         // выводим сообщение об ошибке
         echo "<strong>$check</strong>";  
         }
      }
      if(isset($name)){
         slide_new($link, $_POST['title'], $_POST['intro'], $_POST['content'], $name);
         header("Location: slider_panel.php");
      }
   }
   include("../view/new_slide_admin.php");
}

else if($action == "edit"){
   if(!isset($_GET['id']))
      header("Location: slider_panel.php");
   $id=(int)$_GET['id'];

   if(!empty($_POST) && $id > 0){
      // если была произведена отправка формы
      if(isset($_FILES['file'])) {
         // проверяем, можно ли загружать изображение
         $check = can_upload_slide($_FILES['file']);
 
         if($check === true){
         // загружаем изображение на сервер
         $name = make_upload_slide($_FILES['file']);
         //echo "<strong>Файл успешно загружен!</strong>";
         }
         else{
         // выводим сообщение об ошибке
         echo "<strong>$check</strong>";  
         }
      }
      $photo = photo_get_slide($link, $id);
      if(isset($name)){
         $img = '../img/preview/'.$photo['back'];
         unlink($img);
      }
      else{
         $name = $photo['back'];
      }
      slide_edit($link, $id, $_POST['title'], $_POST['intro'], $_POST['content'], $name);
      header("Location: slider_panel.php");
   }

   $slide = slide_get($link, $id);
   include("../view/slide_admin.php");
}

else if($action == "delete"){
   $id = $_GET['id'];
   $slide = slide_delete($link, $id);
   header("Location: slider_panel.php");
}

else{
$slides = slides_all($link);
include("../view/slider_admin.php");}
?>