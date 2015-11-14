<html>
<head>
<title>Save modified data</title>
</head>

<body>
<?php
echo"<b>You Have successfully modified data in Hazelfruit Hotel Database...</b>";
echo" Thank you..!!";
$f=$_POST['rn'];
$g=$_POST['lo'];
$h=$_POST['ty'];
$i=$_POST['fa'];
$j=$_POST['ch'];

$db=mysqli_connect("localhost","root","")or die("Database Server conncetion failed");
mysqli_select_db($db,"hotel") or die ("please contact your system administrator");

$q="update rooms set location='$g', rtype='$h', facility='$i', charge='$j' where roomno='$f'";

//to delete some course = type query as $q="Delete from course where course='$a'";
$r=mysqli_query($db,$q)or die("Error, query failed");

mysqli_close($db);

?>
<meta http-equiv='refresh' content='3;url=adminmenu.html'>
</body>
</html>
