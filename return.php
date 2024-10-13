<?php 

function userName($name = "kismis", $color = "yellow"){
    return "<p style='color:$color'>Hi my name is  $name</p>";
}

echo userName("prem", "red");
echo userName("mita", "brown");
echo userName("payu", "purple");
echo userName("rudr", "black");
echo userName("sums", "wheat");
echo userName("darj", "green");
echo userName();

?>