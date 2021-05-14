<?php

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

      $query= sprintf("select * from teachers where teachers.category='%d' order by id_teach",$category);
      $result= mysqli_query($link, $query);

      if (!$result)
      die(mysqli_error($link));

      //получение новостей
      $n=mysqli_num_rows($result);
      $teachers=array();

      for ($i=0;$i<$n;$i++){
            $row=mysqli_fetch_assoc($result);
            $teachers[]=$row;
      }

      return $teachers;
}

function teachers_get($id){

}

function teachers_new($link, $category, $name, $achievements, $photo, $class){
      echo $category;
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

function teachers_edit($id, $prof, $name, $achivements, $photo){

}

function teachers_delete(){

}

?>