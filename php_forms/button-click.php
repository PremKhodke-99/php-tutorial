<!DOCTYPE html>
<html lang="en">

<head>
    <title>Call php function</title>
</head>

<body>
    <form action="" method="post">
        <button name="button" value="btn1">Call Function</button>
    </form>
</body>

</html>
<?php
if (isset($_POST['button'])) {
    btn_clicked_test();
}
function btn_clicked_test()
{
    echo "function called on button click";
}
?>