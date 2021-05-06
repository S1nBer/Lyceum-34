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
   require_once '../admin/connect.php';
   session_start();
if (isset($_SESSION['Login']) && $_SESSION['Login'] == 'YES') {
        echo '<h3>Вы зашли как админ</h3>';
}
   ?>
   <?php require_once 'navbar.php'; ?>
   <div class="slider">
      <div class="slider__wrapper">
        <div class="slider__items">
          <div class="slider__item">
            <div class="slider_background">
               <a class="slide" href=""></a>
                  <img id="slide_img" src="../img/EGA.jpg" alt="">
                  <div class="bar">
                     <h2>ЕГЭ и ОГЭ</h2>
                     <p>Расписание, порядок проведения, подготовка и многое другое</p>
                     <button>
                        <p>Узнать подробнее</p>
                     </button>
                  </div>
               </a>
            </div>
          </div>
          <div class="slider__item">
            <div class="slider_background">
               <a class="slide" href="">
                  <img id="slide_img" src="../img/GTO.png" alt="">
                  <div class="bar">
                     <h2>ГТО</h2>
                     <p>Условия, ступени и нормативные документы</p>
                     <button>
                        <p>Узнать подробнее</p>
                     </button>
                  </div>
               </a>
            </div>
          </div>
          <div class="slider__item">
            <div class="slider_background">
               <a class="slide" href="">
                  <img id="slide_img" src="../img/prof.png" alt="">
                  <div class="bar">
                     <h2>ПРОФОРИЕНТАЦИОННАЯ РАБОТА</h2>
                     <p>Планы мероприятий, положения опортфолио и программы курсов</p>
                     <button>
                        <p>Узнать подробнее</p>
                     </button>
                  </div>
               </a>
            </div>
          </div>
          <div class="slider__item">
            <div class="slider_background">
               <a class="slide" href="">
                  <img id="slide_img" src="../img/background.jpg" alt="">
                  <div class="bar">
                     <h2>УСЛОВИЯ ПРИЁМА</h2>
                     <p>Правила приёма, приказ, регламенти положения о классах</p>
                     <button>
                        <p>Узнать подробнее</p>
                     </button>
                  </div>
               </a>
            </div>
          </div>
        </div>
      </div>
      <a class="slider__control slider__control_prev" href="#" role="button"></a>
      <a class="slider__control slider__control_next slider__control_show" href="#" role="button"></a>
    </div>
    <?php 
    require_once '../database.php';
    require_once '../models/news.php';
    $link=db_connect();
    $articles=news_all($link);
    include("../view/news.php");
   ?>
   <?php require_once 'footer.php'; ?>
    <script src="../scripts/main.js"></script>
    <script>
      slideShow('.slider', {
        isAutoplay: true
      });
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