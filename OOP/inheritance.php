<?php 
declare(strict_types = 1);

class Fruit {
    public String $name;
    public String $color;
    public function message(): String {
        return "This object is an instance of " . get_called_class();
    }
}

class Strawberry extends Fruit {
    public function __construct() {
        $this->name = "Strawberry";
        $this->color = "red";
    }
    public function intro(): String {
        return "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

$obj = new Strawberry();
echo $obj->message() . PHP_EOL;
echo $obj->intro();