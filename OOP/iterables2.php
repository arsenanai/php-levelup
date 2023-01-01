<?php
// Create an Iterator
class MyIterator implements Iterator {
  private $items = [];
  private $pointer = 0;

  public function __construct($items) {
    //array_values() makes sure that the keys are numbers
    $this->items = array_values($items);
  }

  public function current(): mixed {
    return $this->items[$this->pointer];
  }

  public function key(): mixed {
    return $this->pointer;
  }

  public function next(): void {
    $this->pointer++;
  }

  public function rewind(): void {
    $this->pointer = 0;
  }

  public function valid(): bool {
    return $this->pointer < count($this->items);
  }
}

function printIterable(Iterable $myIterable) {
  echo "[";
  foreach($myIterable as $item) {
    echo $item . ",";
  }
  echo "]" . PHP_EOL;
}

$iterator = new MyIterator([
  'a' => 'apple',
  'b' => 'banana',
  'c' => 'cherries',
  'd' => 'dewberry',
  'e' => 'eggplant',
  'f' => 'feijoa',
  'g' => 'guava',
  'h' => 'hazelnuts'
]);
printIterable($iterator);