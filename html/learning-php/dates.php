<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title="Date formatting";

echo "Command type strftime:" .strftime('%c'). "<br>";
echo "Command type date('r'): ". date('r'). "<br>";
$now=getdate();
//sleep(4);
echo "Command type getdate(): ";
print_r($now);
$now=  localtime(time(), true);
echo "<br>Command type localtime(): ";
print_r($now);

echo "<pre>";
$sample=['notebook', 'bottle', 'book'];
var_dump($sample);
$sample=array_flip($sample);
var_dump($sample);
echo"</pre>";

echo "<br><br><a href=\"index.php\">Back</a>";

