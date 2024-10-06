<?php 
$h2_color = "blue";
echo "<h1 style='color: green'>php with html</h1>";
?>

<?php 
$name = "Prem Khodke";
echo "<h1 style='color: orange'>$name</h1>";
?>

<h2 style="color: red">
    My name is <?php echo $name ?>
</h2>

<h2 style="color: <?php echo $h2_color?>">
    My name is <?php echo $name ?>
</h2>
<h2 style="color: <?php echo $h2_color?>">
    My name is <?php echo $name ?>
</h2>