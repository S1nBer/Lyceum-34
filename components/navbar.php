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
<div class="navbar">
         <img class="logo" src="../img/logo.png" alt="Логотип Лицея">
         <a class="news" id="sections" href="index.php">Новости</a>
         <div class="use_inf">
            <a id="sections" href="#">Полезная информация</a>
            <img id="arrow" src="../img/arrow down.png">
            <div  class="menu1">
               <ul>
                  <li><a href="">Родителям</a></li>
                  <li><a href="">Ученикам</a></li>
                  <li><a href="">Условия приёма</a></li>
               </ul>
            </div>
            </div>
      <div class="educ_process">
         <a id="sections" href="#">Учебный процесс</a>
         <img id="arrow" src="../img/arrow down.png">
         <div  class="menu2">
            <ul>
               <li><a href="">Режим занятий</a></li>
               <li><a href="">Абитуриенту</a></li>
               <li><a href="">Достижения</a></li>
               <li><a href="">Профиль и предпрофиль</a></li>
               <li><a href="">Дистанционное обучение</a></li>
               <li><a href="">Инновационная деятельность</a></li>
               <li><a href="">Объявления</a></li>
               <li><a href="">Олимпиады, конкурсы, конференции</a></li>
               <li><a href="">ФГОС</a></li>
            </ul>
         </div>
      </div>
      <div class="ped_team">
         <a id="sections" href="../components/ped_team.php">Педколлектив</a>
      </div>
      <div class="el_diary">
         <a id="sections" target="_blank" href="https://cabinet.ruobr.ru/login/?next=/child/studies/mark_table/">Электронный дневник</a>
      </div>
      <div class="button">
         <button class="version">
            <table class="button">
            <tr>
               <td id="col11"><img class="eye" src="../img/eye.png"></td>
               <td id="col12"><div class="stick"></div></td>
               <td id="col13"><div class="Version">
                  Версия для слабовидящих
               </div></td>
            </tr>
            </table>
         </button>
      </div>
   </div>
   <script>
      $(".menu1").hide();
      $(function() {
         $(".use_inf").hover(onIn, onOut);
      });
      function onIn() {
         $(".menu1").fadeIn(250);
      }
      function onOut() {
         $(".menu1").fadeOut(250);
      }
      $(".menu2").hide();
      $(function() {
         $(".educ_process").hover(onin, onout);
      });
      function onin() {
         $(".menu2").fadeIn(250);
      }
      function onout() {
         $(".menu2").fadeOut(250);
      }
    </script>
</body>
</html>