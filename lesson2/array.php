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
