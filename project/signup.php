<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
$con=mysql_connect( "localhost", "root","" );
$db_selected = mysql_select_db("bus", $con);

$username=$_POST['username'];
$pass=$_POST['password'];
/*$password=md5($pass);*/
$confirm_password=$_POST['confirm_password'];
$queryuser=mysql_query("SELECT * FROM user WHERE username='$username' ",$con);
$num_rows=mysql_num_rows($queryuser);
if( $num_rows!= 0)
{ echo "Sorry, ".$username." is already been taken."; }
else {
if($pass != $confirm_password)
{ echo "Password and confirm password fields were not matched"; }
else
{$insert_user=mysql_query("INSERT INTO user  VALUES ('$username', '$pass')");
if($insert_user)
{
	echo "<a href=http://localhost/myworks/project/login.html><b><i><big>LOGIN</big></i></b></a>";
}
else
{ echo "error in registration".mysql_error(); }
}}
 mysql_close($con);
?>
