<?php
require_once '../database.php';
require_once '../models/navbar.php';

$link = db_connect();

if(isset($_GET['action']))
   $action=$_GET['action'];
else
   $action="";


if($action=="add"){
   include("../view/choice_type.php");
   $type = $_POST['type'];
   if(!empty($_POST['title'])){
      section_new($link, $_GET['type'], $_POST['title'], $_POST['content']);
      header("Location: navbar_panel.php");
   }
   include("../view/new_section_admin.php");
}

else if($action == "edit"){
   if(!isset($_GET['id']))
      header("Location: navbar_panel.php");
   $id = (int)$_GET['id'];
   $type = $_GET['type'];
   
   if($type == "one"){

      if(!empty($_POST) && $id > 0){
         section_edit($link, $id, $_POST['title'], $_POST['content']);
         header("Location: navbar_panel.php");
      }

      $section = section_get($link, $id);
      include("../view/section_admin.php");
   }

   else{
      if(isset($_GET['subaction']))
         $subaction = $_GET['subaction'];
      else
         $subaction = "";

      if($subaction == "add"){
         if(!empty($_POST['title'])){
            subsection_new($link, $id, $_POST['title'], $_POST['content']);
            header("Location: navbar_panel.php?action=edit&type=" .$type. "&id=".$id);
         }
         include("../view/new_subsection_admin.php");
      }

      else if($subaction == "edit"){
         if(!isset($_GET['id_sub']))
            header("Location: navbar_panel.php");
         $id_sub = (int)$_GET['id_sub'];

         if(!empty($_POST) && $id_sub > 0){
            subsection_edit($link, $id_sub, $_POST['title'], $_POST['content']);
            header("Location: navbar_panel.php?action=edit&type=" .$type. "&id=".$id);
         }
      
         $subsection = subsection_get($link, $id_sub);
         include("../view/subsection_admin.php");
      }

      else if($subaction == "delete"){
         $id_sub = $_GET['id_sub'];
         $subsection = subsection_delete($link, $id_sub);
         header("Location: navbar_panel.php?action=edit&type=" .$type. "&id=".$id);
      }

      else{
      $subsections = subsections_all($link, $id);
      include("../view/subsections_admin.php");}
   }
}

else if($action == "delete"){
   $id = $_GET['id'];
   $type = $_GET['type'];
   $section = section_delete($link, $id, $type);
   header("Location: navbar_panel.php");
}

else{
   $sections = sections_all($link);
   include("../view/sections_admin.php");}
?>