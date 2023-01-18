<?php

if( !file_exists('test.txt') ) {
    die('File test.txt not exists');
} else {
    $file = fopen('test.txt', 'r');
    print 'File test.txt opened successfully';
}