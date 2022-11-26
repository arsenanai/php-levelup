<?php
declare(strict_types=1);

class Fruit{
	
  public String $name, $color;
	
  public function __construct() {}

  public function __destruct() {
    echo "This is called before destroying fruit with name: {$this->name}, and color: {$this->color}";
  }
	
}

$obj = new Fruit();
$obj->name = 'Banana';
$obj->color = 'yellow';
exit();
