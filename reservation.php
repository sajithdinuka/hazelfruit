<html>
<head>
<title>Room Reservation php</title></head>
<body>
<?php
echo"<b>Your reservation is uccessfully added to Hazelfruit Hotel.</b>";
echo" <br>Thank you..!!";
$a=$_POST['ad'];
$b=$_POST['dd'];
$c=$_POST['p'];
$d=$_POST['r'];
$e=$_POST['t'];
$f=$_POST['e'];
$g=$_POST['con'];
$h=$_POST['n'];

$db=mysqli_connect("localhost","root","") or die("Database Server conncetion failed");
mysqli_select_db($db,"hotel") or die ("pls contatc your system administrator");
$q="insert into reservation(arrival, depature, person, rooms, type, email, contact, nic) values('$a','$b','$c','$d','$e','$f','$g','$h')";
mysqli_query($db,$q)or die("Error, query failed");
mysqli_close($db);
?>
<meta http-equiv='refresh' content='3;url=original.html'>
</body></html>
