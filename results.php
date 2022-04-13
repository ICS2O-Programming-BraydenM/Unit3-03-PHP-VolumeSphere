<?php
// get the base and height from the textfields
$side_a = $_POST['side-a'];
$side_b = $_POST['side-b'];
$height = $_POST['height'];

// calculate the area
$area = ($side_a + $side_b) * $height / 2;
?>

The area of the trapezoid is <?php echo "$area"; ?> cm<sup>2</sup>.