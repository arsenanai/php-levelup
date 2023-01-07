<?php

function printSalaries( array $salaries ) {
    foreach ( $salaries as $name => $salary ) {
        echo 'Salary of ' . $name . ' is ' . $salary
        . PHP_EOL;
    }
    echo PHP_EOL;
}

$salaries = [
    'Mohammad' => 2000,
    'Qadir' => 1000,
    'Zara' => 500,
];

printSalaries( $salaries );

$salaries['Mohammad'] = 'High';
$salaries['Qadir'] = 'Medium';
$salaries['Zara'] = 'Low';

printSalaries( $salaries );