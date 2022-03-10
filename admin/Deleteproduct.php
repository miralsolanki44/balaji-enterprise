<?php
require 'conn/dbconnect.php';

session_start();
if(empty($_SESSION['un']))
{
	header("location:index.php?msg=logn first");
}

$p_id=$_REQUEST['p_id'];

$sql1="SELECT * FROM product";
$rs1=mysqli_query($conn,$sql1);

echo $sqli="SELECT * FROM product where p_id=$p_id";

$rsi=mysqli_query($conn,$sqli);



if(mysqli_num_rows($rs1)>0)
{	
	$sql="delete from product where p_id='$p_id'";
	
	$rs=mysqli_query($conn,$sql);
	while($rowi=mysqli_fetch_assoc($rsi))
	{
		
		unlink($rowi['p_img']);	
		
				
	}
	
	
	if($rs){

		header("location:productview.php?msg=product Delete Successfully");
		
	}	
	else
	{
		header("location:productview.php?msg=product Not Deleted");
	}
}
else
{
	header("location:productview.php?msg=prduct is empty");
	

}
?>