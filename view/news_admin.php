<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/admin.css">
   <script type="text/javascript" src="../scripts/jquery-3.5.1.min.js"></script>
   <title>Новости Лицея №34</title>
</head>
<body>
   <div class="admin_panel">
        <h3>Вы зашли как админ</h3>
        <p><a class="exit" href="../components/index.php">Выйти</a></p>
        <p><a class="back" href="../admin/index.php">Вернуться в панель администратора</a></p>
        <?php if($location=="news")
         echo '<p><a href="news_panel.php?action=add&location=news">Добавить новость</a></p>';
         else echo '<p><a href="news_panel.php?action=add&location=ads">Добавить объявление</a></p>'?>
        <table>
         <tr>
         <th>Дата</th>
         <th>Заголовок</th>
         <th></th>
         <th></th>
         </tr>
         <?php foreach ($articles as $a): ?>
         <tr>
         <td><?=$a['date']?></td>
         <td><?=$a['title']?></td>
         <td> <a href="news_panel.php?action=edit&id=<?=$a['id']?>&location=<?=$location?>">Редактировать</a></td>
         <td> <a href="news_panel.php?action=delete&id=<?=$a['id']?>&location=<?=$location?>" onclick="return confirm_alert(this);">Удалить</a></td>
         </tr>
         <?php endforeach ?>
         </table>
         </div>
</body>
<script src="../scripts/alert.js"></script>
</html>