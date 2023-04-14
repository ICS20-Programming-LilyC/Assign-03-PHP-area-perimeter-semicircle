<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Meta data-->
    <meta charset="utf-8">
    <meta name="description" content="Area and Perimeter of a Semicircle Webpage">
    <meta name="author" content="Lily Carroll">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon.png" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">

    <!--Stylesheet-->
    <link rel="stylesheet" href="./css/style.css">

    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-pink.min.css" />

    <!--Title-->
    <title>Calculating the Area and Perimeter of a Semicircle</title>
  </head>
  <body>

    <!--Webpage header-->
    <h1>Calculating the Area and Perimeter of a Semicircle in PHP</h1>

    <!--Webpage text-->
    <p>Welcome! This webpage calculates the area and perimeter of a semicircle. If you're unsure on how to calculate the area or perimeter of a semicircle, then you can just enter your values below and my webpage will calculate it for you! In the image below you can also see the formula for this calculation.</p>

    <!--Image-->
    <div style="text-align:center;">
      <img src="./images/formulaOfAreaAndPreimeterSemicircle.png" width="300" height="300" alt="Formula for the area and perimeter of semicircle">
    </div>

    <!--Question for user-->
    <div style="text-align:center;">
      <h5>Do you enjoy calculating the area and perimeter of different shapes?</h5>

    <!--MDl radio button (on)-->
      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
        <span class="mdl-radio__label">Yes</span>
      </label>

    <!--MDL radio button (off)-->
      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
        <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
        <span class="mdl-radio__label">No</span>
      </label>

    <!--Form for user input-->
      <div class="center">
        <h3>Please enter your input below:</h3>
        <form action="./calculations.php" method="post" target="display-result">
          <label for="radius">Radius (cm):</label>
          <input type="number" name="radius" placeholder="Input your radius here...">
      <br>
      <br>
          
    <!--Accent-colored raised button with ripple-->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            Calculate
          </button>
        </form>
      </div>

    <!--Iframe to display results-->
      <iframe id="display-result" name="display-result"></iframe>

    <!--Slider with Starting Value-->
      <br>
      <br>
      <div class="center">
        <h5>Please leave me feedback by adjusting the slider on how helpful you found this calculation webpage.</h5>
      </div>
      <br>

    <!--MDL Slider with Starting Value-->
      <input class="mdl-slider mdl-js-slider" type="range" min="0" max="100" value="25" tabindex="0">
    </div>
  </body>
</html>