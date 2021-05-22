<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <script type="text/javascript" src="../scripts/jquery-3.5.1.min.js"></script>
   <title>Выбор типа</title>
</head>
<body>
   <div class="panel">
   <form method="post" action="navbar_panel.php?action=add">
   Выберете тип будущего раздела:
    <p><input name="type" type="radio" value="one" checked> Одностранничный раздел</p>
    <p><input name="type" type="radio" value="many"> Раздел с подразделами</p>
    <p><input type="submit" value="Выбрать"></p>
   </form>
   </div>
</body>
</html>