<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Filename: dbconnect.php                             *
 * Andrew Wong 2016                                    *
 * https://github.com/bearbear12345/school_2017_12SDD  *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * */
$db_server = "localhost"; // Connect to server at localhost:3306
$db_username = "andreww"; // Login as user "andreww"
$db_password = "andrew";  // Authenticate with password "andrew"
$db_database = "andreww"; // Open database "andreww"

$db = mysql_connect($db_server, $db_username, $db_password);
mysql_select_db($db_database)
?>