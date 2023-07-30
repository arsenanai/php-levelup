<?php

$arr = ['a', 'b', 'c'];

array_push($arr, 'd');
$arr[] = 'e';

unset($arr[0], $arr[1], $arr[2]);

array_push($arr, 'f');
$arr[] = 'g';

echo '<pre>';
print_r($arr);
echo '</pre>';