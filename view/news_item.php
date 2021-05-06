<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <title>Новости Лицея №34</title>
</head>
<body>
   <?php
   require_once '../components/navbar.php';
   ?>
   <div class="body">
   <div class="article">
   <h3 align="center"><?=$article['title']?></h3>
   <p><?=$article['content']?></p>
   <em><?=$article['date']?></em>
   </div>
   <?php
   require_once '../components/ads.php';
   ?>
   </div>
   <?php
   require_once '../components/footer.php';
   ?>
</body>
</html>