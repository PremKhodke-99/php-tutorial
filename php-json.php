<?php 

$user = ["name" => "prem", "age" => "25", "email" => "premkhodke.99@gmail.com"];
$userJson = json_encode($user);
echo $userJson;



$data = '{"name":"prem","age":"25"}';
$dataArray = json_decode($data, true);
print_r($dataArray);

?>