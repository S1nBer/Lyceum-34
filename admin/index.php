<?php
require_once '../database.php';
require_once '../models/news.php';

$link=db_connect();
$articles=news_all($link);
include("../view/news.php");
?>