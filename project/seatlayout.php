<html>
<body bgcolor="lavender">
<form method="post" action="seats.php">
<table border="0" align="center">
<tr><td>
ROUTE: <select type="text" name="bus">
<option>--------</option>
<option>hyd-tiru</option>
<option>tiru-hyd</option>
<option>tiru-war</option>
<option>war-tiru</option>
<option>hyd-war</option>
<option>war-hyd</option>
</select>
</td></tr></table>
</br></br>
<table style="text-align:center;" border="5" align="center" cellpadding="10" cellspacing="10">
<tr style="text-align:center;">
<td>1<input type="checkbox" name="s1" value="1"/></td>
<td>3<input type="checkbox" name="s3" value="1"/></td>
</tr>
<tr></tr><tr></tr>
<tr style="text-align:center;">
<td>2<input type="checkbox" name="s2" value="1"/></td>
<td>4<input type="checkbox" name="s4" value="1"/></td>
</tr>
</table>
<table border="0" align="center"> <tr><td>
<input type="submit" value="Submit"/>
<input type="reset" value="Reset"/> </td></tr></table>
</form>
</body>
</html>
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
$n=$_POST['b1'];
echo"<table border=1 align=center>";
if($n=='hyd-tiru')
{
$result=mysql_query("SELECT seatno from status where status=1");
while($row=mysql_fetch_array($result))
{
echo"<tr>";	
echo"<td>".$row['seatno']."</td>";
echo"</tr>";	
}
}
if($n=='tiru-hyd')
{
$result=mysql_query("SELECT seatno1 from status1 where status1=1");
while($row=mysql_fetch_array($result))
{
echo"<tr>";	
echo"<td>".$row['seatno1']."</td>";
echo"</tr>";	
}
}
if($n=='tiru-war')
{
$result=mysql_query("SELECT seatno2 from status2 where status2=1");
while($row=mysql_fetch_array($result))
{
echo"<tr>";	
echo"<td>".$row['seatno2']."</td>";
echo"</tr>";	
}
}
if($n=='war-tiru')
{
$result=mysql_query("SELECT seatno3 from status3 where status3=1");
while($row=mysql_fetch_array($result))
{
echo"<tr>";	
echo"<td>".$row['seatno3']."</td>";
echo"</tr>";	
}
}
if($n=='hyd-war')
{
$result=mysql_query("SELECT seatno4 from status4 where status4=1");
while($row=mysql_fetch_array($result))
{
echo"<tr>";	
echo"<td>".$row['seatno4']."</td>";
echo"</tr>";	
}
}
if($n=='war-hyd')
{
$result=mysql_query("SELECT seatno5 from status5 where status5=1");
while($row=mysql_fetch_array($result))
{
echo"<tr>";	
echo"<td>".$row['seatno5']."</td>";
echo"</tr>";	
}
}
echo"</table>";
echo"<table border=0 align=center>";
echo"<tr><td>";
echo" is/are booked";
echo"</td></tr></table>";
mysql_close($dbhandle);

?>