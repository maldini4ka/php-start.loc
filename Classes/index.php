<?php

class Keyboard {

    public $name;
    public $model;
    public $keys = [];

    /**
     * Keyboard constructor.
     * @param $name
     * @param $model
     * @param array $keys
     */
    public function __construct($name, $model, array $keys = [])
    {
        $this->name = $name;
        $this->model = $model;
        $this->keys = $keys;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return array
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * @param Key $key
     */
    public function addKey($key)
    {
        //foreache $this->keys
        $this->keys[] = $key;
        [
            0 = key {1,1,q}
            1 = key {1,2,w}
            2 = key {1,3,e}
            3 = key {1,4,r}
        ]

//          $this->keys[$key->getX()][] = $key;
        //  $this->keys[$key->getX()][$key->getY()] = $key;
        $this->keys['numbers'][$key->getX()][$key->getY()] = $key;
        $this->keys['symbols'][$key->getSymbol()] = $key;
        [
            'numbers' => 1 = [
                1 = key {1,1,q}
                2 = key {1,2,w}
                3 = key {1,3,e}
                4 = key {1,4,r}
            ]
            'symbols' =>
                'q' => key {1,1,q}
                'w' => key {1,1,w}
                'e' => key {1,1,e}
                'r' => key {1,1,r}
        ]
    }

    public function removeKey($key)
    {
        //foreache $this->keys
    }

    public function getKeyByRowCol($row, $col)
    {
        if (isset($this->keys['numbers'][$row]) && isset($this->keys['numbers'][$row][$col]))
            return $this->keys['numbers'][$row][$col];
        else {
            return null;
        }
    }


}

class Key {
    private $symbol;
    private $x;
    private $y;

    /**
     * key constructor.
     * @param $symbol
     * @param $x
     * @param $y
     */
    public function __construct($symbol, $x, $y)
    {
        $this->symbol = $symbol;
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param mixed $symbol
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }
}
function pre($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$keyboarLogitech = new Keyboard( 'Logitech' , 'm20');
var_dump($a);

$key1 = new Key('q',1,1);
$key2 = new Key('w',1,2);
$key3 = new Key('e',1,3);
$key4 = new Key('r',1,4);

$keyboarLogitech->addKey($key1);
$keyboarLogitech->addKey($key2);
$keyboarLogitech->addKey($key3);
$keyboarLogitech->addKey($key4);

$keybordMicrosoft = new Keyboard('Micro', 'Soft', [$key1,$key2,$key3,$key4]);

$keyboarLogitech->getKeys();
$keyboarLogitech->getKeyByRowCol(1,2);

echo '<br>';
$b = $a->key;
