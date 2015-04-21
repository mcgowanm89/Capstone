<?php
ob_start();
require("config.php");
ob_end_clean();

$req=$_REQUEST['Age Group'];
$req2=$_REQUEST['Category'];

mysql_connect("localhost",$username,$password);
mysql_select_db($database) or die( "Unable to select database");

if ($req!="all" && $req2!="all")  $query="SELECT * FROM opportunity WHERE make='$req' AND availability='$req2'";
else if($req=="all" && $req2!="all" ) $query="SELECT * FROM opportunity WHERE availability='$req2'";
else if($req!="all" && $req2=="all" ) $query="SELECT * FROM opportunity WHERE make='$req'";
else if($req=="all" || $req2=="all" ) $query="SELECT * FROM opportunity";

$result=mysql_query($query);
$num=mysql_numrows($result);

mysql_query($result);
mysql_close();

echo "<table border='1'><tr>";

$i=0;

for ($i; $i < $num; $i++){
	$f12=mysql_result($result,$i,"Organization");
	$f13=mysql_result($result,$i,"Category");
	$f14=mysql_result($result,$i,"Location");
    $f15=mysql_result($result,$i,"Time");
    $f16=mysql_result($result,$i,"Age Group");
    $f17=mysql_result($result,$i,"Description");
	
echo $f12." ".$f13." ".$f14." ".$f15." ".$f16." ".$f17."<br />";
}
?>