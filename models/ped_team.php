<?php

function photo_get($link, $id){

      $query = sprintf("select photo from teachers where id_teach = '%d'", $id);
      $result = mysqli_query($link, $query);

      if (!$result)
      die(mysqli_error($link));

      $photo = mysqli_fetch_assoc($result);

      return $photo;
}

function categories_all($link){

      $query= sprintf("select * from category order by id_category");
      $result= mysqli_query($link, $query);

      if (!$result)
      die(mysqli_error($link));

      //получение категорий
      $n=mysqli_num_rows($result);
      $categories=array();

      for ($i=0;$i<$n;$i++){
            $row=mysqli_fetch_assoc($result);
            $categories[]=$row;
      }

      return $categories;
}

function teachers_all($link, $category){

      if($category == 0){
            $result = mysqli_query($link, "SELECT * FROM teachers WHERE not class=''");
      }

      else{
      $query= sprintf("select * from teachers where teachers.category='%d' order by id_teach",$category);
      $result= mysqli_query($link, $query);}

      if (!$result)
      die(mysqli_error($link));


      $n=mysqli_num_rows($result);
      $teachers=array();

      for ($i=0;$i<$n;$i++){
            $row=mysqli_fetch_assoc($result);
            $teachers[]=$row;
      }

      return $teachers;
}

function teachers_get($link, $id){
      $query=sprintf("Select * from teachers where id_teach='%d'",(int)$id);
      $result=mysqli_query($link, $query);

      if (!$result){
            die(mysqli_error($link));}

      $teacher=mysqli_fetch_assoc($result);

      return $teacher;
}

function teachers_new($link, $category, $name, $achievements, $photo, $class){
      $name=trim($name);
      $achievements=trim($achievements);
      $photo=trim($photo);
      $class=trim($class);

      if($name=='')
            return false;
      $t = "insert into teachers (category, name, achievements, photo, class)
      values ('%d', '%s', '%s', '%s', '%s')";

      $query=sprintf($t, $category, mysqli_real_escape_string($link, $name),
      mysqli_real_escape_string($link, $achievements),
      mysqli_real_escape_string($link, $photo),
      mysqli_real_escape_string($link, $class));

      $result=mysqli_query($link, $query);

      if(!$result)
            die(mysqli_error($link));
      
      return true;
}

function teachers_edit($link, $id, $category, $name, $achievements, $photo, $class){
      $name=trim($name);
      $achievements=trim($achievements);
      $photo=trim($photo);
      $class=trim($class);
      $id=(int)$id;

      if($name=="")
            return false;
      
      $sql="update teachers set category='%d', name='%s', achievements='%s', photo='%s', class='%s' where id_teach='%d'";

      $query=sprintf($sql, $category, mysqli_real_escape_string($link, $name),
      mysqli_real_escape_string($link, $achievements),
      mysqli_real_escape_string($link, $photo),
      mysqli_real_escape_string($link, $class),
      $id);
      
      $result=mysqli_query($link, $query);

      if(!$result)
            die(mysqli_error($link));
            
      return mysqli_affected_rows($link);
}

function teachers_delete($link, $id){
      $id=(int)$id;
      if ($id == 0)
            return false;
      $query = sprintf("delete from teachers where id_teach='%d'", $id);
      $result = mysqli_query($link, $query);

      if(!$result)
            die(mysqli_error($link));

      return mysqli_affected_rows($link);
}

?>