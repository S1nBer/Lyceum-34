<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <script src="https://cdn.tiny.cloud/1/sjdxm67xirqk50xy2pgnlbugbovxgpz4ouz6y5r5mj3288eh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
   <!--<link rel="stylesheet" type="text/css" href="../css/style.css">-->
   <title>Редактирование раздела</title>
</head>
<body>
   <div class="container">
   <form method="post" action="navbar_panel.php?action=<?=$_GET['action']?>&id=<?=$id?>&type=<?=$type?>">
   <label>
   Заголовок
   <input type="text" name="title" value="<?=$section['title']?>" class="form-item" autofocus required>
   </label>
   <label>
   Содержание
   <textarea class="form-item" name="content" id="text"><?=$section['content']?></textarea>
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