<?php 

$age = 81;

if($age < 18){
    echo "Display kids content";
}else if($age > 80){
    echo "Don't watch TV";
}else {
    echo "Display adult content";
}

echo "<br /><br />";
#Switch statement
$color = "green";

switch($color){
    case "red":
        echo "red is fav color";
        break;
    case "green":
        echo "green is fav color";
        break;
    case "blue":
        echo "blue is fav color";
        break;
    default: "yellow is fav color";
}

?>