<?php
function news_all($link){
      //запрос на все новости
      $query= "select * from news order by id desc";
      $result= mysqli_query($link, $query);

      if (!$result)
      die(mysqli_error($link));

      //получение новостей
      $n=mysqli_num_rows($result);
      $articles=array();

      for ($i=0;$i<$n;$i++){
            $row=mysqli_fetch_assoc($result);
            $articles[]=$row;
      }

      return $articles;
}

function news_get($link, $id_article){
   //запрос по id
   $query=sprintf("Select * from news where id=%d",(int)$id_article);
   $result=mysqli_query($link, $query);

   if (!$result)
   die(mysqli_error($link)); 

   $article=mysqli_fetch_assoc($result);

   return $article;
}

function news_new($link, $title, $date, $content){
      $title=trim($title);
      $content=trim($content);

      if($title=='')
            return false;
      $t = "insert into news (title, date, content)
      values ('%s', '%s', '%s')";

      $query=sprintf($t, mysqli_real_escape_string($link, $title),
      mysqli_real_escape_string($link, $date),
      mysqli_real_escape_string($link, $content));

      echo $query;
      $result=mysqli_query($link, $query);

      if(!$result)
            die(mysqli_error($link));
      
      return true;
}

function news_delete($id){

}

function news_edit($id, $title, $date, $content){

}
?>