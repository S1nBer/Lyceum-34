<?php
function inf_edit($link, $location, $title, $content){
   $title=trim($title);
   $content=trim($content);

   if($title=="")
            return false;
      
      $sql="update footer set title='%s', content='%s' where location='%s'";

      $query=sprintf($sql, mysqli_real_escape_string($link, $title),
      mysqli_real_escape_string($link, $content), $location);
      
      $result=mysqli_query($link, $query);

      if(!$result)
            die(mysqli_error($link));
            
      return mysqli_affected_rows($link);
}

function inf_get($link, $location){
   $query=sprintf("Select * from footer where location='%s'",$location);
   $result=mysqli_query($link, $query);

   if (!$result){
      die(mysqli_error($link));}

   $inf=mysqli_fetch_assoc($result);

   return $inf;
}
?>