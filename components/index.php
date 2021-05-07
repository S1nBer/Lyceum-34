<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <script type="text/javascript" src="../scripts/jquery-3.5.1.min.js"></script>
   <title>Лицей №34</title>
</head>
<body>
   <?php
    require_once 'navbar.php';
    include('slider.php');
    require_once '../database.php';
    require_once '../models/news.php';
    $link=db_connect();
    $articles=news_all($link);
    include("../view/news.php");
    require_once 'footer.php'; ?>
</body>
</html>