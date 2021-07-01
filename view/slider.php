<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <script type="text/javascript" src="../scripts/jquery-3.5.1.min.js"></script>
</head>
<body>
<div class="slider">
      <div class="slider__wrapper">
        <div class="slider__items">
        <?php foreach ($slides as $s): ?>
          <div class="slider__item">
            <div class="slider_background">
                  <img id="slide_img" src="../img/preview/<?=$s['back']?>" alt=""></div>
                  <div class="bar">
                     <h2><?=title_intro($s['title'])?></h2>
                     <p><?=intro_intro($s['intro'])?></p>
                     <button onclick="document.location='../components/slide.php?id=<?=$s['id']?>'">
                        <p>Узнать подробнее</p>
                     </button>
                  </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
      <a class="slider__control slider__control_prev" href="#" role="button"></a>
      <a class="slider__control slider__control_next slider__control_show" href="#" role="button"></a>
    </div>
    <script src="../scripts/main.js"></script>
    <script>
      slideShow('.slider', {
        isAutoplay: true
      });
      </script>
</body>
</html>