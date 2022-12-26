<?php
trait message1 {
    public function msg1() {
        return "OOP is fun!";
    }
}

trait message2 {
    public function msg2() {
        return "OOP reduces code duplication!";
    }
}

class Welcome {
    use message1;
}

class Welcome2 {
    use message1, message2;
}

$obj = new Welcome();
echo $obj->msg1() . PHP_EOL;

$obj = new Welcome2();
echo $obj->msg1() . PHP_EOL;
echo $obj->msg2() . PHP_EOL;
