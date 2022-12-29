<?php
abstract class Turing {
	protected function __construct(){}
	public static function create() {
		return new static();
	}
	abstract function action();
}

class Item extends Turing {
	public function action(){
		echo get_class();
	}
}

$item = Item::create();
$item->action();
