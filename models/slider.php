<?php
function can_upload_slide($file){
	// если имя пустое, значит файл не выбран
    if($file['name'] == '')
		return 'Вы не выбрали файл.';
	
	/* если размер файла 0, значит его не пропустили настройки 
	сервера из-за того, что он слишком большой */
	if($file['size'] == 0)
		return 'Файл слишком большой или он не был загружен';
	
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
  
function make_upload_slide($file){	
      // формируем уникальное имя картинки: случайное число и name
      $name = mt_rand(0, 10000) . $file['name'];
      copy($file['tmp_name'], '../img/preview/' . $name);
      return $name;
}

function photo_get_slide($link, $id){

	$query = sprintf("select back from slider where id = '%d'", $id);
	$result = mysqli_query($link, $query);

	if (!$result)
	die(mysqli_error($link));

	$photo = mysqli_fetch_assoc($result);

	return $photo;
}


function slides_all($link){
      //запрос на все новости
      $query = sprintf("select * from slider order by id");
      $result = mysqli_query($link, $query);

      if (!$result)
      die(mysqli_error($link));

      //получение новостей
      $n = mysqli_num_rows($result);
      $slides = array();

      for ($i = 0;$i < $n;$i++){
            $row = mysqli_fetch_assoc($result);
            $slides[] = $row;
      }

      return $slides;
}

function slide_new($link, $title, $intro, $content, $photo){
      $title=trim($title);
      $content=trim($content);
      $intro=trim($intro);

      if($title == '')
            return false;
      $t = "insert into slider (title, intro, content, back)
      values ('%s', '%s', '%s', '%s')";

      $query = sprintf($t, mysqli_real_escape_string($link, $title),
      mysqli_real_escape_string($link, $intro),
      mysqli_real_escape_string($link, $content),
      mysqli_real_escape_string($link, $photo));

      $result = mysqli_query($link, $query);

      if(!$result)
            die(mysqli_error($link));

      return true;
}

function slide_edit($link, $id, $title, $intro, $content, $photo){
      $title = trim($title);
      $content = trim($content);
      $intro = trim($intro);
      $id = (int)$id;

      if($title == "")
            return false;
      
      $sql = "update slider set title='%s', intro='%s', content='%s', back='%s' where id='%d'";

      $query=sprintf($sql, mysqli_real_escape_string($link, $title),
      mysqli_real_escape_string($link, $intro),
      mysqli_real_escape_string($link, $content),
      mysqli_real_escape_string($link, $photo),
      $id);
      
      $result = mysqli_query($link, $query);

      if(!$result)
            die(mysqli_error($link));
            
      return mysqli_affected_rows($link);
}

function slide_delete($link, $id){
      $id = (int)$id;
      if ($id == 0)
            return false;
      
      
      $query = sprintf("delete from slider where id='%d'", $id);
      $result = mysqli_query($link, $query);

      if(!$result)
            die(mysqli_error($link));

      return mysqli_affected_rows($link);
}

function slide_get($link, $id){
      $query = sprintf("Select * from slider where id='%d'",(int)$id);
      $result = mysqli_query($link, $query);

      if (!$result){
      die(mysqli_error($link));}

      $slide = mysqli_fetch_assoc($result);

      return $slide;
}

function title_intro($title, $len=100){
      return mb_substr($title, 0, $len);
}

function intro_intro($title, $len=300){
      return mb_substr($title, 0, $len);
}
?>