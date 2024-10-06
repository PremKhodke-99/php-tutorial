<?php 
$a=10;
$b=20;

// and, && operator
if($a==10 && $b==20){
    echo "Logical &&";
}
if($a==10 and $b==20){
    echo "Logical and";
}

// or, || operator
if($a==10 || $b==20){
    echo "Logical ||";
}
if($a==10 or $b==20){
    echo "Logical or";
}

// xor operator
if($a == 10 xor $b == 10){
    echo "from both expr only one must be true";
}

// ! operator
if($a != 20){
    echo "not operator";
}
?>