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
<form action="search.php" method="get" >
Please search here:
    <input type="text" name="query" id="text"  />
 <input type="submit" name="submit" id="search" value="Search" />
</form>  
</div>    
<div class="db">   
    <?php
        $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
                   
        echo "<table class='table table-bordered'>";
        
                   
        for ($i = $start; $i < $end; $i++) {
                       
        if ($i == $total_results) {
                            break;
                        }
                      
        echo "<tr " . $cls . ">";
        
        if (mysql_result($result, $i, 'Category') == 'Arts/Culture') {
							echo "<td class='icons'><img src='img/anc.png'/></td>";};
        if (mysql_result($result, $i, 'Category') == 'Seniors') {
							echo "<td class='icons'><img src='img/senior.png'/></td>";};  
        if (mysql_result($result, $i, 'Category') == 'Youth') {
							echo "<td class='icons'><img src='img/youth.png'/></td>";}; 
        if (mysql_result($result, $i, 'Category') == 'Animals') {
							echo "<td class='icons'><img src='img/pet.png'/></td>";}; 
        if (mysql_result($result, $i, 'Category') == 'Community') {
							echo "<td class='icons'><img src='img/comm.png'/></td>";}; 
         if (mysql_result($result, $i, 'Category') == 'Crisis Support') {
							echo "<td class='icons'><img src='img/cs.png'/></td>";};
         if (mysql_result($result, $i, 'Category') == 'Environment') {
							echo "<td class='icons'><img src='img/leaf.png'/></td>";};
         if (mysql_result($result, $i, 'Category') == 'Faith Based') {
							echo "<td class='icons'><img src='img/pray.png'/></td>";};
         if (mysql_result($result, $i, 'Category') == 'People with Disabilities') {
							echo "<td class='icons'><img src='img/chair.png'/></td>";}; 
        echo '<td>' . mysql_result($result, $i, 'Organization') . '</td>';    
        echo '<td>' . mysql_result($result, $i, 'Location') . '</td>';
        echo '<td>' . mysql_result($result, $i, 'Time') . '</td>';
        echo '<td>' . mysql_result($result, $i, 'Age Group') . '</td>';    
        echo '<td>' . mysql_result($result, $i, 'Description') . '</td>';
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
