<?php

// вывод имени посимвольно посредством функции
$name = 'Uladzimir';
function namePrint($name){
    $lenght=strlen($name);
    echo 'Your Name is: ';
    for ($i=0; $i<$lenght; $i++){
        echo substr($name,$i,1)." ";
    }
}
namePrint ($name);

//создать функцию которая принимает размерность массива и значение, которым надо заполнить массив
$array1 = [];
function arraySize ($m,$n,$value){
    for ($i=0; $i<$m; $i++){
        for ($j=0; $j<$n; $j++){
            $array[$i][$j] = $value;

        }
    }
return $array;
}
echo '<pre>';
echo print_r(arraySize(2,6, '*'));
echo '<pre>';

//создать функцию, которая принимает название месяца и выводит на экран количество дней в нем
function day  ($monthName){
    $months = ['January' => '1','February' => '2', 'March' => '3', 'April' => '4','May' => '5', 'June' => '6', 'July' => '7',
        'August' => '8', 'September' => '9', 'October' => '10', 'November' => '11', 'December' => '12'];
   echo "in $monthName is a ".$monthQuantity = cal_days_in_month(CAL_GREGORIAN,$months[$monthName],2019)." days";

}
day ('May');


//создать функцию, которая принимает текст, считает количество гласных в нем в возвращает массив в формате гласных
// буквы - ключи и их количество в тексте)
// текст передаем на английском

$stringExample = 'Iit is a long established fact that a reader';

function glasnye($string){
    $letters = ['a' => '','e' => '', 'i' => '', 'o' => '', 'u' => '', 'y' => ''];
    $lenght=strlen($string);
    for ($i=0; $i<$lenght; $i++){
       switch (substr($string,$i,1)){
           case 'a': $letters['a']++;
               break;
           case 'e': $letters['e']++;
               break;
           case ('i'): $letters['i']++;
               break;
           case 'o': $letters['o']++;
               break;
           case 'u': $letters['u']++;
               break;
           case 'y': $letters['y']++;
       }
    }
    return $letters;
}

echo '<pre>';
print_r(glasnye($stringExample));
echo '<pre>';

//создать функцию, которая выводит позиции всех символов a в переданном тестке в обратном порядке
$stringA ="caat baad breaad";
function numbersA ($string) {
    $lenght = strlen($string);
    for ($i=$lenght; $i>=0; $i--){
        if ((substr($string,$i-1,1))=='a')
        echo $i." ";
            }
    }
numbersA($stringA);
echo '<br>';
echo '<br>';
//написать функцию, которая принимает массив и выводит его используя двойной цикл for и функцию count.
// Функция должна выводить значения массива через пробел, а после вывода первой строки, должен быть переход на новую строчку
$arrayExample = [
    [1,1,1,1],
    [2,2,2,2],
    [3,3,3,3],
    [4,4,4,4],
    [5,5,5,5],
    [6,6,6,6]];
echo '<br>';
function array6 ($array){
$x = count($array[0]);
$y = count($array);
    for ($j=0; $j<$y; $j++){
        for ($i=0; $i<$x; $i++){
            echo $array[$j][$i].' ';
        }
        echo '<br>';
    }
}
array6($arrayExample);