<?php
$a = 50;
$a = (string) $a;
var_dump($a);

$b = "300";
$b = (int) $b;
var_dump($b);


$c = 1.1;
$c = (float)$c;
var_dump($c);

$d = "hello";
$d = (bool)$d;
var_dump($d);

$e = 10;
$e = (array) $e;
var_dump($e);
