<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/font-raleway.css">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">

    <link rel="icon" type="image/png" href="images/favicon.png">
    <?php 
    if ($pageElevator) {echo "<script src='js/elevator.min.js'></script>\n";}
    echo "    <title>$pageTitle</title>";
     ?>
  </head>
  <body>
    <div class="container"<?php if ($pageNavigation) echo ' style="margin-top: 6.5rem"';?>>
      <?php if ($pageNavigation) { echo
      '<nav class="navbar">
        <div class="container">
          <ul class="navbar-list">
            <li class="navbar-item"><a class="navbar-link" href=".">Home</a></li>
            <li class="navbar-item"><a class="navbar-link" href="#">Code</a></li>
            <li class="navbar-item"><a class="navbar-link" href="#examples">Examples</a></li>
            <li class="navbar-item"><a class="navbar-link" href="#">More</a></li>
          </ul>
        </div>
      </nav>';}?>
