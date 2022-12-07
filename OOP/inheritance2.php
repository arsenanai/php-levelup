<?php
declare(strict_types=1);

use Strawberry as GlobalStrawberry;

class Fruit {
  public $name;
  public $color;
  public function __construct(String $name, String $color) {
    $this->name = $name;
    $this->color = $color;
  }
  /*final*/ protected function intro(): string {
    return "The fruit is {$this->name} and the color is {$this->color}";
  }
}

class Strawberry extends Fruit {
  public int $weight;
  public function __construct(string $name, string $color, int $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
  final public function message(): string {
    return "This object is an instance of s Strawberry class. {$this->intro()}, and the weight is {$this->weight} gram.";
  }
  public function intro(): string {
    return parent::intro();
  }
}

$obj = new Strawberry("Strawberry", "red", 50);
echo $obj->message() . PHP_EOL;
echo $obj->intro();