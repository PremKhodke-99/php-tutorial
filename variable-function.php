<?php 

function test(){
    echo "testu <br/>";
}

$test = "test";
$test();

function main($a){
    $a();
}

main($test);

?>