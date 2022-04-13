<?php
// get the length of radius of sphere from the textfields
$radius = $_POST['radius'];

// calculate the area
$volume = $radius ** 3 * (4/3) * pi();
$volume_rounded = number_format($volume, 2);
?>

The volume of the sphere is <?php echo "$volume_rounded"; ?> cm<sup>3</sup>.