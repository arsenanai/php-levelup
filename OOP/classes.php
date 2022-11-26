<?php
declare(strict_types=1);

// Declaring a class
class Fruit{

    private $name, $color;

    // public function __construct() {
    // }
    
    public static function createByNameColor(String $name, String $color ): Fruit {
        $instance = new self();
        $instance->name = $name;
        $instance->color = $color;
        return $instance;
    }

    public static function createByName(String $name): Fruit {
        $instance = new self();
        $instance->name = $name;
        return $instance;
    }

    public static function createByColor(String $color): Fruit {
        $instance = new self();
        $instance->color = $color;
        return $instance;
    }

    public function setName(String $name): void {
        $this->name = $name;
    }

    public function setColor(String $color): void {
        $this->color = $color;
    }

    public function getName(): String {
        return $this->name;
    }

    public function getColor(): String {
        return $this->color;
    }

}

class SimpleFruit{
    public $name, $color;
}

//Using a class

$obj = Fruit::createByNameColor('Apple', 'red');
echo "{$obj->getName()} is {$obj->getColor()} colored" . PHP_EOL;
if ( array_key_exists('REMOTE_ADDR', $_SERVER) )
    echo " <br>";

$obj = new Fruit();
$obj->setName('Banana');
$obj->setColor('yellow');
echo "{$obj->getName()} is {$obj->getColor()} colored" . PHP_EOL;
if ( array_key_exists('REMOTE_ADDR', $_SERVER) )
    echo " <br>";

$obj = Fruit::createByName('Qiwi');
$obj->setColor('green');
echo "{$obj->getName()} is {$obj->getColor()} colored" . PHP_EOL;
if ( array_key_exists('REMOTE_ADDR', $_SERVER) )
    echo " <br>";

$obj = new SimpleFruit();
$obj->name = 'Orange';
$obj->color = 'orange';
echo "{$obj->name} is {$obj->color} colored" . PHP_EOL;
if ( array_key_exists('REMOTE_ADDR', $_SERVER) )
    echo " <br>";
    