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
    if (@$pageElevator) {echo "<script src='js/elevator.min.js'></script>\n";}
    echo "<title>$pageTitle</title>\n";
    ?>
  </head>
  <body>
    <div class="container" id="content">
      <?php if (@$pageNavigation) { echo
      "<nav id='navbar'>
        <div class='container'>
          <ul>
            <li><a href='.'>Home</a></li>
            <li><a href='query.php'>View All</a></li>
            <li><a href='random.php'>View Random</a></li>
            <li><a href='manage.php'>Add App</a></li>
          </ul>
        </div>
      </nav>\n";}?>
