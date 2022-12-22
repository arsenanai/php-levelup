<?php

interface Animal {
    public function getSound();
}

class Cat implements Animal {
    public function getSound() {
        return "Meow";
    }
}

class Dog implements Animal {
    public function getSound() {
        return "Bark";
    }
}

class Mouse implements Animal {
    public function getSound() {
        return "Squeak";
    }
}

$animals = array(
    new Cat(),
    new Dog(),
    new Mouse()
);

foreach( $animals as $animal ) {
    echo get_class($animal) . " makes sound: {$animal->getSound()}" . PHP_EOL;
}