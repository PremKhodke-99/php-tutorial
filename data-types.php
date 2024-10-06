<?php 
$name = "prem khodke";
// echo var_dump($name); //string

$num = 10;
// echo var_dump($num); //int

$numFloat = 10.1;
// echo var_dump($numFloat); //float

$bool = true;
// echo var_dump($bool); //bool

$arr = ["anu", "kanu", "tinu", "nunu"];
// echo var_dump($arr); //array

$empty = null;
// echo var_dump($empty); // NULL

// $user = new className(); //class/object

$connection = ftp_connect("127.0.0.1") or die("local host not fount");
echo var_dump($connection);
?>