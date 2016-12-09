<?php

$ename=$_POST["ename"];
$passwd=$_POST["passwd"];


$dbname="followme";
$dbuser="root";
$dbpass="Sinchana@12e";
$hostname="localhost";

$db=mysql_connect($hostname,$dbuser,$dbpass) or die("mysql_error()");

mysql_select_db($dbname,$db);



$loginquery="Select * from Users where email='$ename'and password='$passwd'";
$res=mysql_query($loginquery);

	if(mysql_num_rows($res)==1)
	{
		$row=mysql_fetch_array($res);

	setcookie("userid",$row['userid'],time()*86400*30); // vey important..please take ttl as 30 days..otherwise doesnt work
	setcookie("username",$row['fname']." ".$row['lname'],time()*86400*30); // hence ttl=86400*30= 30 days
	setcookie("profession",$row['profession'],time()*86400*30);
	mysql_close($db);
	header("Location: http://localhost/FollowMe/dashboard.php");
	exit;
	}

else
{
	header("Location: http://localhost/FollowMe/errorHandler.html");
	exit;
}

?>
