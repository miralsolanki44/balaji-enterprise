<?php 
require 'conn/dbconnect.php';
session_start();
if(empty($_SESSION['un']))
{
   header("location:main.php");
}
else{

$f_id=$_REQUEST['f_id'];

	$sql="DELETE FROM `feedback` where f_id=".$f_id;
	$rs=mysqli_query($conn,$sql);
	
	
	if($rs){
	
			header("location:view_f.php?msg=delete success");
			//echo "ok";
	}
	else
	{
				header("location:view_f.php?msg=error");
				//echo "error";
	
	}


}



?>