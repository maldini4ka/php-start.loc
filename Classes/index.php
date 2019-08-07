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
        $information =  "{$this->name}"."{$this->login}"."{$this->password}";
        return $information;
    }

    public function Test() {
        echo 'test';
    }

}


$user1 = new User("Uladzimir", "maldini3", "123456");
echo $user1->getInfo();

class Moderator extends User {
    public $info;
    public $rights;

    function Hello(){
        echo "Moderator is here";
    }

    function __construct($name, $login, $password, $info, $rights)
    {
        parent::__construct($name, $login, $password);
        $this->info = $info;
        $this->rights = $rights;
    }

    public function getInfo() {
        $information =  parent::getInfo();
        $information .="{$this->info}"."{$this->rights}";
        return $information;
    }
}

$moder = new Moderator('Admin', 'Admin', '123', "moderator", "true");
echo '<br>';
echo '<br>'.$moder->Hello();
echo $moder->getInfo();


//class Test
//{
//    private static $name;
//
//    public static function setName($name1) {
//        self::$name = $name1;
//    }
//
//    public static function getName(){
//        return self::$name;
//    }
//}

//Test::setName('Vovka');
//echo Test::getName();