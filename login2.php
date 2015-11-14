<html>
<head>
<title>Login</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/mystyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p align="center"><img  align="middle" src="images/logo.PNG">
<?php
$a=$_POST['un'];
$b=$_POST['pw'];

$db=mysqli_connect("localhost","root","") or die("Database Server conncetion failed");

mysqli_select_db($db,"hotel") or die ("pls contatc your system administrator");

$q="select username from users where username='$a' and password='$b'";

$r=mysqli_query($db,$q)or die("Error, query failed");


if(mysqli_num_rows($r)<1)
{
	$message ="Your username or password was incorrect";
	echo "<script type='text/javascript'>alert('$message');</script>";

} 
else
{
    $message = "Hellow Welcome ".$a;
	echo "<script type='text/javascript'>alert('$message');</script>";
	if ($r["pw"]=="$b")
	{
	echo( $tempName ."<br>" ."You are now logged in. <br>");
    include 'adminmenu.html';
 	
	}
	else 
	{
	include 'index.html'
	}

}
mysqli_close($db);
?>


</body>
</html>
