<html>
<head>
<title>New Users</title>
</head>

<body>
<?php
echo"<b>You Have successfully add data to Hazelfruit Hotel Database...</b>";
echo"<br> Thank you..!!";

$a=$_POST['u'];
$b=$_POST['p'];


$db=mysqli_connect("localhost","root","") or die("Database Server conncetion failed");
mysqli_select_db($db,"hotel") or die ("pls contatc your system administrator");

$q="insert into users(username, password) values('$a','$b')";
mysqli_query($db,$q)or die("Error, query failed");

mysqli_close($db);

?>
</body>
</html>