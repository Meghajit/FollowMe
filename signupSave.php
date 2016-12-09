<!DOCTYPE html>
<html>
<head>
<title>FollowMe</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container">

<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>


<div id="MyNavbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="active"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
<li><a href="login.html">SignIn</a></li>
<li><a href="login.html">SignUp</a></li>
</ul>


<ul id="MyNavbar" class="nav navbar-nav navbar-right">
<li><a href="Developers.com"><i class="fa fa-code" aria-hidden="true"></i> Developers</a></li>
<li><a href="HugsBugs"><i class="fa fa-support" aria-hidden="true"></i> Hugs &amp; Bugs</a></li>
<li><a href="Contact.com"><i class="fa fa-envelope-open" aria-hidden="true"></i> Contact</a></li>
</ul>
</div>

</div>
</nav>


<header class="jumbotron">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-5"><br /><br />
<img src="images/TitleIcon.png" height="60px" alt="FollowMe" />
</div>
<div class="col-xs-12 col-sm-7">
<h1>FollowMe</h1>
</div>
</div>
</div>
</header>

<?php

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$bdate=$_POST["bdate"];
$sex=$_POST["sex"];
$profession=$_POST["profession"];
$email=$_POST["email"];
$phno=$_POST["phno"];
$passwd=$_POST["passwd"];

$dbname="followme";
$dbuser="root";
$dbpass="Sinchana@12e";
$hostname="localhost";

$db=mysql_connect($hostname,$dbuser,$dbpass) or die("mysql_error()");

mysql_select_db($dbname,$db);

// generate a user id for the user...it is concatenated fname, phno and email
$userid=$fname.$phno.$email;


$insertquery="Insert into Users values('$userid','$fname','$lname','$bdate','$sex','$profession','$email','$phno','$passwd')";

if(mysql_query($insertquery))
{
	$flag=1;
}
else
{
	$flag=0;
}

mysql_close($db);
?>

<div class="container">

<?php
if($flag==1){

	setcookie("userid",$userid,time()*864000);
setcookie("username",$fname." ".$lname,time()*864000);
setcookie("profession",$profession,time()*864000);

	
	print "<div class='row'>";
print "<div class='col-xs-12 col-sm-6 col-sm-push-3'>";
print "<h3>Congrats $fname.You are signed up with FollowMe...</h3>
</div>
</div>";
print "<div class='row'>";
print "<div class='col-xs-12 col-sm-6 col-sm-push-3'>
<h3>Click <a href='dashboard.php'>here</a> to go to Dashboard.</h3>
</div>
</div>";



}
else
{
print "<div class='row'>";
print "<div class='col-xs-12 col-sm-6 col-sm-push-3'>
<h3>Unfortunately, we couldn't sign you up.<br /><br />Please try after some time...</h3>
</div>
</div>";
}
?>
</div>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'> </script>
<script src='js/bootstrap.min.js'> </script>
</body>
</html>";

