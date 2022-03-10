<?php
session_start();	

require 'conn/dbconnect.php';

if(empty($_SESSION['un']))
{
	header("location:login.php?msg=first Login");
}
else
{
		$id=$_REQUEST['qid'];
		
		$sql1="SELECT * FROM product where P_id='$id'";
		
		$rs1=mysqli_query($conn,$sql1);

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>Product</h1>
_______________________________________________________________________________________________________<br>
<?php while($row1=mysqli_fetch_assoc($rs1))
{	echo $row1['p_img'];
	
	?>
	
	<img src="<?php echo $row1['p_img'];?>" widht="185" height="207"/>	
	
	
	<h3>Product Name:<?php echo $row1['p_name'];?></h3>
	<h3>product description:<?php echo $row1['p_decs'];?></h3>
	
	<?php }?>
<br>
_______________________________________________________________________________________________________
</center>
</body>
</html>