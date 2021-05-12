<?php
function news_all($link, $location){
      //запрос на все новости
      $query= sprintf("select * from news join articles on news.ind=articles.id_article where article='%s'  order by news.id desc",$location);
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

   if (!$result){
      die(mysqli_error($link));}

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

function news_delete($link, $id){
      $id=(int)$id;
      if ($id == 0)
            return false;
      $query = sprintf("delete from news where id='%d'", $id);
      $result = mysqli_query($link, $query);

      if(!$result)
            die(mysqli_error($link));

      return mysqli_affected_rows($link);
}

function news_edit($link, $id, $title, $date, $content){
      $title=trim($title);
      $content=trim($content);
      $date=trim($date);
      $id=(int)$id;

      if($title=="")
            return false;
      
      $sql="update news set title='%s', date='%s', content='%s' where id='%d'";

      $query=sprintf($sql, mysqli_real_escape_string($link, $title),
      mysqli_real_escape_string($link, $date),
      mysqli_real_escape_string($link, $content),
      $id);
      
      $result=mysqli_query($link, $query);

      if(!$result)
            die(mysqli_error($link));
            
      return mysqli_affected_rows($link);
}

function news_intro($title, $len=100){
      return mb_substr($title, 0, $len);
}
?>