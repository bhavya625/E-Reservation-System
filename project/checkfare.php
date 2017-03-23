<html>
<body bgcolor="#FAF0E6">
<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
 
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("bus",$dbhandle) 
  or die("Could not select examples");

//execute the SQL query and return records
$result = mysql_query("SELECT * from buses");

//fetch tha data from the database 
echo"<table border=15 align=center cellpadding=20 cellspacing=10>";
echo"<tr>";
echo"<th><b><i><big>SOURCE</big></i></b></th>
<th><b><i><big>DESTINATION</big></i></b></th>
<th><b><i><big>BUS ROUTE</big></i></b></th>
<th><b><i><big>FARE</big></i></b></th>";
echo"</tr>";

while ($row=mysql_fetch_array($result))

{

        echo"<tr>";
        echo "<td>".$row['source']."</td>"."<td>".$row['destination']."</td>"."<td>".$row['busroute']."</td>"."<td>".$row['fare']."</td>";
        echo "</tr>";

}

echo"</table>";




mysql_close($dbhandle);
?>

</body>
</html>

  