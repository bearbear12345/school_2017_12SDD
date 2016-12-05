<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Filename: submit.php                                *
 * Andrew Wong 2016                                    *
 * https://github.com/bearbear12345/school_2017_12SDD  *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * */

// START OPTIONS
$pageElevator   = false;
$pageNavigation = true;
$pageTitle      = "TopApps";
// END OPTIONS

include_once 'globals/header.php';
include_once "lib/dbconnect.php";

/* Handle form submits by adding or editing the data in the SQL database */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    /* Extract variable data from the URL */
    $inputName        = str_replace("'", "\'", $_POST['inputName']);
    $inputPublisher   = str_replace("'", "\'", $_POST['inputPublisher']);
    $inputCategory    = str_replace("'", "\'", $_POST['inputCategory']);
    $inputWebsite     = str_replace("'", "\'", $_POST['inputWebsite']);
    $inputDescription = str_replace("'", "\'", $_POST['inputDescription']);
    $aid = str_replace("'", "\'", $_POST['aid']);

    if ($aid) {
        // if $aid is present, then the data is for an application edit
        $sql = "UPDATE `applicationdb` SET `Product Name` = '$inputName', `Publisher` = '$inputPublisher', `Description` = '$inputDescription', `Product Link` = '$inputWebsite', `Category` = $inputCategory WHERE `aid` = $aid";
    } else {
        // if $aid doesn't exist, then the data is for a new application
        $aid = mysql_num_rows(mysql_query("SELECT * FROM `applicationdb`", $db)) + 1; // Get next application ID
        $sql = "INSERT INTO `applicationdb` (`AID`, `Product Name`, `Publisher`, `Description`, `Product Link`, `Category`) VALUES ($aid, '$inputName', '$inputPublisher', '$inputDescription', '$inputWebsite', $inputCategory)";
        
    }
    $s = mysql_query($sql, $db); // Execute query
    header("Location: query.php?aid=$aid"); // Redirect to application page
}


//////////////////////////////////////////////////////////////////////////


/* Get existing information for information editing */
if (isset($_GET['aid'])) {
    $aid = str_replace("'", "\'", $_GET['aid']);
    $sql = "SELECT `Product Name`, `Publisher`, `Description`, `Product Link`, `CategoryID`, `CategoryName` FROM `applicationdb`, `categorydb` where applicationdb.Category = categorydb.categoryid AND applicationdb.aid = $aid";
    $s   = mysql_query($sql, $db);
    if (!mysql_num_rows($s)) header("Location: query.php"); // Check that the application id exists, else redirect to the entire listing
    $record = mysql_fetch_array($s);
    
    /* Extract data from record */
    $appname = $record['Product Name'];
    $apppubl = $record['Publisher'];
    $appdesc = $record['Description'];
    $appsite = $record['Product Link'];
    $appcate = $record['CategoryName'];
    $appcati = $record['CategoryID'];
    
    /* Generate form metadata for editing */
    $dataname = "value='$appname' placeholder='$appname'";
    $datapubl = "value='$apppubl' placeholder='$apppubl'";
    $datasite = "value='$appsite' placeholder='$appsite'";
    $datadesc = "placeholder='$appdesc'";
    
} else {
    
    /* Generate form metadata for adding a new entry */
    $dataname = 'placeholder="Cool Application"';
    $datapubl = 'placeholder="Cool Developer"';
    $datasite = 'placeholder="http://coolsite.com/coolapplication"';
    $datadesc = 'placeholder="Cool application description. This app does cool stuff"';
}
?>
      <form method="post">
        <div class="row">
          <div class="six columns">
            <label for="inputName">Product Name</label>
            <input required class="u-full-width" type="text" <?php echo $dataname;?> id="inputName" name="inputName">
          </div>
          <div class="six columns">
            <label for="inputPublisher">Publisher</label>
            <input required class="u-full-width" type="text" <?php echo $datapubl; ?> id="inputPublisher" name="inputPublisher">
          </div>
        </div>
        <div class="row">
          <label for="inputCategory">Category</label>
          <select required class="u-full-width" id="inputCategory" name="inputCategory"><?php
if (!isset($_GET['aid']))
    echo "<option disabled selected value>- select a category -</option>";
$sql = "SELECT `categoryid`, `categoryname` FROM  `categorydb`";
$s   = mysql_query($sql, $db);
while ($record = @mysql_fetch_array($s)) {
    echo "\n            <option value='{$record['categoryid']}'" . (@$appcati == $record['categoryid'] ? " selected" : "") . ">{$record['categoryname']}</option>";
}
?>

          </select>
        </div>
        <div class="row">
          <label for="inputWebsite">Website</label>
          <input required class="u-full-width" type="url" <?php echo $datasite; ?> id="inputWebsite" name="inputWebsite">
        </div>
        <div class="row">
          <label for="inputDescription">Description</label>
          <textarea required class="u-full-width" <?php echo $datadesc; ?> id="inputDescription" name="inputDescription"><?php if(isset($appdesc)) echo $appdesc;?></textarea>
        </div>
        <input class="button-primary" type="submit" value="<?php echo isset($_GET['aid']) ? "Edit" : "Submit"; ?>">
      <?php if (isset($_GET['aid'])) echo "  <input type='hidden' name='aid' value='" . $aid . "'>\n      ";?>
</form>
      <script type="text/javascript">((o = document.getElementById('inputDescription')).onkeyup = function() {o.style.height = "1px"; o.style.height = (25 + o.scrollHeight) + "px"})(); // Adjust text box height dynamically to the amount content</script>
<?php
include_once 'globals/footer.php';
?>