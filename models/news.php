<?php

function can_upload($file){
	// если имя пустое, значит файл не выбран
    /*if($file['name'] == '')
		return 'Вы не выбрали файл.';*/
	
	/* если размер файла 0, значит его не пропустили настройки 
	сервера из-за того, что он слишком большой */
	if($file['size'] == 0)
		return 'Файл слишком большой.';
	
	// разбиваем имя файла по точке и получаем массив
	$getMime = explode('.', $file['name']);
	// нас интересует последний элемент массива - расширение
	$mime = strtolower(end($getMime));
	// объявим массив допустимых расширений
	$types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');
	
	// если расширение не входит в список допустимых - return
	if(!in_array($mime, $types))
		return 'Недопустимый тип файла.';
	
	return true;
  }
  
function make_upload($file){	
      // формируем уникальное имя картинки: случайное число и name
      $name = mt_rand(0, 10000) . $file['name'];
      copy($file['tmp_name'], '../img/preview/' . $name);
      return $name;
}

function photo_get($link, $id){

	$query = sprintf("select photo from news where id = '%d'", $id);
	$result = mysqli_query($link, $query);

	if (!$result)
	die(mysqli_error($link));

	$photo = mysqli_fetch_assoc($result);

	return $photo;
}

function news_all($link, $location){
      //запрос на все новости
      $location=trim($location);

      $query= sprintf("select * from news where article='%s' order by id desc",$location);
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
   $query=sprintf("Select * from news where id='%d'",(int)$id_article);
   $result=mysqli_query($link, $query);

   if (!$result){
      die(mysqli_error($link));}

   $article=mysqli_fetch_assoc($result);

   return $article;
}


function news_new($link, $location, $title, $date, $content, $photo){
      $title=trim($title);
      $content=trim($content);
      $location=trim($location);

      if($title=='')
            return false;
      $t = "insert into news (article, title, date, content, photo)
      values ('%s', '%s', '%s', '%s', '%s')";

      $query=sprintf($t, $location, mysqli_real_escape_string($link, $title),
      mysqli_real_escape_string($link, $date),
      mysqli_real_escape_string($link, $content),
      mysqli_real_escape_string($link, $photo));

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

function news_edit($link, $id, $title, $date, $content, $location, $photo){
      $title=trim($title);
      $content=trim($content);
      $date=trim($date);
      $location=trim($location);
      $id=(int)$id;

      if($title=="")
            return false;
      
      $sql="update news set article='%s', title='%s', date='%s', content='%s', photo='%s' where id='%d'";

      $query=sprintf($sql, $location, mysqli_real_escape_string($link, $title),
      mysqli_real_escape_string($link, $date),
      mysqli_real_escape_string($link, $content),
      mysqli_real_escape_string($link, $photo),
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