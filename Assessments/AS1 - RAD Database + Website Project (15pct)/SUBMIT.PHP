<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * *
 * Filename: submit.php                            *
 * Andrew Wong 2016                                *
 * http://github.com/bearbear12345/school_sdd_db   *
 * * * * * * * * * * * * * * * * * * * * * * * * * */
// START OPTIONS
$pageElevator   = false;
$pageNavigation = true;
$pageTitle      = "TopApps";

// END OPTIONS
include_once 'globals/header.php';
include_once "lib/dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputName        = filter_input(INPUT_POST, 'inputName', FILTER_SANITIZE_URL);
    $inputPublisher   = filter_input(INPUT_POST, 'inputPublisher', FILTER_SANITIZE_URL);
    $inputCategory    = filter_input(INPUT_POST, 'inputCategory', FILTER_SANITIZE_URL);
    $inputWebsite     = filter_input(INPUT_POST, 'inputWebsite', FILTER_SANITIZE_URL);
    $inputDescription = filter_input(INPUT_POST, 'inputDescription', FILTER_SANITIZE_URL);
    
    $sql      = "SELECT * FROM `applicationdb`";
    $s        = mysql_query($sql, $db);
    $num_rows = mysql_num_rows($s);
    $aid      = $num_rows + 1;

    $sql      = "INSERT INTO `applicationdb` (`AID`, `Product Name`, `Publisher`, `Description`, `Product Link`, `Category`) VALUES ($aid, '$inputName', '$inputPublisher', '$inputDescription', '$inputWebsite', $inputCategory)";
    $t        = mysql_query($sql, $db);
    
    header("Location: query.php?aid=$aid");
}

?>


<!-- The above form looks like this -->
<form action="submit.php" method="post">
  <div class="row">
    <div class="six columns">
      <label for="inputName">Product Name</label>
      <input required class="u-full-width" type="text" placeholder="Cool Application" id="inputName" name="inputName">
    </div>
    <div class="six columns">
      <label for="inputPublisher">Publisher</label>
      <input required class="u-full-width" type="text" placeholder="Cool Developer" id="inputPublisher" name="inputPublisher">
    </div>
  </div>
  <div class="row">
    <label for="inputCategory">Category</label>
    <select required class="u-full-width" id="inputCategory" name="inputCategory">
    <option disabled selected value>- select a category -</option>
      <?php
$sql = "SELECT `categoryid`, `categoryname` FROM  `categorydb`";
$s   = mysql_query($sql, $db);
while ($record = @mysql_fetch_array($s)) {
    echo "<option value='{$record['categoryid']}'>{$record['categoryname']}</option>\n";
}
?>
    </select>
  </div>
  <div class="row">
    <label for="inputWebsite">Website</label>
    <input required class="u-full-width" type="url" placeholder="http://coolsite.com/coolapplication" id="inputWebsite" name="inputWebsite">
  </div>
  <div class="row">
    <label for="inputDescription">Description</label>
    <textarea required class="u-full-width" placeholder="Cool application description. This app does cool stuff" id="inputDescription" name="inputDescription"></textarea>
  </div>
  <input class="button-primary" type="submit" value="Submit">
</form>

<?php
include_once 'globals/footer.php';
?>
