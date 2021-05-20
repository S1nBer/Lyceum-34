<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <script type="text/javascript" src="../scripts/jquery-3.5.1.min.js"></script>
   <title>Новости Лицея №34</title>
</head>
<body>
<?php require_once '../components/navbar.php'; ?>
<div class="body">
<div class="news_block">
<h1> Новости Лицея </h1>
<div class="cur_events">
   <?php 
   foreach($articles as $a): ?>
               <a href="../components/news_item.php?id=<?=$a['id']?>">
               <div class="news_item">
                  <img width="100%" src="../img/preview/<?=$a['photo']?>">
                  <p><?=news_intro($a['title'])?></p>
                </div>
                </a>
                <?php endforeach ?>
               </div>

</div>
<?php
require_once '../components/ads.php';
?>
</div>
<?php require_once '../components/footer.php'; ?>
</body>
</html>