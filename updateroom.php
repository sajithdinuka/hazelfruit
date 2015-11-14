<html>
<head>
<title>Update Room Details</title>
<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="mystyle.css" rel="stylesheet" type="text/css" />

</head>
<body background="images/body-bg.gif" >
<p align="center"><img src="images/logo.PNG"></p>
<?php
  $a=$_POST['sc'];
  ?>
  <form name="form1" method="post" action="http://localhost/hotel/saveroomdata.php">
<table width="100%%">
<tr>
    <td>Room No: &nbsp;</td>
    <td><input type="text" name="rn"  value="<?php echo $a;?>" >&nbsp;</td>
   
    <?php
  $db=mysqli_connect("localhost","root","")or die("Database Server conncetion failed");
  mysqli_select_db($db,"hotel")or die ("pls contatc your system administrator");
  
  $q="select location, rtype, facility, charge from rooms where roomno='$a'";
  $r=mysqli_query($db,$q)or die("Error, query failed");
  list($x,$y,$z,$v)=mysqli_fetch_array($r);
  
  ?>
  </tr>
  <tr>
    <td>Location: &nbsp;</td>
    <td><input type="text" name="lo" value="<?php echo $x;?>">&nbsp;</td>
  </tr>
  <tr>
    <td>Room Type: &nbsp;</td>
    <td><input type="text" name="ty" value="<?php echo $y;?>">&nbsp;</td>
  </tr>
  <tr>
    <td>Facilities: &nbsp;</td>
    <td><input type="text" name="fa"  size="100%" value="<?php echo $z;?>">&nbsp;</td>
  </tr>
  <tr>
    <td>Charges: &nbsp;</td>
    <td><input type="text" name="ch" value="<?php echo $v;?>">&nbsp;</td>
  </tr>
</table>

    <p align="left">
    &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <input type="submit"  value="Update">  &nbsp; &nbsp; &nbsp;   
    <input type="reset"  value="Cancel">
    </p>
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>