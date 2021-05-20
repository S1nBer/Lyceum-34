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
   <script src="https://cdn.tiny.cloud/1/sjdxm67xirqk50xy2pgnlbugbovxgpz4ouz6y5r5mj3288eh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
   <title>Редактирование информации об учителе</title>
</head>
<body>
<?php
include_once('../models/ped_team.php'); 
?>
   <div class="container">
   <form method="post" action="ped_team_panel.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>" enctype="multipart/form-data">
   <label>
   Категория
   <select name="category">
        <option value="">Выберете категорию учителей</option>
        <?php 
        $i=0;
        foreach ($categories as $c): ?>
        <option value="<?=$i=$i+1?>" <?php if($i == $teacher['category']) echo 'selected'; ?>><?=$c['category']?></option>
         <?php endforeach ?>
   </select>
   </label>
   <label>
   Ф.И.О. Учителя
   <input type="text" name="name" value="<?=$teacher['name']?>" class="form-item" required>
   </label>
   <label>
   Об учителе
   <textarea class="form-item" id="text" name="content" required><?=$teacher['achievements']?></textarea>
   </label>
   <label>
   Прикрепите фотографию
   <?php if(!empty($teacher['photo'])) echo' <a data-fancybox href="../img/teachers/' .$teacher['photo']. '">
   <img class="photo_of_teacher" width="100%" src="../img/teachers/'.$teacher['photo'].'"></a>';?>
   <input type="file" name="file" value="" class="form-item">
   </label>
   <label>
   Укажите класс, если учитель является классным руководителем
   <input type="text" name="class" value="<?=$teacher['class']?>" class="form-item">
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