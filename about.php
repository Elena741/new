<?php

$name = 'Елена';
$age = '48 лет';
$email = 'solo741@yandex.ru';
$sity = 'Невинномысск';
$about = 'начинающий веб-разработчик';
?>
<!DOCTYPE>
<html lang="ru">
    <head>
        <title><?= $name . ' – ' . $about ?></title>
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
       		<h1><?= $name?></h1>
       		<h2><?= $about?></h2>
       		<hr>
       		<p><?= $age.'  -  '.$sity?></p>
       		<a href="mailto:<?= $email ?>"><?= $email ?></a>
       </div>
    </body>
</html>