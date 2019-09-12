<?php

class refrigerator {
   public $model ="";
    public  $regim;
    public  $temperature;
    public  $polki;

 public function StartWork ($mod) {
 echo "Start frozen:".$mod;
 }

 public function Froze ($temp) {
     $temperature = $temp;
     echo "<br>".$temperature;
 }

    public function UnFroze () {
        $temperature = 0;
        echo "<br> Temp=:".$temperature;
    }
}


$newFr = new refrigerator();

$newFr->StartWork('LG');
$newFr->Froze(-10);
$newFr->UnFroze();

class Car {
    private $color;
    private $year;
    private $model;
    private $engine;

    public function __construct($color, $year, $model, $newEngine)
    {
        $this->engine = $newEngine;
        $this->ChangeColor($color);
        $this->year = $year;
        $this->model = $model;
    }

    public function startEngine(){
        $this->engine->on();
    }

    public function Go(){


    }

    public function ChangeColor ($color) {
        $this->color = $color;
    }

    public function DisplayColor () {
       return $this->color;
    }


}



class Engine {

    public function on(){

    }

    public function off(){

    }

}

$engine = new Engine();
$myCar = new Car("white", 2009, 'Tesla', $engine);

echo "<pre>";
print_r($myCar);

