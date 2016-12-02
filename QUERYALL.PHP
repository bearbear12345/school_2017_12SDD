<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * 
 * Filename: queryall.php                           *
 * Andrew Wong 2016                              *
 * http://github.com/bearbear12345/school_sdd_db *
 * * * * * * * * * * * * * * * * * * * * * * * * */
// START OPTIONS
   $pageElevator = true;
   $pageNavigation = true;
   $pageTitle = "MyBiz | Home";

// END OPTIONS
include_once 'globals/header.php';?>

<?php
include_once "lib/dbconnect.php";
$sql = "SELECT * FROM `applicationdb`";
$s   = mysql_query($sql, $db);
$record = mysql_fetch_array($s);
echo "\n      <table class='u-full-width'>";
echo "
        <thead><tr><th>Product Name</td><th>Publisher</th><th>Description</th><th>Product Website</th><th>Category</th></tr></thead>
        <tbody>\n";
while ($record = mysql_fetch_array($s)) {
    $appname = $record['Product Name'];
    $apppubl = $record['Publisher'];
    $appdesc = $record['Description'];
    $appsite = $record['Product Link'];
    $appcate = $record['Category'];
    $_apppubl = substr($apppubl,0,20)."...";
    $_appsite = substr($appsite,0,20)."...";
    $_appdesc = substr($appdesc,0,20)."...";
    echo "          <tr><td>$appname</td><td>$_apppubl</td><td>$_appdesc</td><td><a href='$appsite'>$_appsite</a></td><td>$appcate</td></tr>\n";
}
echo "        </tbody>\n      </table>";

include_once 'globals/footer.php';
?>