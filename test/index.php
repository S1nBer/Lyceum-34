<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Добавление учителя</title>
</head>
<body>
<?php
include_once('../models/upload.php'); 
?>
   <div class="container">
   <form method="post" action="../admin/ped_team_panel.php?action=edit" enctype="multipart/form-data">
   <label>
   Категория
   <!--<select name="category">
        <option value="">Выберете категорию учителей</option>
        <?php //foreach ($categories as $c): ?>
        <option value="<?=$c['category']?>"><?=$c['category']?></option>
         <?php //endforeach ?>
   </select>
   </label>-->
   <label>
   Ф.И.О. Учителя
   <input type="text" name="name" value="" class="form-item">
   </label>
   <label>
   Об учителе
   <textarea class="form-item" name="content"></textarea>
   </label>
   <label>
   Прикрепите фотографию
   <input type="file" name="file" value="" class="form-item">
   </label>
   <label>
   Укажите класс, если учитель является классным руководителем
   <input type="text" name="class" value="" class="form-item">
   </label>
   <input type="submit" value="Сохранить" class="bnt">
   </form>
   </div>
</body>
</html>