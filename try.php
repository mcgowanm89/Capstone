<?php

$mysqlserver="localhost";
$mysqlusername="megmdesi_admin";
$mysqlpassword="Nozrb302@";
$link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

$dbname = 'megmdesi_betteralamancevolunteers';    // change this to the name of your database
mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

$opquery="SELECT * FROM opportunity";
$opresult=mysql_query($opquery) or die ("Query to get data from firsttable failed: ".mysql_error());

echo "<table>";
echo "<tr>";
echo "<th>Reference</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Price</th>
            <th>Label</th>";
echo "</tr>";
while ($oprow=mysql_fetch_array($opresult)) {
	$org=$oprow["Organization"];
	$cat=$oprow["Category"];
	$loc=$oprow["Location"];
	$time=$oprow["Time"];
	$des=$oprow["Description"];
    $age=$oprow["Age Group"];
	echo "<tr>";
	echo "<td>$org</td>
	<td>$cat</td>
	<td>$loc</td>
	<td>$time</td>
	<td>$age</td>
    <td>$des</td>";
	echo "</tr>";
}
echo "</table>";

?>