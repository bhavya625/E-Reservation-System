<html>
<body bgcolor="RosyBrown">
<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
$con=mysql_connect( "localhost", "root","" );
$db_selected = mysql_select_db("bus", $con);
$CARDNO=$_POST['cardno'];
$EXPIRYDATE=$_POST['date'];
$CARD_SECURITY_CODE=$_POST['number'];
$NAME=$_POST['name'];
$BILLING_ADDRESS=$_POST['address'];
$querypayment=mysql_query("SELECT * FROM payment WHERE cardno='$CARDNO' ",$con);
$num_rows=mysql_num_rows($querypayment);
$insert_payment=mysql_query("INSERT INTO payment VALUES ('$CARDNO','$EXPIRYDATE','$CARD_SECURITY_CODE','$NAME','$BILLING_ADDRESS')");
if($insert_payment)
{
	echo "<B><I><big>YOUR RESERVARTION IS SUCCESSFULL</big></I></B>";
	echo"</br></br></br>";echo"<img src=thank-you-01.jpg height=600 width=1050/>";
}
else
{
echo "error in registration".mysql_error();}
mysql_close($con);
?>
</body>
</html>