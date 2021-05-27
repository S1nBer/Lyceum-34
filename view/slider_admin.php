<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/admin.css">
   <script type="text/javascript" src="../scripts/jquery-3.5.1.min.js"></script>
   <title>Сладйер</title>
</head>
<body>
   <div class="admin_panel">
        <h3>Вы зашли как админ</h3>
        <p><a class="exit" href="../components/index.php">Выйти</a></p>
        <p><a class="back" href="../admin/index.php">Вернуться в панель администратора</a></p>
        <p><a href="slider_panel.php?action=add">Добавить слайд</a></p>
        <table>
         <tr>
         <th>Заголовок</th>
         <th></th>
         <th></th>
         </tr>
         <?php foreach ($slides as $s): ?>
         <tr>
         <td><?=$s['title']?></td>
         <td> <a href="slider_panel.php?action=edit&id=<?=$s['id']?>">Редактировать</a></td>
         <td> <a href="slider_panel.php?action=delete&id=<?=$s['id']?>">Удалить</a></td>
         </tr>
         <?php endforeach ?>
         </table>
         </div>
</body>
</html>