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
<li class="active"><a href="http://localhost/FollowMe/index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
<li><a href="http://localhost/FollowMe/login.html">SignIn</a></li>
<li><a href="http://localhost/FollowMe/signup.html">SignUp</a></li>
</ul>


<ul id="MyNavbar" class="nav navbar-nav navbar-right">
<li><a href="Developers.com"><i class="fa fa-code" aria-hidden="true"></i> Developers</a></li>
<li><a href="HugsBugs"><i class="fa fa-support" aria-hidden="true"></i> Hugs &amp; Bugs</a></li>
<li><a href="Contact.com"><i class="fa fa-envelope-open" aria-hidden="true"></i> Contact</a></li>
</ul>
</div>

</div>
</nav>

<?php

print "<header class='jumbotron'>
<div class='container'>
<div class='row'>";
print "<div col-xs-12 col-sm-8>";
if(isset($_COOKIE["username"]) &&
 isset($_COOKIE["profession"]))
{

	$username=$_COOKIE["username"];
	$profession=$_COOKIE["profession"];
	print "<h1>$username</h1><br/>";
	print "<h3>$profession</h3>";


}




print "</div>
</div>
</header>";


print "<div class='container'>
<div class='row'>";
print "<div class='col-xs-12 col-sm-6 col-sm-push-3'>
<h3>Here are the tasks available for you</h3><br/><br/>";
print "</div></div>";

print "<div class='list-group'>
  <a id='link1' href='http://localhost/FollowMe/createArticle.php' class='list-group-item active' >
    <h4 class='list-group-item-heading'>Create</h4>
    <p class='list-group-item-text'>Create an article and save it online</p>
  </a><br/>
  <a id='link2' href='View' class='list-group-item active'>
    <h4 class='list-group-item-heading'>View</h4>
    <p class='list-group-item-text'>View all your articles</p>
  </a><br />
  <a id='link3' href='updateaccount.html' class='list-group-item active'>
    <h4 class='list-group-item-heading'>Update</h4>
    <p class='list-group-item-text'>Update your account related information</p>
  </a><br />
  <a id='link4' href='searchaccount.html' class='list-group-item active'>
    <h4 class='list-group-item-heading'>Search People</h4>
    <p class='list-group-item-text'>Search for your friends on FollowMe</p>
  </a><br />


</div>";


?>




<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'> </script>
<script src='js/bootstrap.min.js'> </script>
</body>
</html>