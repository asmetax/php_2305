<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Тест</title>
    </head>
    <body>
      <form method="POST" style="font-family: Arial; text-align: center">
      <h1>Выберите цвет</h1>
        <div style="width: 50%; text-align: center; margin-bottom: 20px">
        
        <input type="radio" name="cars-color" value="blue"/>Синий<br />
        <input type="radio" name="cars-color" value="red"/>Красный<br />
        <input type="radio" name="cars-color" value="green"/>Зеленый<br />
       
      <input type="submit" />
      </form>
<?php

session_start();

$_SESSION['cars-color']=$_POST['cars-color'];

if (!empty($_SESSION['cars-color'])){
    header( "Location: index3.php" );
}

?>
    </body>
</html>

