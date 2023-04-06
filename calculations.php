<?php
  //Get the user input
  $temp = floatval($_POST["fahrenheit"]);

  //Calculate the volume
  $celsius = 5/9* ($temp - 32);
  $roundedCelsius = round($celsius, 1);
?>

<h3>Results:</h3>
The converted temperature from fahrenheit to celsius is <?php echo "$roundedCelsius" ?> C°.