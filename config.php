<?php
 
$mysql_hostname = "localhost"; 
$mysql_user = "megmdesi_admin";            
$mysql_password = "Nozrb302@";           
$mysql_database = "megmdesi_betteralamancevolunteers"; 
 
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Error on database connection");

?>