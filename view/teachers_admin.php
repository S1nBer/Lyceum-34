<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/admin.css">
   <link rel="stylesheet" type="text/css" href="../css/fancybox.jquery.css">
   <script type="text/javascript" src="../scripts/jquery-3.5.1.min.js"></script>
   <script type="text/javascript" src="../scripts/jquery.fancybox.js"></script>
   <title>Педколлектив</title>
</head>
<body>
   <div class="admin_panel">
        <h3>Вы зашли как админ</h3>
        <p><a class="exit" href="../components/index.php">Выйти</a><p>
        <p><a class="back" href="../admin/index.php">Вернуться в панель администратора</a><p>
        <p><a href="ped_team_panel.php?action=add">Добавить учителя</a><p>
        <form action="../admin/ped_team_panel.php" method="post">
        <p><select name="category" onChange="this.form.submit()">
        <option value="">Выберете категорию учителей</option>
        <?php 
        $i=0;
        foreach ($categories as $c): ?>
        <option value="<?=$i=$i+1?>"><?=$c['category']?></option>
         <?php endforeach ?>
         <option value="0">Классные руководители</option>
        </select><p>
        </form>
        <?php if(!empty($teachers))
         require_once('../view/ped_table.php'); 
         ?>
         </div>
</body>
<script src="../scripts/alert.js"></script>
</html>
