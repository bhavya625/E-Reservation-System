<html>
<body>

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
$b=$_POST['des'];
//execute the SQL query and return records
$result = mysql_query("SELECT * from routes where source='{$_POST['sou']}'");
//fetch tha data from the database 
echo"<table border=10 height=100 width=200 cellspacing=20 cellpadding=20 align=center>";

while ($row=mysql_fetch_array($result))
{
        echo"<tr>";
	if($b=='hyderabad')
    		echo "<td>".$row['hyderabad']."</td>";
	if($b=='tirupathi')
		echo "<td>".$row['tirupathi']."</td>";
	if($b=='warangal')
		echo "<td>".$row['warangal']."</td>";
	echo "</tr>";
}
echo"<tr>";echo"<img src=TouristBus.jpg height=500 width=1050/>";
echo"</tr>";
echo"</table>";

mysql_close($dbhandle);
?>
<form method="post" action="seatlayout.php">
route: <select name="b1">
<option>--------</option>
<option>hyd-tiru</option>
<option>tiru-hyd</option>
<option>tiru-war</option>
<option>war-tiru</option>
<option>hyd-war</option>
<option>war-hyd</option>
</select>
<input type="submit" value="Submit"/>
</br></br><b><i>select name of the bus shown in the table</i></b>
</form>
</body>
</html>



  