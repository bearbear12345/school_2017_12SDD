<?php
/* * * * * * * * * * * * * * * * * * * * * * * * *
 * Filename: query.php                           *
 * Andrew Wong 2016                              *
 * http://github.com/bearbear12345/school_sdd_db *
 * * * * * * * * * * * * * * * * * * * * * * * * */
// START OPTIONS
$pageElevator   = false;
$pageNavigation = true;
$pageTitle      = "TopApps";

// END OPTIONS
include_once 'globals/header.php';
?>


<!-- The above form looks like this -->
<form>
  <div class="row">
    <div class="six columns">
      <label for="inputName">Product Name</label>
      <input class="u-full-width" type="text" placeholder="Cool Application" id="inputName">
    </div>
    <div class="six columns">
      <label for="inputPublisher">Publisher</label>
      <input class="u-full-width" type="text" placeholder="Cool Developer" id="inputPublisher">
    </div>
  </div>
  <div class="row">
    <label for="inputCategory">Category</label>
    <select class="u-full-width" id="inputCategory">
      <?php
include_once "lib/dbconnect.php";
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
    <input class="u-full-width" type="url" placeholder="http://coolsite.com/coolapplication" id="inputWebsite">
  </div>
  <div class="row">
    <label for="inputDescription">Description</label>
    <textarea class="u-full-width" placeholder="Cool application description. This app does cool stuff" id="inputDescription"></textarea>
  </div>
  <div class="row">
    <input class="u-full-width" type="file" value="Submit">
    <input class="button-primary" type="file" value="Submit">
  </div>
  <label class="example-send-yourself-copy">
    <input type="checkbox">
    <span class="label-body">View application page on submit</span>
  </label>
  <input class="button-primary" type="submit" value="Submit">
</form>

<!-- Always wrap checkbox and radio inputs in a label and use a <span class="label-body"> inside of it -->

<!-- Note: The class .u-full-width is just a utility class shorthand for width: 100% -->

<?php
include_once 'globals/footer.php';
?>
