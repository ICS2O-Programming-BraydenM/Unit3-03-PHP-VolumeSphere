<!DOCTYPE html>
<html>
  <head>
<!-- metadata -->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Brayden MacMillan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- To use Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.bluegreen.min.css">
    <title>Volume of a Sphere in PHP</title>
  </head>
  <body>
    <center>
      <?php
      echo "<h1>Volume of a Sphere in PHP</h1>";
       ?>
    <p>
      <?php 
      echo "<h3>Enter the dimensions of your sphere:</h3>";
      ?>
      <form action="./results.php" method="post" target="results">
        <label for="Side-a">Side a (cm):</label>
        <input type="number" step="any" name="side-a" placeholder="Side A"><br><br>
        <label for="side-b">Side b (cm):</label>
        <input type="number" step="any" name="side-b" placeholder="Side B"><br><br>
        <label for="Height">Height (cm):</label>
        <input type="number" step="any" name="height" placeholder="Height"><br><br>
        <input type="submit" value="Calculate Area">
      </form>
    </p>
		<!-- Create a space where the user information will be displayed -->
<iframe id="results" name="results"></iframe

<!-- Adding an image -->
      <img src="./images/sphere3.png" alt="Sphere" width="500" length="500">
      
<!-- Slider with Starting Value -->
			<?php
      echo "<h4>How much do you like math?</h4>";
       ?>
			<input class="mdl-slider mdl-js-slider" type="range" min="0" max="100" value="25" tabindex="0">

    </center>
  </body>
</html>