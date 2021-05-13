<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <script type="text/javascript" src="../scripts/jquery-3.5.1.min.js"></script>
   <title>Педколлектив</title>
</head>
<body>
   <div class="panel"
        <h3>Вы зашли как админ</h3>
        <a class="exit" href="../components/index.php">Выйти</a>
        <a class="back" href="../admin/index.php">Вернуться в панель администратора</a>
        <a href="news_panel.php?action=add&location=ads">Добавить объявление</a>
        <br><br>
        <form action="../admin/ped_team_panel.php" method="post">
        <select name="category" onChange="this.form.submit()">
        <option value="">Выберете категорию учителей</option>
        <?php foreach ($categories as $c): ?>
        <option value="<?=$c['category']?>"><?=$c['category']?></option>
         <?php endforeach ?>
        </select>
        </form>
        <?php if(!empty($teachers))
         require_once('../view/ped_table.php'); 
         ?>
         </div>
</body>
</html>
