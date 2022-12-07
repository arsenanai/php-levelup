<?php 
class Goodbye {
    const LEAVING_MESSAGE = "Leaving message from a Goodbye class";
    public function byebye() {
        return self::LEAVING_MESSAGE;
    }
}

$obj = new Goodbye();
echo Goodbye::LEAVING_MESSAGE . PHP_EOL;
echo $obj->byebye();