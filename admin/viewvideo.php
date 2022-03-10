
<?php include 'deshboard.php';?>

<?php

require 'conn/dbconnect.php';

		$sql1="SELECT * FROM video";
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
		<h1>video</h1>
<?php while($row1=mysqli_fetch_assoc($rs1))
{?>
-------------------------------------------------------------------------------------------------------<br>
	<h3>video Id:<?php echo $row1['v_id'];?></h3><br>
	 <h3>video Name:<?php echo $row1['v_nm'];?></h3><br>
	
   <!-- <video width="320" height="240" autoplay>-->
	
    <video width="320" height="240" controls>
	<source src="<?php echo $row1['v_video'];?>" type="video/mp4">
	</video>	
	<h4><a href="Deletevideo.php?v_id=<?php echo $row1['v_id'];?>">Delete</a></h4>
	<h4><a href="Updatevideo.php?v_id=<?php echo $row1['v_id'];?>">Update</a></h4>
	
<?php }?>

-------------------------------------------------------------------------------------------------------
</center>
</body>
</html>
<?php include 'last.php';?>