<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" type="text/css" href="../css/fancybox.jquery.css">
   <script type="text/javascript" src="../scripts/jquery-3.5.1.min.js"></script>
   <script type="text/javascript" src="../scripts/jquery.fancybox.js"></script>
   <title>Новости Лицея №34</title>
</head>
<body>
   <?php
   require_once '../components/navbar.php';
   ?>
   <div class="body">
   <div class="article">
   <h3 align="center"><?=$slide['title']?></h3>
   <p><?=$slide['content']?></p>
   </div>
   <?php
   require_once '../components/ads.php';
   ?>
   </div>
   <?php
   require_once '../components/footer.php';
   ?>
   <script>
   let article = document.getElementsByClassName('article');
   $('.article img').each(function () {
    $(this).wrap("<a data-fancybox href='" + this.src + "' rel='shadowbox'></a>");
   });
   </script>
</body>
</html>