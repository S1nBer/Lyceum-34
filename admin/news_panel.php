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
      news_new($link, $location, $_POST['title'], $_POST['date'], $_POST['content']);
      header("Location: news_panel.php?location=".$location);
   }
   include("../view/new_news_item_admin.php");
}

else if($action == "edit"){
   if(!isset($_GET['id']))
      header("Location: news_panel.php?location=".$location);
   $id=(int)$_GET['id'];

   if(!empty($_POST) && $id > 0){
      news_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['content'], $location);
      header("Location: news_panel.php?location=".$location);
   }

   $article=news_get($link, $id);
   include("../view/news_item_admin.php");
}

else if($action == "delete"){
   $id=$_GET['id'];
   $article = news_delete($link, $id);
   header("Location: news_panel.php?location=".$location);
}

else{
   $articles = news_all($link, $location);
   include("../view/news_admin.php");
}
?>