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
   <link rel="stylesheet" type="text/css" href="../css/admin.css">
   <title>Редактирование слайда</title>
</head>
<body>
<?php
include_once('../models/slider.php'); 
?>

   <div class="admin_panel">
   <form method="post" action="slider_panel.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>" enctype="multipart/form-data">
   <p><label>
   Заголовок: <br>
   <input type="text" name="title" value="<?=$slide['title']?>" class="form-item" autofocus required>
   </label></p>
   <p><label>
   Краткое описание: <br>
   <textarea class="form-item" id="text" name="intro"><?=$slide['intro']?></textarea>
   </label></p>
   <p><label>
   Содержание: <br>
   <textarea class="form-item" name="content" id="text"><?=$slide['content']?></textarea>
   </label></p>
   <p><label>
   Прикрепите фотографию: <br>
   <a data-fancybox href="../img/preview/<?=$slide['back']?>">
   <img class="preview" width="100%" src="../img/preview/<?=$slide['back']?>"></a>
   <input type="file" name="file" value="" class="form-item">
   </label></p>
   <input type="submit" value="Сохранить" class="bnt">
   </form>
   </div>
   <script>
tinymce.init({
  selector: 'textarea',
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