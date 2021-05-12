<?php
$link=db_connect();
$loc="ads";
$ads=news_all($link, $loc);
include("../view/ads.php");
?>