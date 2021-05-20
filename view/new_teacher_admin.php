<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tiny.cloud/1/sjdxm67xirqk50xy2pgnlbugbovxgpz4ouz6y5r5mj3288eh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
   <title>Добавление учителя</title>
</head>
<body>
<?php
include_once('../models/ped_team.php'); 
?>
   <div class="container">
   <form method="post" action="ped_team_panel.php?action=add" enctype="multipart/form-data">
   <label>
   Категория
   <select name="category">
        <option value="">Выберете категорию учителей</option>
        <?php 
        $i=0;
        foreach ($categories as $c): ?>
        <option value="<?=$i=$i+1?>"><?=$c['category']?></option>
         <?php endforeach ?>
   </select>
   </label>
   <label>
   Ф.И.О. Учителя
   <input type="text" name="name" value="" class="form-item" required>
   </label>
   <label>
   Об учителе
   <textarea class="form-item" id="text" name="content" required></textarea>
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
   <script>
tinymce.init({
  selector: '#text',
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste imagetools wordcount'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
  language_url : '../scripts/ru.js',
});
  </script>
</body>
</html>