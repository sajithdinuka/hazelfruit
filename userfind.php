<html>
<head>
<title>User Find</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/mystyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p align="center"><img  align="middle" src="images/logo.PNG">
<?php
$s=$_POST['un']; 
?>
<form name="form1" method="post" action="http://localhost/hotel/userdelete.php">


		<p align="left">&nbsp;</p>
        <p align="left"><span class="style23">User Name</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label>
          <input name="n" type="text" value="<?php echo $s;?>">
          </label>
<?php


$db=mysqli_connect("localhost","root","") or die("Database Server conncetion failed");

mysqli_select_db($db,"hotel") or die ("pls contatc your system administrator");

$q="select username, password from users where username='$s'";

$r=mysqli_query($db,$q) or die ("Error, query failed");

echo "<br><br>"."There are ".mysqli_num_rows($r)." rows<br>";
echo "<br>";
 while(list($a,$b)=mysqli_fetch_array($r))
 {
 //echo $a." ".$b." "."<br>";
 echo "<table border='1' width='20%'> <tr> <td>  User Name </td> <td> ". $a . "</td> </tr>";

//echo"<br>". $_SESSION['printer']."    "."   "."Item Price Is:"."  ".  $q;
echo "<tr> <td> Password </td> <td> ". $b . "</td> </tr></table>";
 
 }
mysqli_close($db);

?>
<input type="submit"  value="Delete">
          <input type="reset"  value="Cancel">
          </p></form>
</body>
</html>
