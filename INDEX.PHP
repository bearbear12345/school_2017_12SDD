<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * 
 * Filename: index.php                           *
 * Andrew Wong 2016                              *
 * http://github.com/bearbear12345/school_sdd_db *
 * * * * * * * * * * * * * * * * * * * * * * * * */
include_once 'globals/header1.php'; ?>
MyBiz | Home<?php include_once 'globals/header2.php'; ?>
      <section class="header">
        <h2 class="title">= MyBiz Landing =</h2>
        <div class="value-props row">
          <div class="four columns value-prop">
            <a href="queryall.php"><img class="value-img" src="images/feather.svg">
            Light as a feather at ~400 lines &amp; built with mobile in mind.</a>
          </div>
          <div class="four columns value-prop">
            <img class="value-img" src="images/pens.svg">
            Styles designed to be a starting point, not a UI framework.
          </div>
          <div class="four columns value-prop">
            <img class="value-img" src="images/watch.svg">
            Quick to start with zero compiling or installing necessary.
          </div>
        </div>
      </section>
      <div class="navbar-spacer"></div>
<?php include_once 'globals/footer.php'; ?>