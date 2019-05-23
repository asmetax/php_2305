<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Тест</title>
    </head>
    <body>
 
      <h1 style="font-family: Arial; text-align: center">Результат</h1>
        <div style="display: block; margin: 0 auto; width: 50%; text-align: center; margin-bottom: 20px">
        
       
    
<?php

session_start();



if($_SESSION['cars']=="volvo"){
    if($_SESSION['cars-color']=="red"){
        foreach($_SESSION['cars-view'] as $view){
                if($view=="left"){
                    echo '<img style="width: 30%;text-align: center;" src="img/volvo_red_left.jpg"><br>';
                }
                if($view=="right"){
                    echo '<img style="width: 30%;text-align: center;" src="img/volvo_red_center.jpg"><br>';
                }
                if($view=="center"){
                    echo '<img style="width: 30%;text-align: center;" src="img/volvo_red_right.jpg"><br>';
                }
        }
    }
    if($_SESSION['cars-color']=="green"){
         foreach($_SESSION['cars-view'] as $view){
                if($view=="left"){
                    echo '<img style="width: 30%;text-align: center;" src="img/volvo_green_left.jpg"><br>';
                }
                if($view=="right"){
                    echo '<img style="width: 30%;text-align: center;" src="img/volvo_green_center.jpg"><br>';
                }
                if($view=="center"){
                    echo '<img style="width: 30%;text-align: center;" src="img/volvo_green_right.jpg"><br>';
                }
        }
    }
    if($_SESSION['cars-color']=="blue"){
        foreach($_SESSION['cars-view'] as $view){
                if($view=="left"){
                    echo '<img style="width: 30%;text-align: center;" src="img/volvo_blue_left.jpg"><br>';
                }
                if($view=="right"){
                    echo '<img style="width: 30%;text-align: center;" src="img/volvo_blue_center.jpg"><br>';
                }
                if($view=="center"){
                    echo '<img style="width: 30%;text-align: center;" src="img/volvo_blue_right.jpg"><br>';
                }
        }
    }
}
if($_SESSION['cars']=="mercedes"){
    if($_SESSION['cars-color']=="red"){
        foreach($_SESSION['cars-view'] as $view){
                if($view=="left"){
                    echo '<img style="width: 30%;text-align: center;" src="img/mercedes_red_left.jpg"><br>';
                }
                if($view=="right"){
                    echo '<img style="width: 30%;text-align: center;" src="img/mercedes_red_center.jpg"><br>';
                }
                if($view=="center"){
                    echo '<img style="width: 30%;text-align: center;" src="img/mercedes_red_right.jpg"><br>';
                }
        }
    }
    if($_SESSION['cars-color']=="green"){
         foreach($_SESSION['cars-view'] as $view){
                if($view=="left"){
                    echo '<img style="width: 30%;text-align: center;" src="img/mercedes_green_left.jpg"><br>';
                }
                if($view=="right"){
                    echo '<img style="width: 30%;text-align: center;" src="img/mercedes_green_center.jpg"><br>';
                }
                if($view=="center"){
                    echo '<img style="width: 30%;text-align: center;" src="img/mercedes_green_right.jpg"><br>';
                }
        }
    }
    if($_SESSION['cars-color']=="blue"){
        foreach($_SESSION['cars-view'] as $view){
                if($view=="left"){
                    echo '<img style="width: 30%;text-align: center;" src="img/mercedes_blue_left.jpg"><br>';
                }
                if($view=="right"){
                    echo '<img style="width: 30%;text-align: center;" src="img/mercedes_blue_center.jpg"><br>';
                }
                if($view=="center"){
                    echo '<img style="width: 30%;text-align: center;" src="img/mercedes_blue_right.jpg"><br>';
                }
        }
    }
}




?>
    </div>
    <div style="display: block; margin: 0 auto; text-align: center;">
    <p>Перезапустим?</p>
    <form method="POST">
    <input type="checkbox" value="1" name="restart" />
    <input type="submit" value="Галочку нажать и погнали заного!"/>
    </form>
    </div>
<?php

if($_POST['restart']==1){
    session_destroy();
    header( "Location: index.php" );
}
 
?>
    </body>
</html>

