<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Meta data-->
    <meta charset="utf-8">
    <meta name="description" content="Area and Preimeter of a Semicircle Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily Carroll">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">

    <!--Stylesheet-->
    <link rel="stylesheet" href="./css/style.css">

    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-pink.min.css" />

    <!--Title-->
    <title>Area and Perimete of a Semicircle</title>
  </head>
  <body>

    <!--Text-->
     <h1>Calculating the Area and Perimeter of a Semicircle in PHP</h1>
    <p>elcome! This webpage calculates the area and perimeter of a semicircle. If you're unsure on how to calculate the area or perimeter of a semicircle, then you can just enter your values below and my webpage will calculate it for you! In the image below you can also see the formula for this calculation.</h3>

    <!--Image-->
    <center>
      <img src="./images/semicircleAreaPreimeterFormula.png" width="300" length="300" alt="Formula for the area and perimeter of semicircle">
    </center>

    <!--Form for user input-->
      <center>
      <form action="./calculations.php" method="post" target="display-result">
        <label for="radius">Raduis (cm):</label>
        <input type="float" name="radius" placeholder="Input your radius here...">
        <br>
        <br>
        
    <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
          Calculate
        </button>
      </form>
      </center>

    <!--Iframe to display results-->
    <iframe id="display-result" name="display-result"></iframe>
  </body>
</html>