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
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index2/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index2/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index2/favicon-16x16.png">
    <link rel="manifest" href="./fav_index2/site.webmanifest">

    <!--Padding-->
    <main style="padding-left: 20px; padding-right: 20px;">

    <!--Stylesheet-->
      <link rel="stylesheet" href="./css/style.css">

    <!--MDL theme-->
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-pink.min.css" />

    <!--Title-->
      <title>Calculating the Area and Perimeter of a Semicircle</title>
  </head>
  <body>

    <!--Text-->
    <h1>Calculating the Area and Perimeter of a Semicircle in PHP</h1>
    <p>Welcome! This webpage calculates the area and perimeter of a semicircle. If you're unsure on how to calculate the area or perimeter of a semicircle, then you can just enter your values below and my webpage will calculate it for you! In the image below you can also see the formula for this calculation.</p>

    <!--Image-->
    <center>
      <img src="./images/formulaOfAreaAndPreimeterSemicircle.png" width="300" length="300" alt="Formula for the area and perimeter of semicircle">
    </center>

    <!--Form for user input-->
    <center>
      <h3>Please enter your input below:</h3>
      <form action="./calculations.php" method="post" target="display-result">
        <label for="radius">Raduis (cm):</label>
        <input type="float" name="radius" placeholder="Input your radius here...">
        <br>
        <br>

    <!--Accent-colored raised button with ripple-->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
          Calculate
        </button>
      </form>
    </center>

    <!--Iframe to display results-->
    <iframe id="display-result" name="display-result"></iframe>

    <!--Slider with Starting Value-->
    <br>
    <br>
    <center>
      <h5>Please leave me feedback by adjusting the slider on how helpful you found this calculation webpage.</h5>
    </center>
    <br>

    <!--MDL Slider with Starting Value-->
    <input class="mdl-slider mdl-js-slider" type="range" min="0" max="100" value="25" tabindex="0">
  </body>
</html>