<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Meta data-->
    <meta charset="utf-8">
    <meta name="description" content="Fahrenheit to Celsius Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily Carroll">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">

    <!--Stylesheet-->
    <link rel="stylesheet" href="./css/style.css">

    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-amber.min.css" />

    <!--Title-->
    <title>Calculating Fahrenheit to Celsius </title>
  </head>
  <body>
    <h1>Converting Fahrenheit to Celsius in PHP with User Input</h1>

    <!--Text-->
    <p>Welcome! This webpage will convert your temperature in Fahrenheit to Celsius with the input of your temperatures. In the image below you can see the formula for this calculation.</p>
    <h3>Please insert your input below:</h3>

    <!--Image-->
    <center>
    <img src="./images/fahrenheitToCelsiusFormula.webp" width="300" length="300" alt="Fahrenheit to Celsius Formula" >
    </center>
    <br>

    <!--Form for user input-->
      <center>
      <form action="./calculations.php" method="post" target="display-result">
        <label for="fahrenheit">Temperature in Fahrenheit:</label>
        <input type="float" name="fahrenheit" placeholder="°F...">
        <br>
        <br>
        <input type="submit" value="Calculate" button class="mdl-button mdl-js-button-mdl-button-raised-mdl-button-colored">
      </form>
      </center>

    <!--Iframe to display results-->
    <iframe id="display-result" name="display-result"></iframe>
  </body>
</html>