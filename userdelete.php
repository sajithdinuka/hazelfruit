html>
<head>
<title>Delete</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/mystyle.css" rel="stylesheet" type="text/css" />

</head>

<body>
<p align="center"><img  align="middle" src="images/logo.PNG">
<?php
$n=$_POST['n'];

$db=mysqli_connect("localhost","root","") or die("Database Server conncetion failed");

mysqli_select_db($db,"hotel") or die ("pls contatc your system administrator");

$q="DELETE FROM `users` WHERE `username`='$n'";

$message = "You are succesfully deleted the user :".$n;
echo "<script type='text/javascript'>alert('$message');</script>";

//die ("You are succesfully deleted the reservation on nic  no:".$k);

$r=mysqli_query($db,$q)or die("Error, query failed");
?>
<meta http-equiv='refresh' content='3;url=original.html'>
</body>
</html>
