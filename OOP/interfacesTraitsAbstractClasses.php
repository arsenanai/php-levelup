<?php
interface PrintableClass {
    public function getFormattedName(): String;
    public function getFormattedClassName(): String;
}
trait Formatter {
    public function formatName(String $name): String {
        return "My name is {$name}.";
    }
    public function formatClassName(String $name): String {
        return "This object is from class - {$name}.";
    }
}
abstract class ParentClass{
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
}
class TheClass extends ParentClass implements PrintableClass{
    use Formatter;
    public function getFormattedName(): String {
        return $this->formatName($this->name);
    }
    public function getFormattedClassName(): String {
        return $this->formatClassName("TheClass");
    }
}

$obj = new TheClass("Apple");
echo $obj->getFormattedName() . PHP_EOL;
echo $obj->getFormattedClassName() . PHP_EOL;