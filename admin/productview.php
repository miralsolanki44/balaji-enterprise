
<?php include 'deshboard.php';?>

<?php

require 'conn/dbconnect.php';

		$sql1="SELECT * FROM product";
		$rs1=mysqli_query($conn,$sql1);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<center>
		<?php 
		if(isset($_REQUEST['msg']))
    		{
        			echo $_REQUEST['msg'];
			}
		?>
		<h1>Product</h1>
<?php while($row1=mysqli_fetch_assoc($rs1))
{?>
-------------------------------------------------------------------------------------------------------<br>
	<h3>Product Id:<?php echo $row1['p_id'];?></h3><br>
	 <h3>Product Name:<?php echo $row1['p_name'];?></h3><br>

	 <img src="<?php echo $row1['p_img'];?>" widht="185" height="207"/>	
	<!-- <a href="video.php?id=<?php echo $row1['p_id'];?>">video</a>-->
	 <!--<h3>Product Price:<?php echo $row1['p_price'];?></h3>-->
	<h4><a href="Deleteproduct.php?p_id=<?php echo $row1['p_id'];?>">Delete</a></h4>
	<h4><a href="Updateproduct.php?p_id=<?php echo $row1['p_id'];?>">Update</a></h4>
	
<?php }?>

-------------------------------------------------------------------------------------------------------
</center>
</body>
</html>
<?php include 'last.php';?>