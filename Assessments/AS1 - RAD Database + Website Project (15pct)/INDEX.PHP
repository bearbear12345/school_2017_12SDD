<?php
/* * * * * * * * * * * * * * * * * * * * * * * * *
 * Filename: index.php                           *
 * Andrew Wong 2016                              *
 * http://github.com/bearbear12345/school_sdd_db *
 * * * * * * * * * * * * * * * * * * * * * * * * */
$pageTitle = "TopApps | Home";
include_once 'globals/header.php';
?>
      <section class="header">
        <h1 style="margin-bottom: 10%">= TopApps Landing =</h1>
        <div class="value-props row">
          <div class="four columns value-prop">
            <h5><a href="./random.php" style='color: black; text-decoration: none'><img class="value-img" src="images/home_ran.svg">
            View a Random Application</a></h5>
          </div>
          <div class="four columns value-prop">
            <h3><a href="./query.php" style='color: black; text-decoration: none'><img style="width: 100px" class="value-img" src="images/home_all.svg">
            List Applications</a></h3>
          </div>
          <div class="four columns value-prop">
            <h5><a href="./submit.php" style='color: black; text-decoration: none'><img class="value-img" src="images/home_add.svg">
            Add New Application</a></h5>
          </div>
        </div>
      </section>
      <div class="navbar-spacer"></div>
<?php
include_once 'globals/footer.php';
?>
