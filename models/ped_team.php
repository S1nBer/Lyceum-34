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
   $category=trim($category);

      $query= sprintf("select * from teachers join category on teachers.id_teach=category.id_category where category='%s' order by id_teach",$category);
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

function teachers_new($prof, $name, $achivements, $photo){

}

function teachers_edit($id, $prof, $name, $achivements, $photo){

}

function teachers_delete(){

}

?>