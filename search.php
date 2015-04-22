<!doctype html>
<html>
<head>
<title>Search Results | Better Alamance Volunteers</title>
</head>
<body>
<?php
    mysql_connect("localhost", "megmdesi_admin", "Nozrb302@") or die("Error connecting to database: ".mysql_error());
    mysql_select_db("megmdesi_betteralamancevolunteers") or die(mysql_error());
    $query = $_GET['query']; 
    $min_length = 3;
  if(strlen($query) >= $min_length)
  { 
        $query = htmlspecialchars($query); 
        $query = mysql_real_escape_string($query);  
  echo "<table border='1' align='center' cellpadding='1' cellspacing='1'>";
  echo "<tr><h3>You have searched for $query</h3></tr>";
  echo "<tr align='center' bgcolor='#03acfa' > <td height='35px' width='550px'><b>Organization</b></td> <td><b>Category</b></td> <td><b>Location</b></td></tr>";     
        $result = mysql_query("SELECT * FROM opportunity WHERE (`Organization` LIKE '%".$query."%') OR (`Category` LIKE '%".$query."%') OR (`Location` LIKE '%".$query."%') OR (`Time` LIKE '%".$query."%') OR (`Age Group` LIKE '%".$query."%') OR (`Description` LIKE '%".$query."%')") or die(mysql_error()); 
        if(mysql_num_rows($result) > 0)
  {
            while($results = mysql_fetch_array($result))
   { 
                echo "<tr align='center' bgcolor='#93dafb'><td height='25px'>".$results['Organization']."</td> <td>".$results['Category']."</td> <td>".$results['Location']."</td> <td>".$results['Time']."</td> <td>".$results['Age Group']."</td> <td>".$results['Description']."</td></tr>" ;
            }
           
        }
        else{ 
            echo "<tr align='center' bgcolor='#fdee03'><td colspan='2' height='25px'>Sorry..No results for $query</td><tr>"; 
   echo "</table>";  
        }   
    }
    else{ 
        echo "Your search keyword contains letters only ".$min_length;
    }
?>
</body>
</html>
