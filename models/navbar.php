<?php
function section_get($link, $id){
   //запрос по id
   $query=sprintf("Select * from sections where id='%d'",(int)$id);
   $result=mysqli_query($link, $query);

   if (!$result){
      die(mysqli_error($link));}

   $section=mysqli_fetch_assoc($result);

   return $section;
}

function sections_all($link){
   $query= sprintf("select * from sections order by id");
   $result= mysqli_query($link, $query);

   if (!$result)
   die(mysqli_error($link));

   //получение новостей
   $n=mysqli_num_rows($result);
   $sections=array();

   for ($i=0;$i<$n;$i++){
         $row=mysqli_fetch_assoc($result);
         $sections[]=$row;
   }

   return $sections;
}

function section_new($link, $type, $title, $content){
   $title=trim($title);
   $content=trim($content);

   if($title=='')
         return false;
   $t = "insert into sections (type, title, content)
   values ('%s', '%s', '%s')";

   $query=sprintf($t, $type, mysqli_real_escape_string($link, $title),
   mysqli_real_escape_string($link, $content));

   $result=mysqli_query($link, $query);

   if(!$result)
         die(mysqli_error($link));
   
   return true;
}

function section_edit($link, $id, $title, $content){
   $title=trim($title);
   $content=trim($content);
   $id=(int)$id;

   if($title=="")
         return false;
   
   $sql="update sections set title='%s', content='%s' where id='%d'";

   $query=sprintf($sql, mysqli_real_escape_string($link, $title),
   mysqli_real_escape_string($link, $content),
   $id);
   
   $result=mysqli_query($link, $query);

   if(!$result)
         die(mysqli_error($link));
         
   return mysqli_affected_rows($link);
}

function section_delete($link, $id, $type){
      $id=(int)$id;
      if ($id == 0)
            return false;
      
      if($type == "many"){
            $req = sprintf("delete from subsections where ind='%d'",$id);
            $res = mysqli_query($link, $req);

            if(!$res)
                  die(mysqli_error($link));
      }

      $query = sprintf("delete from sections where id='%d'", $id);
      $result = mysqli_query($link, $query);

      if(!$result)
            die(mysqli_error($link));

      return mysqli_affected_rows($link);
}

function subsection_get($link, $id){
   //запрос по id
   $query=sprintf("Select * from subsections where id='%d'",(int)$id);
   $result=mysqli_query($link, $query);

   if (!$result){
      die(mysqli_error($link));}

   $subsection=mysqli_fetch_assoc($result);

   return $subsection;
}

function subsections_all($link, $ind){
   $query= sprintf("select * from subsections where ind='%d' order by id", $ind);
   $result= mysqli_query($link, $query);

   if (!$result)
   die(mysqli_error($link));

   //получение новостей
   $n=mysqli_num_rows($result);
   $subsections=array();

   for ($i=0;$i<$n;$i++){
         $row=mysqli_fetch_assoc($result);
         $subsections[]=$row;
   }

   return $subsections;
}

function subsection_new($link, $ind, $title, $content){
   $title=trim($title);
   $content=trim($content);

   if($title=='')
         return false;
   $t = "insert into subsections (ind, title, content)
   values ('%d', '%s', '%s')";

   $query=sprintf($t, $ind, mysqli_real_escape_string($link, $title),
   mysqli_real_escape_string($link, $content));

   $result=mysqli_query($link, $query);

   if(!$result)
         die(mysqli_error($link));
   
   return true;
}

function subsection_edit($link, $id, $title, $content){
      $title=trim($title);
      $content=trim($content);
   
      if($title=="")
            return false;
      
      $sql="update subsections set title='%s', content='%s' where id='%d'";
   
      $query=sprintf($sql, mysqli_real_escape_string($link, $title),
      mysqli_real_escape_string($link, $content),
      $id);
      
      $result=mysqli_query($link, $query);
   
      if(!$result)
            die(mysqli_error($link));
            
      return mysqli_affected_rows($link);
}

function subsection_delete($link, $id){
      $id=(int)$id;
      if ($id == 0)
            return false;
      $query = sprintf("delete from subsections where id='%d'", $id);
      $result = mysqli_query($link, $query);

      if(!$result)
            die(mysqli_error($link));

      return mysqli_affected_rows($link);
}

?>