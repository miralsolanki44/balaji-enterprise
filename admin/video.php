<?php

include 'conn/dbconnect.php';

$sql="SELECT * FROM `product`  WHERE p_id='".$_REQUEST['id']."'";

$rs=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($rs);

?>
<video width="320" height="240" controls>
  <source src="<?php echo $row[3];?>" type="video/mp4">
 </video>
 
 
