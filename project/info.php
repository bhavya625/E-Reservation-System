<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
$con=mysql_connect( "localhost", "root","" );
$db_selected = mysql_select_db("bus", $con);

$FULLNAME=$_POST['fullname'];
$AGE=$_POST['age'];
$MOBILENO=$_POST['number'];

$queryinfo_form=mysql_query("SELECT * FROM info_form WHERE fullname='$FULLNAME' ",$con);

$num_rows=mysql_num_rows($queryinfo_form);
$insert_info_form=mysql_query("INSERT INTO info_form  VALUES ('$FULLNAME', '$AGE','$MOBILENO')");

if($insert_info_form)
{
	echo "<a href=http://localhost/myworks/project/payment.html><b><i><big>PAYMENT</big></i></b></a>";
	echo"<img src=payment.jpg height=300 width=500/>";
}
else
{
echo "error in registration".mysql_error();}
mysql_close($con);
?>