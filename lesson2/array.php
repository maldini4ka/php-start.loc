<?php

$arrayLesson  = [1,1,1,1,[2,2,2],1,1,[2,2,[3,[4,4,4],3]]];
$symbol="";
echo "<hr>";

function arrayPrint ($arrayLesson, $symbol = "") {
    for ($i = 0;$i < count($arrayLesson); $i++ ){
        $y=$i;
        if (is_array($arrayLesson[$y])){
            $symbol1=$symbol."-";
            arrayPrint($arrayLesson[$y], $symbol1);
            $i++;
        }
        $d = $symbol.$arrayLesson[$i];
        if (isset($arrayLesson[$i]))
        echo $d."<br>";
    }
    $symbol=$symbol."-";
}

arrayPrint($arrayLesson);


echo "<hr>";


$array = [];
$array[0][0] = 5;
echo $array[1][1];
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if (($i + $j) < 4) {
            $array[$i][$j] = 2;
            // echo "$i,$j,$array[$i][$j] .<br>";
        }
        if (($i + $j) == 4) {
            $array[$i][$j] = -1;
        }
        if (($i + $j) > 4) {
            $array[$i][$j] = 0;
        }
    }

}
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br>";

}
