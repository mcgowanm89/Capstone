<?php
include('config.php');    //include of db config file
include ('paginate.php'); //include of paginat page
$per_page = 10;         // number of results to show per page
$result = mysql_query("SELECT * FROM opportunity");
$total_results = mysql_num_rows($result);
$total_pages = ceil($total_results / $per_page);//total pages we going to have
//-------------if page is setcheck------------------//
if (isset($_GET['page'])) {
    $show_page = $_GET['page']; //current page
    if ($show_page > 0 && $show_page <= $total_pages) {
        $start = ($show_page - 1) * $per_page;
        $end = $start + $per_page;
    } else {
        // error - show first set of results
        $start = 0;              
        $end = $per_page;
    }
} else {
    // if page isn't set, show first set of results
    $start = 0;
    $end = $per_page;
}
// display pagination
$page = intval($_GET['page']);
$tpages=$total_pages;
if ($page <= 0)
    $page = 1;
 
?> 

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />    
<title>Better Alamance Volunteers</title>
<link rel=stylesheet href="css/style.css">
</head>
    <body>
<header><img src="img/bap.png"></header>
<div class="searchForm">
<p>Search</p> 
<form name="input" action="search.php" method="post">

<fieldset>
<legend>Select Your Age Group:</legend>
	<input type="radio" name="Age Group" value="Under 18" /> Under 18
	<input type="radio" name="Age Group" value="18-54" /> 18-54
    <input type="radio" name="Age Group" value="55+" /> 55+
  </fieldset>
 <fieldset>   
<legend>Choose a Category:</legend>
<input type="radio" name="Category" value="Animals" /> Animals      
<input type="radio" name="Category" value="Arts/Culture" /> Arts and Culture
<input type="radio" name="Category" value="Community" /> Community 
<input type="radio" name="Category" value="Crisis Support" /> Crisis Support 
<input type="radio" name="Category" value="Environment" /> Environment <input type="radio" name="Category" value="Faith Based" /> Faith Based
<input type="radio" name="Category" value="People with Disabilities" /> People with Disabilities
<input type="radio" name="Category" value="Seniors" /> Seniors
<input type="radio" name="Category" value="Youth" /> Youth     
</fieldset>

<input type="submit" value="Submit" />   
</form>   
</div>    
<div class="db">   
    <?php
        $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
                   
        echo "<table class='table table-bordered'>";
        echo "<thead><tr><th>Organization</th> <th>Category</th> <th>Location</th> <th>Time</th> <th>Age Group</th> <th>Description</th></tr></thead>";
                   
        for ($i = $start; $i < $end; $i++) {
                       
        if ($i == $total_results) {
                            break;
                        }
                      
        echo "<tr " . $cls . ">";
        echo '<td>' . mysql_result($result, $i, 'Organization') . '</td>';
        echo '<td>' . mysql_result($result, $i, 'Category') . '</td>';
        echo '<td>' . mysql_result($result, $i, 'Location') . '</td>';
        echo '<td>' . mysql_result($result, $i, 'Time') . '</td>';
        echo '<td>' . mysql_result($result, $i, 'Age Group') . '</td>';    
        echo '<td>' . mysql_result($result, $i, 'Description') . '</td>';
            if (($result['Category'] == 'Arts/Culture')) {
							echo "<td><img src='img/anc.png'/></td>";}
        echo "</tr>";
                    }       
                   
        echo "</table>";

        echo '<div class="pagination"><ul>';
            if ($total_pages > 1) {
        echo paginate($reload, $show_page, $total_pages);
                    }
        echo "</ul></div>";
            ?> 
</div>     
    
</body>
</html>
