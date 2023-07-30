<?php
// decimal
var_dump(10);
// hexadecimal
var_dump(0x2A);
// octal
var_dump(055);
// binary
var_dump(0b110);

var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MAX+1);

var_dump((int) true);
var_dump((int) false);
var_dump((int) 5.98);
var_dump((int) '5.9');
var_dump((int) '87awdwada');
var_dump((int) 'test');
var_dump((int) null);

var_dump( is_int(null) );
// > php v7.4
var_dump(1_000_000);
var_dump('23_000_000_000');
var_dump((int) '8_000_000_000');