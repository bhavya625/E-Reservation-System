<html>
<body bgcolor="PapayaWhip">
<?php

$f=0;
$f_usr= $_POST["userid"];

$f_pswd= $_POST["password"];

$con=mysql_connect("localhost","root","");

if(! $con)

{

        die('Connection Failed'.mysql_error());

}

mysql_select_db("bus",$con);

$result=mysql_query("select * from user");

while($row=mysql_fetch_array($result))

{

    if($row["username"]==$f_usr && $row["password"]==$f_pswd)
	
	$f=1;
	
        
}
if($f==1)
{  
	echo "<b><i><big> WELCOME</big></i></b></br>";
	
	echo "<br> <a href=\"http://localhost/myworks/project/buses.html\"><b><i><big>SEARCH BUSES HERE</big></i></b></a> </br>";
}
if($f==0)
	echo "invalid id";
?>
</body>
</html>
