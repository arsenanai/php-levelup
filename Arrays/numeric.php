<?php

function printArray(array $numbers) {
  echo 'Array is: [';
  foreach ( $numbers as $value ) {
    echo $value . ', ';
  }
  echo ']' . PHP_EOL;
}

// order of values matters
$numbers = [1, 2, 3, 4, 5, 7, 6];

printArray($numbers);

$numbers[0] = 'one';
$numbers[1] = 'two';
$numbers[2] = 'three';
$numbers[3] = 'four';
$numbers[4] = 'five';
// value can be anything
$numbers[5] = 'seven';
$numbers[6] = 'six';

printArray($numbers);