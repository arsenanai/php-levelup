<?php
// vulnerable usage
// $page = $_GET['page'];

// safer to use realpath and basename functions
$page = $_GET['page'];
// echo $page . '</br>';
$filename = "pages/$page";
$page = realpath($filename);
// echo $page . '</br>';
$page = basename($filename);
// echo $page . '</br>';
$file_handler = fopen($filename, "r");
$contents = fread($file_handler, filesize($filename));
fclose($file_handler); 
echo $contents;