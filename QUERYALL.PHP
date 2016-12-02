<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * 
 * Filename: queryall.php                           *
 * Andrew Wong 2016                              *
 * http://github.com/bearbear12345/school_sdd_db *
 * * * * * * * * * * * * * * * * * * * * * * * * */
// START OPTIONS
   $pageElevator = true;
// END OPTIONS
include_once 'globals/header1.php'; ?>
MyBiz | Home<?php include_once 'globals/header2.php';?>
    <nav class="navbar">
      <div class="container">
        <ul class="navbar-list">
          <li class="navbar-item"><a class="navbar-link" href="#intro">Intro</a></li>
          <li class="navbar-item">
            <a class="navbar-link" href="#" data-popover="#codeNavPopover">Code</a>
            <div id="codeNavPopover" class="popover">
              <ul class="popover-list">
                <li class="popover-item">
                  <a class="popover-link" href="#grid">Grid</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#typography">Typography</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#buttons">Buttons</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#forms">Forms</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#lists">Lists</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#code">Code</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#tables">Tables</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#queries">Queries</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="#utilities">Utilities</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="navbar-item"><a class="navbar-link" href="#examples">Examples</a></li>
          <li class="navbar-item">
            <a class="navbar-link" href="#" data-popover="#moreNavPopover">More</a>
            <div id="moreNavPopover" class="popover">
              <ul class="popover-list">
                <li class="popover-item">
                  <a class="popover-link" href="https://github.com/dhg/Skeleton">On Github</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="https://github.com/dhg/Skeleton#browser-support">Browsers</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="https://github.com/dhg/Skeleton#license">License</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="https://github.com/dhg/Skeleton#extensions">Extensions</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="https://github.com/dhg/Skeleton/releases">Versions</a>
                </li>
                <li class="popover-item">
                  <a class="popover-link" href="https://github.com/dhg/Skeleton#colophon">Colophon</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
<?
include_once "lib/dbconnect.php";
$sql = "SELECT * FROM `clients`";
$s   = mysql_query($sql, $db);
$record = mysql_fetch_array($s);
echo "<table class='u-full-width'>";
echo preg_replace("/\s+?(<)/", "$1", "
<thead>
  <tr>
    <th>Prefix</td>
    <th>First Name</th>
    <th>Surname</th>
    <th>Email Address</th>
    <th>Phone Number</th>
    <th>Gender</th>
  </tr>
</thead>\n
<tbody>");
while ($record = mysql_fetch_array($s)) {
    $firstname = $record['first_name'];
    $lastname  = $record['last_name'];
    $title     = $record['title'];
    $email     = $record['email'];
    $phone     = $record['phone'];
    $gender    = $record['gender'];
    echo "<tr><td>$title</td><td>$firstname</td><td>$lastname</td><td>$email</td><td>$phone</td><td>$gender</td></tr>\n";
}
echo "</tbody></table>";
include_once 'globals/footer.php';
?>