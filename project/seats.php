<html>
<body bgcolor="#FFE4E1">
<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
$con=mysql_connect( "localhost", "root","" );
$db_selected = mysql_select_db("bus", $con);
$b=$_POST['bus'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$s4=$_POST['s4'];
$p=0;
$p=$p+$s1+$s2+$s3+$s4;

if(isset($p))
{
	if($b=='hyd-tiru')
	{
		
		$query="UPDATE seat SET seats=seats-$p where bus='hyd-tiru'";	
		mysql_query($query) or die("cannot update");
		$c=250;
		$seat=$p;	
		$cost=$c*$p;
		echo"seat(s)=$seat";
		echo"</br></br>";
		echo"cost=$cost";
		if(isset($s1))
		{
			$query="UPDATE status SET status=1 where seatno='1'";
			mysql_query($query) or die("cannot update");
		}
		if(isset($s2))
		{
			$query="UPDATE status SET status=1 where seatno='2'";
			mysql_query($query) or die("cannot update");
		}	
		if(isset($s3))
		{
			$query="UPDATE status SET status=1 where seatno='3'";
			mysql_query($query) or die("cannot update");
		}
		if(isset($s4))
		{
			$query="UPDATE status SET status=1 where seatno='4'";
			mysql_query($query) or die("cannot update");
		}
	}
	if($b=='tiru-hyd')
	{
		$query="UPDATE seat SET seats=seats-$p where bus='tiru-hyd'";
		mysql_query($query) or die("cannot update");
		$c=250;
		$seat=$p;
		$cost=$c*$p;	
		echo"seat(s)=$seat";
		echo"</br></br>";
		echo"cost=$cost";
		if(isset($s1))
		{
			$query="UPDATE status1 SET status1=1 where seatno1='1'";
			mysql_query($query) or die("cannot update");
		}
		if(isset($s2))
		{
			$query="UPDATE status1 SET status1=1 where seatno1='2'";
			mysql_query($query) or die("cannot update");
		}	
		if(isset($s3))
		{
			$query="UPDATE status1 SET status1=1 where seatno1='3'";
			mysql_query($query) or die("cannot update");
		}
		if(isset($s4))
		{
			$query="UPDATE status1 SET status1=1 where seatno1='4'";
			mysql_query($query) or die("cannot update");
		}
	}
	if($b=='tiru-war')
	{
		$query="UPDATE seat SET seats=seats-$p where bus='tiru-war'";
		mysql_query($query) or die("cannot update");
		$c=300;
		$seat=$p;
		$cost=$c*$p;
		echo"seat(s)=$seat";
		echo"</br></br>";
		echo"cost=$cost";
		if(isset($s1))
		{
			$query="UPDATE status2 SET status2=1 where seatno2='1'";
			mysql_query($query) or die("cannot update");
		}
		if(isset($s2))
		{
			$query="UPDATE status2 SET status2=1 where seatno2='2'";
			mysql_query($query) or die("cannot update");
		}	
		if(isset($s3))
		{
			$query="UPDATE status2 SET status2=1 where seatno2='3'";
			mysql_query($query) or die("cannot update");
		}
		if(isset($s4))
		{
			$query="UPDATE status2 SET status2=1 where seatno2='4'";
			mysql_query($query) or die("cannot update");
		}
	}
	if($b=='war-tiru')
	{
		$query="UPDATE seat SET seats=seats-$p where bus='war-tiru'";
		mysql_query($query) or die("cannot update");
		$c=300;
		$seat=$p;
		$cost=$c*$p;
		echo"seat(s)=$seat";
		echo"</br></br>";
		echo"cost=$cost";
		if(isset($s1))
		{
			$query="UPDATE status3 SET status3=1 where seatno3='1'";
			mysql_query($query) or die("cannot update");
		}
		if(isset($s2))
		{
			$query="UPDATE status3 SET status3=1 where seatno3='2'";
			mysql_query($query) or die("cannot update");
		}	
		if(isset($s3))
		{
			$query="UPDATE status3 SET status3=1 where seatno3='3'";
			mysql_query($query) or die("cannot update");
		}
		if(isset($s4))
		{
			$query="UPDATE status3 SET status3=1 where seatno3='4'";
			mysql_query($query) or die("cannot update");
		}
	}
	if($b=='hyd-war')
	{
		$query="UPDATE seat SET seats=seats-$p where bus='hyd-war'";
		mysql_query($query) or die("cannot update");
		$c=200;
		$seat=$p;
		$cost=$c*$p;
		echo"seat(s)=$seat";
		echo"</br></br>";
		echo"cost=$cost";
		if(isset($s1))
		{
			$query="UPDATE status4 SET status4=1 where seatno4='1'";
			mysql_query($query) or die("cannot update");
		}
		if(isset($s2))
		{
			$query="UPDATE status4 SET status4=1 where seatno4='2'";
			mysql_query($query) or die("cannot update");
		}	
		if(isset($s3))
		{
			$query="UPDATE status4 SET status4=1 where seatno4='3'";
			mysql_query($query) or die("cannot update");
		}
		if(isset($s4))
		{
			$query="UPDATE status4 SET status4=1 where seatno4='4'";
			mysql_query($query) or die("cannot update");
		}
	}
	if($b=='war-hyd')
	{
		$query="UPDATE seat SET seats=seats-$p where bus='war-hyd'";
		mysql_query($query) or die("cannot update");
		$c=200;
		$seat=$p;
		$cost=$c*$p;
		echo"seat(s)=$seat";
		echo"</br></br>";
		echo"cost=$cost";
		if(isset($s1))
		{
			$query="UPDATE status5 SET status5=1 where seatno5='1'";
			mysql_query($query) or die("cannot update");
		}
		if(isset($s2))
		{
			$query="UPDATE status5 SET status5=1 where seatno5='2'";
			mysql_query($query) or die("cannot update");
		}	
		if(isset($s3))
		{
			$query="UPDATE status5 SET status5=1 where seatno5='3'";
			mysql_query($query) or die("cannot update");
		}
		if(isset($s4))
		{
			$query="UPDATE status5 SET status5=1 where seatno5='4'";
			mysql_query($query) or die("cannot update");
		}
	}
	echo"</br></br>";
	echo "<a href=http://localhost/myworks/project/info_form.html><b><i>RESERVATION FORM</i></b></a>";
}
?>
</body>
</html>