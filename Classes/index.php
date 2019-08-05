<?php

class User
{
    public $name;
    public $login;
    public $password;

    function __construct($name,$login, $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;

    }

    public function getInfo() {
        return "{$this->name}"."{$this->login}"."{$this->password}";
    }


}


$user1 = new User("Uladzimir", "popopo", "123456");
echo $user1->getInfo();