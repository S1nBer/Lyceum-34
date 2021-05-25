<?php
require_once '../database.php';
require_once '../models/news.php';

$link = db_connect();

if (isset($_GET['location']))
   $location=$_GET['location'];


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
      news_new($link, $location, $_POST['title'], $_POST['date'], $_POST['content'], $name);
      header("Location: news_panel.php?location=".$location);
   }
   include("../view/new_news_item_admin.php");
}

else if($action == "edit"){
   if(!isset($_GET['id']))
      header("Location: news_panel.php?location=".$location);
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
      $photo = photo_get($link, $id);
      if(isset($name)){
         $img = '../img/preview/'.$photo['photo'];
         unlink($img);
      }
      else{
         $name = $photo['photo'];
      }
      news_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['content'], $location, $name);
      header("Location: news_panel.php?location=".$location);
   }

   $article=news_get($link, $id);
   include("../view/news_item_admin.php");
}

else if($action == "delete"){
   $id=$_GET['id'];
   $photo = photo_get($link, $id);
   $photo = photo_get_slide($link, $id);
   $img = '../img/preview/'.$photo['back'];
   unlink($img);
   $article = news_delete($link, $id);
   header("Location: news_panel.php?location=".$location);
}

else{
   $articles = news_all($link, $location);
   include("../view/news_admin.php");
}
?>