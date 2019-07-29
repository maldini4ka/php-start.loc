<?php
$file = fopen("123.txt", "w+");
fwrite($file, "My name is Uladzimir. I am 32 years old.");
fclose($file);

$file = fopen("123.txt", "r+t");
while (!feof($file)) {
    echo fread($file, 2)."<br />";
}
fclose($file);