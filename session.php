<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="enter username">
        <br>
        <br>
        <button type="button" value="set">Set Session</button>
        <br>
        <br>
        <button type="button" value="get">Get Session</button>
        <br>
        <br>
        <button type="button" value="delete">Delete Session</button>
    </form>
</body>
</html>
<?php
session_start();
if(isset($_POST['button'])){
    if($_POST['button'] == "set"){
        $val = $_POST['user'];
        $_SESSION['user'] = $val;
    }
    if($_POST['button'] == 'get'){
        echo $_SESSION['user'];
    }
    if($_POST['button'] == 'delete'){
        session_destroy();
    }
}
?>