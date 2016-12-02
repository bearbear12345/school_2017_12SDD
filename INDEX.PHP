<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * 
 * Filename: index.php                           *
 * Andrew Wong 2016                              *
 * http://github.com/bearbear12345/school_sdd_db *
 * * * * * * * * * * * * * * * * * * * * * * * * */
 $pageTitle = "TopApps | Home";
include_once 'globals/header.php'; ?>
      <section class="header">
        <h2 class="title">= TopApps Landing =</h2>
        <div class="value-props row">
          <div class="four columns value-prop">
            <a href="query.php"><img class="value-img" src="images/feather.svg">
            View a Random Application</a>
          </div>
          <div class="three columns value-prop">
            <img class="value-img" src="images/pens.svg">
            List Applications
          </div>
          <div class="four columns value-prop">
            <img class="value-img" src="images/watch.svg">
            Add New Application
          </div>
        </div>
      </section>
      <div class="navbar-spacer"></div>
<?php include_once 'globals/footer.php'; ?>