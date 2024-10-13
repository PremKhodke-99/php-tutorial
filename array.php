<?php
$users = array("peter", "bruce", "tony");
$usersy = ["peterwa", "brucy", "tonya"];

// echo "$users[0] $usersy[0] <br />";
// echo "$users[1] $usersy[1] <br />";
// echo "$users[2] $usersy[2] <br />";

for ($user = 0; $user < count($users); $user++) {
    echo "$users[$user] $usersy[$user] <br/>";
}

foreach ($usersy as $user) {
    echo "<h4>$user</h4>";
}

?>