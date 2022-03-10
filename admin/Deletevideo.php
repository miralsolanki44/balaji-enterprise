<?php
require 'conn/dbconnect.php';

session_start();
if(empty($_SESSION['un']))
{
	header("location:index.php?msg=logn first");
}

$p_id=$_REQUEST['v_id'];

$sql1="SELECT * FROM video";
$rs1=mysqli_query($conn,$sql1);

echo $sqli="SELECT * FROM video where v_id=$v_id";

$rsi=mysqli_query($conn,$sqli);



if(mysqli_num_rows($rs1)>0)
{	
	$sql="delete from video where v_id='$p_id'";
	
	$rs=mysqli_query($conn,$sql);
	while($rowi=mysqli_fetch_assoc($rsi))
	{
		
		unlink($rowi['v_video']);	
		
				
	}
	
	
	if($rs){

		header("location:viewvideo.php?msg=product Delete Successfully");
		
	}	
	else
	{
		header("location:viewvideo.php?msg=product Not Deleted");
	}
}
else
{
	header("location:viewvideo.php?msg=prduct is empty");
	

}
?>