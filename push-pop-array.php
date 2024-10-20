<?php 
    $users = ["cat", "otter", "owl", "seal"];
    print_r($users);

    array_push($users,"dog", "torty", "parrot");
    print_r($users);

    array_pop($users);
    print_r($users);

    array_splice($users, -2);
    print_r($users);
    
?>