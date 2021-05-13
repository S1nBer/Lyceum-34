<?php
require_once '../database.php';
require_once '../models/news.php';

$link=db_connect();
$loc="ads";
$ads=news_all($link, $loc);
include("../view/ads.php");
?>