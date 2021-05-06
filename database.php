<?php
define('server','localhost');
define('user','root');
define('password','');
define('database','lyceum');

function db_connect(){
   $link = mysqli_connect(server,user,password,database) or die("Ошибка: ".mysqli_error($link));
   if(!mysqli_set_charset($link,"utf8")){
      printf("Ошибка: ".mysqli_error($link));
   }
   return $link;
}
?>