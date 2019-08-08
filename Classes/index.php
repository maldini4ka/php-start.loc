<?php

class Keyboard {

    public $name;
    public $model;
    public $key = [];

    public function __construct($key1)
    {
        $this->key = ['a' => $key1];
        var_dump($this->key);
    }

}

class key {
    public $keys;
    public function __construct($keys)
    {
        $this->keys = $keys;
    }

}

$a = new Keyboard(new key("a"));
var_dump($a);