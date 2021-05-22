<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <title>Админ панель</title>
</head>
<body>

<h3>Вы зашли как админ</h3>
        <a class="exit" href="../components/index.php">Выйти из панели администратора</a>
        <p>Выберете, что хотите изменить:</p>
        <a class="post_a" href="../admin/news_panel.php?location=news" >Блок новостей</a>
        <a class="post_a" href="../admin/news_panel.php?location=ads">Объявления</a>
        <a href="../admin/navbar_panel.php">Разделы в шапке сайта</a>
        <a href="../admin/footer_panel.php">Разделы в подвале</a>
        <a href="../admin/ped_team_panel.php">Педколлектив</a>
</body>
</html>