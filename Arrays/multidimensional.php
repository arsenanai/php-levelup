<?php
// for pretty printing
function justifyText( string $string ) {
  return str_pad($string, 15, ' ', STR_PAD_RIGHT);
}

function printMarks( array $marksheet ) {
  foreach( $marksheet as $person => $lessons ){
    echo 'Marks for ' . $person . ': ' . PHP_EOL;
    echo justifyText( 'Lesson' ) . 'Mark' . PHP_EOL;
    foreach( $lessons as $lesson => $mark ){
      echo justifyText( $lesson ) . $mark . PHP_EOL; 
    }
    echo PHP_EOL;
  }
}

function generateRandomMarks(): array {
  $lessons = ['Physics', 'Maths', 'History', 'English', 'Painting', 'Chemistry'];
  $marks = [];
  foreach( $lessons as $lesson ) {
    $marks[$lesson] = mt_rand(22, 39); 
  }
  return $marks;
}

$people = ['Mohammed', 'Qadir', 'Zara', 'Adam', 'Amina', 'Lisa', 'Stango'];

$marksheet = [];
foreach( $people as $person) {
  $marksheet[ $person ] = generateRandomMarks();
}

printMarks( $marksheet );