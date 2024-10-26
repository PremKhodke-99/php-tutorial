<?php 
// print_r($_POST);

if(isset($_POST["name"])){
    echo "username is ". $_POST['name'] ."</br>";
    echo "email is ". $_POST['email'] ."</br>";
    echo "password is ". $_POST['password'] ."</br>";
    echo "skills are ". implode(", ", $_POST['skills'] )."</br>";
    echo "gender is ". $_POST['gender']  ."</br>";
    echo "city is ". $_POST['city']  ."</br>";
    echo "bio is ". $_POST['bio'] ."</br>";
}
?>