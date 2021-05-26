<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <script src="https://lidrekon.ru/slep/js/jquery.js"></script>
   <script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>
   <title>Лицей №34</title>
</head>
<body>
<div class="navbar">
   <ul class="topmenu">
         <li><img class="logo" src="../img/logo.png" alt="Логотип Лицея"></li>
         <li><a class="news" id="sections" href="index.php">Новости</a></li>
         <?php
         if(isset($_GET['hi']))
         echo $_GET['hi'];
         require_once '../database.php';
         require_once '../models/navbar.php';
         $link=db_connect();
         $sections=sections_all($link);
         include("../view/sections.php");
         ?>
         <li><a target="_blank" href="https://cabinet.ruobr.ru/login/?next=/child/studies/mark_table/">Электронный дневник</a></li>
      <li><div class="button">
         <a href="#?hi=hi" id="specialButton" title="Версия сайта для слабовидящих">
            <img class="eye" src="../img/eye.png"></a>
      </div></li>
      </ul>
   </div>
</body>
</html>