<html>
<head>
<title>Add Rooms</title>
</head>

<body>
<?php
echo"<b>You Have successfully add details to Hazelfruit Hotel Database...</b>";
echo" Thank you..!!";
$a=$_POST['n'];
$b=$_POST['l'];
$c=$_POST['t'];
$d=$_POST['f'];
$e=$_POST['c'];

$db=mysqli_connect("localhost","root","") or die("Database Server conncetion failed");
mysqli_select_db($db,"hotel") or die ("pls contatc your system administrator");

$q="insert into rooms(roomno, location, rtype, facility, charge) values('$a','$b','$c','$d','$e')";
mysqli_query($db,$q)or die("Error, query failed");
mysqli_close($db);
?>
<meta http-equiv='refresh' content='3;url=adminmenu.html'>
</body>

</html>
