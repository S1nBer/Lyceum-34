<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" type="text/css" href="../css/ped_team.css">
   <link rel="stylesheet" type="text/css" href="../css/fancybox.jquery.css">
   <script type="text/javascript" src="../scripts/jquery-3.5.1.min.js"></script>
   <script type="text/javascript" src="../scripts/jquery.fancybox.js"></script>
   <title>Педколлектив</title>
</head>
<body>
<?php
require_once '../components/navbar.php';
?>
<div class="body">
<div class="teachers">
<form class="select" action="../components/ped_team.php" method="post">
        <select name="category" onChange="this.form.submit()">
        <option value="">Выберете категорию учителей</option>
        <?php 
        $i=0;
        foreach ($categories as $c): ?>
        <option value="<?=$i=$i+1?>"><?=$c['category']?></option>
         <?php endforeach ?>
         <option value="0">Классные руководители</option>
        </select>
        </form>
        <?php
        if(isset($category)){
                if($category != 0){
                        $group = category($link, $category);
                        echo '<h2>' .$group['category']. '</h2>';
                }
                else{
                        echo '<h2>Классные руководители</h2>';
                }
        }
        ?>
        <br><br>
        <div class="teachers_of_category">
        <?php
         if (isset($teachers))
         foreach ($teachers as $t): ?>
        <div class="person">
        <a data-fancybox href="../img/teachers/<?=$t['photo']?>">
         <img class="photo_teacher" width="100%" src="../img/teachers/<?=$t['photo']?>"></a>
         <h3><?=$t['name']?></h3>
         <p><?=$t['achievements']?></p>
         <?php if(!empty($t['class'])) echo'<p>Классный руководитель в ' .$t['class']. '</p>'; ?>
        </div>
        <?php endforeach ?>
         </div>
        </div>
<?php
require_once '../components/ads.php';
?>
</div>
<?php
require_once '../components/footer.php';
?>
</body>
</html>