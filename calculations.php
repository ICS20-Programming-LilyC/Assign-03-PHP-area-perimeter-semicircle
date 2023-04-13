<?php
  // Get the user input
  $radiusOfSemicircle = floatval($_POST["radius"]);

  // Calculate the area
  $area = 1 / 2 * pi() * $radiusOfSemicircle ** 2;
  $areaRounded = round($area, 2);

  // Calculate the perimeter
  $diameter = $radiusOfSemicircle * 2;
  $perimeter = pi() * $radiusOfSemicircle + $diameter;
  $perimeterRounded = round($perimeter, 2);
?>

<h3>Calculation results:</h3>
The area of the semicircle is 
<?php echo "$areaRounded" . " cm²" ?> 
and the perimeter would be 
<?php echo "$perimeterRounded". " cm" ?>
