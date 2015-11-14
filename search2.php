<html >
<head>
<title>Search 2</title>
<link href="../layout.css" rel="stylesheet" type="text/css" />
<link href="../mystyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p align="center"><img src="../images/logo.PNG"></p>

  <?php
  $k=$_POST['sc'];
  ?>
  
<form name="form1" method="post" action="http://localhost/hotel/delete.php">

		<p align="left">&nbsp;</p>
        <p align="left"><span class="style23">NIC:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label>
          <input name="n" type="text" value="<?php echo $k;?>">
          </label>
          
  <?php
  $db=mysqli_connect("localhost","root","")or die("Database Server conncetion failed");
  mysqli_select_db($db,"hotel")or die ("pls contatc your system administrator");
  
  $q="select arrival, depature, person, rooms, type, email, contact from reservation where nic='$k'";
  $r=mysqli_query($db,$q)or die("Error, query failed");
  list($t,$u,$v,$x,$y,$z,$w)=mysqli_fetch_array($r);  
  ?>
  
   </p>  
  </span></p>
  <p><span class="style23">Arrival Date</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label>
          <input name="ad" type="text" value="<?php echo $t;?>">
          </label>
  </p>
  
  <p align="left">&nbsp;</p>
        <p align="left"><span class="style23">Depature Date</span>
          <label>
      <input name="dd" type="text"  value="<?php echo $u;?>">
      </label>
      </p>
      
      <p align="left">&nbsp;</p>
        <p align="left"><span class="style23">Person</span>
          <input type="text" name="p" value="<?php echo $v;?>"  style="width: 30px;" />
          <span class="style22">&nbsp;&nbsp;&nbsp;&nbsp;
          <span class="style16">Rooms</span></span>
          <input name="r" type="text" value="<?php echo $x;?>" style="width: 30px;" />
      </p>
      
        <p align="left">&nbsp;</p>
        <p align="left"><span class="style23">Room Type</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label>
          <input name="rr" type="text"  value="<?php echo $y;?>">
          </label>
</p>

        <p align="left">&nbsp;</p>
        <p align="left" class="style23">Email<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="e" value="<?php echo $z;?>" >
            </label>
        </p>
        
        <p align="left">&nbsp;</p>
  <p align="left"><span class="style23">Contact No:</span>&nbsp;&nbsp;&nbsp;&nbsp; 
          <label>
          <input type="text" name="con" value="<?php echo $w;?>" >
          </label>
  </p>
      
        
        <p align="left">&nbsp;</p>
<p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
          <input type="submit"  value="Delete">
          <input type="reset"  value="Cancel">
  </p>

</form>
</body>
</html>
