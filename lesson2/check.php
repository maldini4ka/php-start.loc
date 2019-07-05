<?php
if( empty ($_POST['numberA']) ){
    echo 'не введено поле 1! "<a href="index.html">Заполните данные еще раз!</a>';
       }
if( empty ($_POST['numberB']) ){
    echo 'не введено поле 2! повторите ввод';
}
if( empty ($_POST['numberC']) ){
    echo 'не введено поле 3! повторите ввод';
}
foreach ($_POST as $key => $value)
echo $key."= ".$value."<br>";