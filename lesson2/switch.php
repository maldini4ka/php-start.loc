<?php

//создайте переменную и запишите в нее день месяца
$day = date("j");

// можем задать число вручную
//$day = 31;

$p = intdiv($day-1,10)+1;

//определение декады месяца
switch ($p){
    case 1:
        echo "$day число относится к первой декаде месяца";
        break;
    case 2:
        echo "$day число относится ко второй декаде месяца";
        break;
    case 3:
        echo "$day число относится к третьей декаде месяца";
        break;
    case 4:
        echo "$day число относится к третьей декаде месяца";
        break;
}

//сообщение в зависимости от браузера
$browser='MiniOpera';
switch ($browser){
    case 'IE':
        echo "<br> О, да у вас IE!";
        break;
    case 'Firefox':
        echo "<br> Да, и эти браузеры мы поддерживаем";
        break;
    case 'Safari':
        echo "<br> Да, и эти браузеры мы поддерживаем";
        break;
    case 'Opera':
        echo "<br> Да, и эти браузеры мы поддерживаем";
        break;
    default:
        echo "<br> Мы надеемся, что и в вашем браузере все ок!";
}