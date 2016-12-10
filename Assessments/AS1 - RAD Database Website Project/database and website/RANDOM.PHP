<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Filename: random.php                                *
 * Andrew Wong 2016                                    *
 * https://github.com/bearbear12345/school_2017_12SDD  *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * */

/* Redirects browser to a random application listing */
include_once "lib/dbconnect.php";
$sql      = "SELECT * FROM `applicationdb`";
$s        = mysql_query($sql, $db);
$num_rows = mysql_num_rows($s);
header("Location: query.php?aid=" . mt_rand(1, $num_rows));
?>
