<?php
class Utils {
  protected static function getOrganizationName() {
    return "Organization";
  }
}

class Title extends Utils {
  public $title;
  public function __construct($title) {
    $this->title = parent::getOrganizationName() . " - " . $title;
  }
}

$obj = new Title("Landing Page");
echo $obj->title . PHP_EOL;
