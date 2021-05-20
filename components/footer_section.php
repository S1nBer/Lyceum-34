<?php
require_once '../database.php';
require_once '../models/footer.php';

$link = db_connect();
$inf = inf_get($link, $_GET['location']);


include("../view/footer_section.php");
?>