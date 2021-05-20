<?php
require_once '../database.php';
require_once '../models/footer.php';

$link = db_connect();

if (isset($_GET['location'])){
   $location=$_GET['location'];
   if(!empty($_POST)){
      inf_edit($link, $location, $_POST['title'], $_POST['content']);
      header("Location: footer_panel.php");
   }

   $inf=inf_get($link, $location);
   include("../view/footer_section_admin.php");
}

else{
include("../view/footer.php");}
?>