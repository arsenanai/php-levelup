<?php
//namespace Html;
include "Html.php";
use Html\Table as T;
use Html\Row as R;

$table = new T();
$table->title = "My Table";
$table->numRows = 5;

$row = new R();
$row->index = 1;
$row->numCells = 3;

echo $table->message() . PHP_EOL;
echo $row->message() . PHP_EOL;
