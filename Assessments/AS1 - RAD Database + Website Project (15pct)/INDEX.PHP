<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Filename: index.php                                 *
 * Andrew Wong 2016                                    *
 * https://github.com/bearbear12345/school_2017_12SDD  *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * */
$pageTitle = "TopApps | Home";
include_once 'globals/header.php';
?>
<div id="indexheader">
        <h1 style="margin-bottom: 10%">= TopApps Landing =</h1>
        <div class="value-props row">
          <div class="four columns value-prop">
            <h4><a href="random.php"><img class="value-img" src="images/home_ran.svg">
            View a Random Application</a></h4>
          </div>
          <div class="four columns value-prop">
            <h3><a href="query.php"><img style="width: 100px" class="value-img" src="images/home_all.svg">
            List Applications</a></h3>
          </div>
          <div class="four columns value-prop">
            <h4><a href="manage.php"><img class="value-img" src="images/home_add.svg">
            Add New Application</a></h4>
          </div>
        </div>
      </div>
<?php
include_once 'globals/footer.php';
?>
