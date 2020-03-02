<?php
require_once  "model.php";
$article1= new  Article("Новости Formula One" ,"");

$article2 = new SportArticle("Даниил Вячеславович Квят",
    "Дата рождения 26.4.1994 
 <p>Установочные данные: пол: МУЖ: </p>
 Mесто рождения: РОССИЯ, Уфа
   <p>Национальность: РУССКИЙ,</p> ","img/1.jpg", "2rem","gray", "center",
    "2px solid black" );


$article3= new SportArticle();
//($title, $body, $img, $fontSizeTitle="2rem", $backBody="red", $alaginText="center", $borderOne="2px solid black")