<?php
 $q=$_GET['q'];
 $my_data=mysql_real_escape_string($q);
 $mysqli=mysqli_connect('localhost','web2-vatable2012','vatab13pa55','web2-vatable2012','autofield') or die("Database Error");
 $sql="SELECT prodid FROM vatable WHERE prodid LIKE '%$my_data%' ORDER BY prodid";
 $result = mysqli_query($mysqli,$sql) or die(mysqli_error());

 if($result)
 {
  while($row=mysqli_fetch_array($result))
  {
   echo $row['prodid']."\n";
  }
 }
?>