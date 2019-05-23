<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Тест</title>
    </head>
    <body>
      <form method="POST" style="font-family: Arial; text-align: center">
      <h1>Выберите марку</h1>
        <select name="cars" style="width: 50%; text-align: center; margin-bottom: 20px">
          <option value="volvo">Volvo</option>
          <option value="mercedes">Mersedes-benz</option>
        </select>
        <br />
      <input type="submit" />
      </form>
<?php
session_start();
session_destroy();

session_start();

$_SESSION['cars']=$_POST['cars'];
if (!empty($_SESSION['cars'])){
    header( "Location: index2.php" );
}


?>
    </body>
</html>