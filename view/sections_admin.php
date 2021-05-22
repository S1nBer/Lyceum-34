<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <title>Разделы</title>
</head>
<body>
   <div class="panel"
        <h3>Вы зашли как админ</h3>
        <a class="exit" href="../components/index.php">Выйти</a>
        <a class="back" href="../admin/index.php">Вернуться в панель администратора</a>
        <a href="choice_type.php?action=add">Добавить раздел</a>
        <table>
         <tr>
         <th>Заголовок</th>
         <th></th>
         <th></th>
         </tr>
         <?php foreach ($sections as $s): ?>
         <tr>
         <td><?=$s['title']?></td>
         <td> <a href="navbar_panel.php?action=edit&id=<?=$s['id']?>&type=<?=$s['type']?>">Редактировать</a></td>
         <td> <a href="navbar_panel.php?action=delete&id=<?=$s['id']?>&type=<?=$s['type']?>">Удалить</a></td>
         </tr>
         <?php endforeach ?>
         </table>
         </div>
</body>
</html>