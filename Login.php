<html>
<head>
<title>Login</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/mystyle.css" rel="stylesheet" type="text/css" />
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<div align="center" style="overflow: hidden; padding: 0px; width: 309px; height: 110px;">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="309" height="154" align="absbottom" id="FlashID" title="HazelFruit Hotel">
    <param name="movie" value="images/flashvortex.swf">
    <param name="quality" value="high">
    <param name="wmode" value="opaque">
    <param name="swfversion" value="8.0.35.0">
    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
    <param name="expressinstall" value="Scripts/expressInstall.swf">
    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
    <!--[if !IE]>-->
    <object data="images/flashvortex.swf" type="application/x-shockwave-flash" width="309" height="154" align="bottom">
      <!--<![endif]-->
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="swfversion" value="8.0.35.0">
      <param name="expressinstall" value="Scripts/expressInstall.swf">
    </object>
    <!--<![endif]-->
  </object>
</div>
<p align="center">
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
	
	if($_POST['un']==$a)
	{
    echo"<html><meta http-equiv='refresh' content='2;url=adminmenu.html'></html>";
	}
	else 
	{
	 echo"<html><meta http-equiv='refresh' content='2;url=employee.html'></html>";
	}
}
mysqli_close($db);
?>


<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>
