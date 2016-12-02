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
$sql = "SELECT * FROM `clients`";
$s   = mysql_query($sql, $db);
$record = mysql_fetch_array($s);
echo "\n      <table class='u-full-width'>";
echo "
        <thead><tr><th>Prefix</td><th>First Name</th><th>Surname</th><th>Email Address</th><th>Phone Number</th><th>Gender</th></tr></thead>
        <tbody>\n";
while ($record = mysql_fetch_array($s)) {
    $firstname = $record['first_name'];
    $lastname  = $record['last_name'];
    $title     = $record['title'];
    $email     = $record['email'];
    $phone     = $record['phone'];
    $gender    = $record['gender'];
    echo "          <tr><td>$title</td><td>$firstname</td><td>$lastname</td><td>$email</td><td>$phone</td><td>$gender</td></tr>\n";
}
echo "        </tbody>\n      </table>";

include_once 'globals/footer.php';
?>