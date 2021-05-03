<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/login.css">
   <title>Вход в админ. панель</title>
   <?php
   ini_set('display_errors', 0);
   ini_set('display_startup_errors', 0);
   error_reporting(E_ALL);

   require_once 'connect.php';

$login = $_POST["login"];
$password = $_POST["password"];
if(isset($login) && isset($password)) {

   $query = "select * from admin";
   $qr_result = mysqli_query($db, $query);

   while($data = mysqli_fetch_array($qr_result))
   {
       if ($_POST["login"] == $data['login'] && $_POST["password"] == $data['password'])
       {
           session_start();
           $_SESSION["Login"] = "YES";
           $correct = 'true';
           header("Location: ../index.php");
       }
   }
   if(!isset($correct))
   {
       $correct = 'false';
       header("Location: login.php?login=$correct");
   }
}

?>
</head>
<body>
   <div class="container">
<h2>Login</h2>

<form method="post" action="login.php">
   <div class="login">
      <span class="label-input1">Login</span>
      <input class="input1" type="text" placeholder="Пожалуйста, введите логин" required name="login"/>
   </div>
   <div class="password">
      <span class="label-input2">Password</span>
      <input class="input2" type="password" placeholder="Пожалуйста, введите пароль" required name="password"/>
   </div>
   <div class="submit">
      <input class="button" type="submit" name="action" value="ENTER">
   </div>
   </form>
        <div class="back">
        <a href="../index.php">Вернуться на главную</a>
        </div>
            </div>
</body>
</html>