<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <title>Подразделы</title>
</head>
<body>
   <div class="panel"
        <h3>Вы зашли как админ</h3>
        <a class="exit" href="../components/index.php">Выйти</a>
        <a class="back" href="../admin/index.php">Вернуться в панель администратора</a>
        <a href="../admin/navbar_panel.php">Вернуться назад</a>
        <a href="navbar_panel.php?action=edit&type=<?=$type?>&id=<?=$id?>&subaction=add">Добавить подраздел</a>
        <?//=$id?>
        <table>
         <tr>
         <th>Заголовок</th>
         <th></th>
         <th></th>
         </tr>
         <?php foreach ($subsections as $s): ?>
         <tr>
         <td><?=$s['title']?></td>
         <td> <a href="navbar_panel.php?action=edit&subaction=edit&id_sub=<?=$s['id']?>&id=<?=$s['ind']?>&type=<?=$type?>">Редактировать</a></td>
         <td> <a href="navbar_panel.php?action=edit&subaction=delete&type=<?=$type?>&id_sub=<?=$s['id']?>&id=<?=$s['ind']?>">Удалить</a></td>
         </tr>
         <?php endforeach ?>
         </table>
         </div>
</body>
</html>