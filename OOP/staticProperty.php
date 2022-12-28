<?php
class Constants {
  public static $pi = 3.14159;
  public function getPI() {
    return self::$pi;
  }
}

$c = new Constants();
echo $c->getPI() . PHP_EOL;

class pi {
  public static $value = 3.14159;
}

echo pi::$value . PHP_EOL;

class x extends pi {
  public function xStatic() {
    return parent::$value;
  }
}

echo x::$value . PHP_EOL;

$x = new x();
echo $x->xStatic() . PHP_EOL;

