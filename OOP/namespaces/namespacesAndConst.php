<?php
namespace Name;
use Name as c;
const a = 'b';

${c\a} = date('Y');
echo $b . PHP_EOL;  // PRINT YEAR
$b = 'X';
echo $b . PHP_EOL;  // PRINT X
echo ${c\a} . PHP_EOL; // PRINT X

include('file.php');