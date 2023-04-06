<?php
  //Get the user input
  $radiusOfSemicircle = floatval($_POST["radius"]);

  //Calculate the area
  $area = 1 / 2 * pi() * radiusOfSemicircle ** 2;
  $roundedArea = round($area, 2);

//Calculate the perimeter 


?>

<h3>Results:</h3>
The converted temperature from fahrenheit to celsius is <?php echo "$roundedCelsius" ?> C°.