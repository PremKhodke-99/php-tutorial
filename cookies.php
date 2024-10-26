<?php 
setcookie("fruit", "apple", time() + (864000));
setcookie("color", "red", time() + (864000));
if(isset($_COOKIE["fruit"])){
    // print_r($_COOKIE["fruit"]);
    echo "cookie is " . $_COOKIE["fruit"] . "<br />";
}else{
    echo "no cookie";
}

if(isset($_COOKIE["color"])){
    // print_r($_COOKIE["fruit"]);
    echo "cookie is " . $_COOKIE["color"] . "<br />";
}else{
    echo "no cookie";
}


?>