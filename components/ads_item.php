<?php
require_once '../database.php';
require_once '../models/news.php';

$link = db_connect();
$ads = news_get($link, $_GET['id']);

include("../view/ads_item.php");
?>