<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" href="../css/bvi.min.css" type="text/css">
   <link rel="stylesheet" href="../css/bvi.css" type="text/css">
   <title>Лицей №34</title>
</head>
<body>
<div class="navbar">
   <ul class="topmenu">
         <li><img class="logo" src="../img/logo.png" alt="Логотип Лицея"></li>
         <li><a class="news" id="sections" href="index.php">Новости</a></li>
         <?php
         require_once '../database.php';
         require_once '../models/navbar.php';
         $link=db_connect();
         $sections=sections_all($link);
         include("../view/sections.php");
         ?>
         <li><a target="_blank" href="https://cabinet.ruobr.ru/login/?next=/child/studies/mark_table/">Электронный дневник</a></li>
      <li><div class="button">
         <!--<button>-->
         <a href="#" class="bvi-open" title="Версия сайта для слабовидящих"><i class="bvi-icon bvi-eye bvi-2x"></i>
            <img class="eye" src="../img/eye.png"></a>
               <!--<div class="stick"></div>
               <p class="version">Версия для слабовидящих</p>
         </button>-->
      </div></li>
      </ul>
   </div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="../scripts/responsivevoice.min.js"></script>
<script src="../scripts/js.cookie.js"></script>
<script src="../scripts/bvi-init.js"></script>
<script src="../scripts/bvi.min.js"></script>
</body>
</html>