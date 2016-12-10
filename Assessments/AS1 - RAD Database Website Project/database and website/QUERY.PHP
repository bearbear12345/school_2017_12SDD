<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Filename: query.php                                 *
 * Andrew Wong 2016                                    *
 * https://github.com/bearbear12345/school_2017_12SDD  *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * */

// START OPTIONS
$pageElevator   = isset($_GET['aid']) ? false : true;
$pageNavigation = true;
$pageTitle      = "TopApps";
// END OPTIONS

include_once 'globals/header.php';
include_once 'lib/dbconnect.php';

/* Show entire application database */
if (!isset($_GET['aid'])) {
    
    echo "      <script src='js/list.min.js'></script>\n      <script src='js/list.fuzzysearch.min.js'></script>\n";
    
    /* Handle record sorting */
    $order = "";
    if (isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        if (preg_match('/^(?:n|p|c)(?:a|d)sc$/', strtolower($sort))) {
            /* Check which column we are sorting by */
            switch ($sort[0]):
                case "n":
                    $sortsubject = "Product Name";
                    break;
                case "p":
                    $sortsubject = "Publisher";
                    break;
                case "c":
                    $sortsubject = "Category";
                    break;
            endswitch;

            /* Check sort direction */
            switch ($sort[1]):
                case "a":
                    $sortdirection = "ASC";
                    break;
                case "d":
                    $sortdirection = "DESC";
                    break;
            endswitch;
            $order = " ORDER BY `$sortsubject` $sortdirection";
        }
    }
    $sql_category = isset($_GET['cat']) ? " AND applicationdb.Category = " . $_GET['cat'] : ""; // Set category filter if present
    
    $sql = "SELECT `AID`, `Product Name`, `Publisher`, `Description`, `Product Link`, `CategoryID`, `CategoryName` FROM `applicationdb`, `categorydb` where applicationdb.Category = categorydb.categoryid" . $sql_category . $order;
    $s   = mysql_query($sql, $db);
    if ($sql_category) echo "      <h4>Viewing applications in " . mysql_fetch_array($s)['CategoryName'] . "</h4>\n";
    
    echo "      <input id='searchFilter' type='text' class='u-full-width fuzzy-search' placeholder='Search'/>\n";
    
    echo "      <table id='querytable' class='u-full-width'>";
    echo "
        <thead><tr><th><span id='headername'>Product Name</span></td><th><span id='headerpublisher'>Publisher</span></th><th>Description</th><th>Product Website</th>" . (!isset($_GET['cat']) ? "<th><span id='headercategory'>Category</span></th>" : "") . "</tr></thead>
        <tbody class='list'>\n";
    while ($record = @mysql_fetch_array($s)) {
        /* Extract data from record */
        $appiden = $record['AID'];
        $appname = $record['Product Name'];
        $apppubl = $record['Publisher'];
        $appdesc = $record['Description'];
        $appsite = $record['Product Link'];
        $appcate = $record['CategoryName'];
        $appcati = $record['CategoryID'];
        
        /* Format data */
        $_apppubl = substr($apppubl, 0, 20) . "...";
        $_appsite = preg_replace('/.*?:\/\/(?:www.)?(.+?)\/?$/', '${1}', $appsite);
        $_appsite = strlen($_appsite) > 29 ? substr($_appsite, 0, 26) . "..." : $_appsite;
        $_appdesc = strlen($appdesc) > 200 ? substr($appdesc, 0, 200) . "..." : $appdesc;
        
        echo "          <tr onclick='window.location.search=\"aid=$appiden\"'><td class='searchName'>$appname</td><td class='searchPublisher'>$apppubl</td><td>$_appdesc</td><td><a href='$appsite'>$_appsite</a></td>" . (!isset($_GET['cat']) ? "<td class='searchCategory'><a href='query.php?cat=$appcati'>$appcate</a></td>" : "") . "</tr>\n";
    }
    echo "        </tbody>\n      </table>\n      <script src='js/site.js'></script>\n";
} else {
    /* Specific application */
    $aid = str_replace("'", "\'", $_GET['aid']);
    $sql = "SELECT `Product Name`, `Publisher`, `Description`, `Product Link`, `CategoryID`, `CategoryName` FROM `applicationdb`, `categorydb` where applicationdb.Category = categorydb.categoryid AND applicationdb.aid = $aid";
    $s   = mysql_query($sql, $db);
    
    if (!mysql_num_rows($s))
        header("Location: query.php"); // Check that the application id exists, else redirect to the entire listing
    $record = mysql_fetch_array($s);
    
    /* Extract data from record */
    $appname = $record['Product Name'];
    $apppubl = $record['Publisher'];
    $appdesc = str_replace("\n", "</br>", $record['Description']);
    $appsite = $record['Product Link'];
    $appcate = $record['CategoryName'];
    $appcati = $record['CategoryID'];
    
    echo "      <h1>$appname</h1>\n      <h5>Publisher: $apppubl</br>\n      Product Link: <a href='$appsite'>" . preg_replace('/.*?:\/\/(?:www.)?(.+?)\/?$/', '${1}', $appsite) . "</a></br>\n      Category: <a href='./query.php?cat=$appcati'>$appcate</a></h5>\n      $appdesc</br>\n      </br>\n      <i><a href='./manage.php?aid=$aid'>[Edit Information]</a></i>\n";
}

include_once 'globals/footer.php';
?>
