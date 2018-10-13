<?php
$x = rand(0,100);
$var1 = 1;
$var2 = 1;
	while ($var1 < $x) {
        $var3 = $var1;
        $var1 = $var1 + $var2;
        $var2 = $var3;
        }
?>

<!DOCTYPE>
<html lang="ru">
    <head>
        <title>Числа Фибоначчи</title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;
                font-size: 20px;            
            }
            h1 {
                font-size: 32px;
            }
            h2 {
                font-size: 26px;
            }
            hr {
                border: 1px solid black; 
            }
            div {
                width: 400px;
                margin: 20px;
                border: 2px solid black;
                padding: 10px;
                padding-bottom: 35px;
                text-align: center;
            }
        </style>
    </head>
    <body>
       <div>
          <h1>Число - <?= $x?></h1>             
          <hr>
          <?php
          if ($var1 == $x) {
                  echo 'задуманное число входит в числовой ряд';
          }
          else
                  echo 'задуманное число НЕ входит в числовой ряд';
          ?>
       </div>
    </body>
</html>