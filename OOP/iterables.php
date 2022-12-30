<?php

echo "example 1:" . PHP_EOL;
function printIterable(iterable $items): void {
  echo "[";
  foreach($items as $item) {
    echo $item . ", ";
  }
  echo "]".PHP_EOL;
}
printIterable( $a = [1,2,3,4,5] );

echo "example 2:" . PHP_EOL;
function getIterable(): iterable {
  $limit = mt_rand(10,100);
  $i = -1;
  $r = array();
  while ($i++<$limit) {
    array_push($r, mt_rand(1, 1000));
  }
  return $r;
}

printIterable( getIterable() );
