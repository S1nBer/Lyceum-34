<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--<link rel="stylesheet" type="text/css" href="../css/style.css">-->
   <title>Добавление новости</title>
</head>
<body>
   <div class="container">
   <form method="post" action="news_panel.php?action=add">
   <label>
   Заголовок
   <input type="text" name="title" value="" class="form-item" autofocus require>
   </label>
   <label>
   Дата
   <input type="date" name="date" value="" class="form-item" require>
   </label>
   <label>
   Содержание
   <textarea class="form-item" name="content" require></textarea>
   </label>
   <input type="submit" value="Сохранить" class="bnt">
   </form>
   </div>
</body>
</html>