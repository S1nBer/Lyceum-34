<?php
require_once '../database.php';
require_once '../models/news.php';

$link = db_connect();
$article = news_get($link, $_GET['id']);

include("../view/news_item.php");
?>