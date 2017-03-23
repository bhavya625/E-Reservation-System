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
$c=$_POST['seat'];
$b=$_POST['bus'];
if(isset($c))
{
	if($b=='hyd-tiru')
	{
		if($c==1)
		{
			$c=1;
			$query="UPDATE status SET status=0 where seatno='1'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==2)
		{
			$c=1;
			$query="UPDATE status SET status=0 where seatno='2'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==3)
		{
			$c=1;
			$query="UPDATE status SET status=0 where seatno='3'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==4)
		{
			$c=1;
			$query="UPDATE status SET status=0 where seatno='4'";
			mysql_query($query) or die("cannotupdate");
		}
		$result="UPDATE seat SET seats=seats+$c where bus='hyd-tiru'";
		mysql_query($result) or die("cannotupdate"); 
	}
	if($b=='tiru-hyd')
	{
		if($c==1)
		{
			$c=1;
			$query="UPDATE status1 SET status1=0 where seatno1='1'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==2)
		{
			$c=1;
			$query="UPDATE status1 SET status1=0 where seatno1='2'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==3)
		{
			$c=1;
			$query="UPDATE status1 SET status1=0 where seatno1='3'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==4)
		{
			$c=1;
			$query="UPDATE status1 SET status1=0 where seatno1='4'";
			mysql_query($query) or die("cannotupdate");
		}
		$result="UPDATE seat SET seats=seats+$c where bus='tiru-hyd'";
		mysql_query($result) or die("cannotupdate"); 
	}
	if($b=='tiru-war')
	{
		if($c==1)
		{
			$c=1;
			$query="UPDATE status2 SET status2=0 where seatno2='1'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==2)
		{
			$c=1;
			$query="UPDATE status2 SET status2=0 where seatno2='2'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==3)
		{
			$c=1;
			$query="UPDATE status2 SET status2=0 where seatno2='3'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==4)
		{
			$c=1;
			$query="UPDATE status2 SET status2=0 where seatno2='4'";
			mysql_query($query) or die("cannotupdate");
		}
		$result="UPDATE seat SET seats=seats+$c where bus='tiru-war'";
		mysql_query($result) or die("cannotupdate"); 
	}
	if($b=='war-tiru')
	{
		if($c==1)
		{
			$c=1;
			$query="UPDATE status3 SET status3=0 where seatno3='1'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==2)
		{
			$c=1;
			$query="UPDATE status3 SET status3=0 where seatno3='2'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==3)
		{
			$c=1;
			$query="UPDATE status3 SET status3=0 where seatno3='3'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==4)
		{
			$c=1;
			$query="UPDATE status3 SET status3=0 where seatno3='4'";
			mysql_query($query) or die("cannotupdate");
		}
		$result="UPDATE seat SET seats=seats+$c where bus='war-tiru'";
		mysql_query($result) or die("cannotupdate"); 
	}
	if($b=='hyd-war')
	{
		if($c==1)
		{
			$c=1;
			$query="UPDATE status4 SET status4=0 where seatno4='1'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==2)
		{
			$c=1;
			$query="UPDATE status4 SET status4=0 where seatno4='2'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==3)
		{
			$c=1;
			$query="UPDATE status4 SET status4=0 where seatno4='3'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==4)
		{
			$c=1;
			$query="UPDATE status4 SET status4=0 where seatno4='4'";
			mysql_query($query) or die("cannotupdate");
		}
		$result="UPDATE seat SET seats=seats+$c where bus='hyd-war'";
		mysql_query($result) or die("cannotupdate"); 
	}
	if($b=='war-hyd')
	{
		if($c==1)
		{
			$c=1;
			$query="UPDATE status5 SET status5=0 where seatno5='1'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==2)
		{
			$c=1;
			$query="UPDATE status5 SET status5=0 where seatno5='2'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==3)
		{
			$c=1;
			$query="UPDATE status5 SET status5=0 where seatno5='3'";
			mysql_query($query) or die("cannotupdate");
		}
		if($c==4)
		{
			$c=1;
			$query="UPDATE status5 SET status5=0 where seatno5='4'";
			mysql_query($query) or die("cannotupdate");
		}
		$result="UPDATE seat SET seats=seats+$c where bus='war-tiru'";
		mysql_query($result) or die("cannotupdate"); 
	}
}
echo"</br></br></br>";echo"<img src=cancelled.gif height=500 width=1050/>"; 
mysql_close($dbhandle);
?>