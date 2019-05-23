<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Тест</title>
    </head>
    <body>
      <form method="POST" style="font-family: Arial; text-align: center">
      <h1>С какой стороны вы хотите увидеть авто?</h1>
        <div style="width: 50%; text-align: center; margin-bottom: 20px">
        
        <input type="checkbox" name="cars-view[]" value="left"/>Слева<br />
        <input type="checkbox" name="cars-view[]" value="center"/>Прямо<br />
        <input type="checkbox" name="cars-view[]" value="right"/>Справа<br />
       
      <input type="submit" />
      </form>
<?php

session_start();

$_SESSION['cars-view']=$_POST['cars-view'];




if (!empty($_SESSION['cars-view'])){
    header( "Location: index4.php" );
}


?>
    </body>
</html>

