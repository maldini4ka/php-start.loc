<?php


class test
{
public $name;
public $age;

public function getAgeName()
    {
        return  "My name is ".$this->name.". I am ".$this->age." years old";
    }
}


$test = new test();
$test ->name = "Volodia";
$test ->age = 32;
echo $test->getAgeName();
