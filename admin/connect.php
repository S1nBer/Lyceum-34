<?php 
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "lyceum";

@ $db = new mysqli($servername, $username, $password, $database);
if ($db->connect_errno) die ("Не могу подключиться к БД!" . $db->connect_error);
?>