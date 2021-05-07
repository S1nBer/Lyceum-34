              
              <!doctype html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JavaScript SimpleAdaptiveSlider - Слайдер для сайта на чистом JavaScript [Example 07]</title>
  <!-- Подключаем CSS слайдера -->
  <link rel="stylesheet" href="../css/slider.css">
  <!-- Подключаем JS слайдера -->
  <script defer src="../scripts/main.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // инициализация слайдера
      var slider = new SimpleAdaptiveSlider('.slider', {
        autoplay: true,
        interval: 10000,
      });
    });
  </script>
</head>

<body>
  <!-- Разметка слайдера -->
  <div class="slider">
    <div class="slider__wrapper">
      <div class="slider__items">
        <div class="slider__item">
          <span class="slider__item_inner">
            <span class="slider__item_img">
              <img class="slider__item_photo" src="/examples/images/book-cover-1.jpg" alt="">
            </span>
            <span class="slider__item_testimonial">
              <span class="slider__item_name">JavaScript. Карманный справочник</span>
              <span class="slider__item_post">Дэвид Флэнаган, 2015</span>
              <span class="slider__item_text">
                Представлены самые важные сведения о синтаксисе языка и показаны примеры его применения....
              </span>
              <span class="slider__item_action">
                <a class="btn" href="#">Купить за 769р.</a>
              </span>
            </span>
          </span>
        </div>
        <div class="slider__item">
          <span class="slider__item_inner">
            <span class="slider__item_img">
              <img class="slider__item_photo" src="/examples/images/book-cover-2.jpg" alt="">
            </span>
            <span class="slider__item_testimonial">
              <span class="slider__item_name">JavaScript для профессионалов</span>
              <span class="slider__item_post">Джон Резиг и др., 2017</span>
              <span class="slider__item_text">
                Незаменимое пособие для профессиональных разработчиков веб-приложений на JavaScript...
              </span>
              <span class="slider__item_action">
                <a class="btn" href="#">Купить за 1 441р.</a>
              </span>
            </span>
          </span>
        </div>
        <div class="slider__item">
          <span class="slider__item_inner">
            <span class="slider__item_img">
              <img class="slider__item_photo" src="/examples/images/book-cover-3.jpg" alt="">
            </span>
            <span class="slider__item_testimonial">
              <span class="slider__item_name">HTML5 и CSS3. Веб-разработка по стандартам нового поколения</span>
              <span class="slider__item_post">Брайан Хоган, 2014</span>
              <span class="slider__item_text">
                HTML5 и CSS3 – будущее веб-разработки, но не обязательно ждать будущего, чтобы начать...
              </span>
              <span class="slider__item_action">
                <a class="btn" href="#">Купить за 199р.</a>
              </span>
            </span>
          </span>
        </div>
      </div>
    </div>
    <a class="slider__control slider__control_prev" href="#" role="button" data-slide="prev"></a>
    <a class="slider__control slider__control_next" href="#" role="button" data-slide="next"></a>
  </div>
</body>

</html>
							
						