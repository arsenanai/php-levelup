<?php

echo "example 1:" . PHP_EOL;
abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro(): string;
}

class Audi extends Car {
    public function intro(): string {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car {
    public function intro(): string {
        return "Praud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Car {
    public function intro() : string {
        return "French extravagance! I'm a $this->name!";
    }
}

$obj = new audi("Audi A4");
echo $obj->intro() . PHP_EOL;

$obj = new volvo("Volvo xc90");
echo $obj->intro() . PHP_EOL;

$obj = new citroen("Citroen c3");
echo $obj->intro() . PHP_EOL;

echo PHP_EOL . "example 2:" . PHP_EOL;
abstract class ParentClass {
    public bool $male;
    public bool $married;
    public int $age;
    public String $name;

    abstract protected function prefixName(String $name, bool $male = true, int $age = 19,
    bool $married = false);
}

class ChildClass extends ParentClass {
    public function prefixName (String $name, bool $male = true, int $age = 19,
    bool $married = false) {
        $prefix = "";
        if ($male === true) {
            $prefix = "Mr.";
        } else {
            if ($age < 18) {
                $prefix = "Miss";
            } else if ($married === true) {
                $prefix = "Mrs.";
            } else {
                $prefix = "Ms.";
            }
        }
        return "{$prefix} {$name}";
    }
}

$obj = new ChildClass();
echo $obj->prefixName('John Doe') . PHP_EOL;
echo $obj->prefixName('Jane Doe', false) . PHP_EOL;
echo $obj->prefixName('Ann Smith', false, 20, true) . PHP_EOL;
echo $obj->prefixName('Elizabeth Smith', false, 16, false) . PHP_EOL;


echo PHP_EOL . "example 3:" . PHP_EOL;
abstract class ParentClass2 {
    public String $name, $greet, $separator;

    abstract protected function prefixName(String $name,
    String $separator = ".", String $greet = "Dear");
}

class ChildClass2 extends ParentClass2 {
    public function prefixName (String $name, String $separator = ".", String $greet = "Dear") {
        $prefix = "";
        if ($name == "John Doe") {
            $prefix = "Mr";
        } else {
            $prefix = "Miss";
        }
        return "{$greet} {$prefix}{$separator} {$name}";
    }
}

$obj = new ChildClass2();
echo $obj->prefixName('John Doe') . PHP_EOL;
echo $obj->prefixName('Jane Doe', "") . PHP_EOL;