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
<div class="ads">
      <h2>Объявления</h2>
      <?php 
   foreach($ads as $a): ?>
               <a href="../components/ads_item.php?id=<?=$a['id']?>">
               <div class="ads_thing">
                  <img width="100%" src="../img/like news.jpg">
                  <p><?=news_intro($a['title'])?></p>
                </div>
                </a>
                <?php endforeach ?>
    </div>
</body>
</html>

