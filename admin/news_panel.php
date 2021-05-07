<?php
require_once '../database.php';
require_once '../models/news.php';

$link = db_connect();

if(isset($_GET['action']))
   $action=$_GET['action'];
else
   $action="";

if($action=="add"){
   if(!empty($_POST)){
      news_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
      header("Location: news_panel.php");
   }
   include("../view/news_item_admin.php");
}
else{
   $articles = news_all($link);
   include("../view/news_admin.php");
}
?>