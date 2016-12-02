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
        <h2 class="title">= TopApps Landing =</h2>
        <div class="value-props row">
          <div class="four columns value-prop">
            <a href="./random.php" style='color: black; text-decoration: none'><img class="value-img" src="images/home_ran.svg">
            View a Random Application</a>
          </div>
          <div class="four columns value-prop">
            <a href="./query.php" style='color: black; text-decoration: none'><img class="value-img" src="images/home_all.svg">
            List Applications</a>
          </div>
          <div class="four columns value-prop">
            <a href="./submit.php" style='color: black; text-decoration: none'><img class="value-img" src="images/home_add.svg">
            Add New Application</a>
          </div>
        </div>
      </section>
      <div class="navbar-spacer"></div>
<?php
include_once 'globals/footer.php';
?>
