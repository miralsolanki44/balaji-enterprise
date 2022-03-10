<?php 
require 'conn/dbconnect.php';

if(isset($_SESSION['un']))
{
   header("location:main.php");
}
else{

$u_id=$_REQUEST['u_id'];

	$sql="DELETE FROM `user_table` where u_id=".$u_id;
	$rs=mysqli_query($conn,$sql);
	
	
	if($rs){
	
			header("location:view_user.php?msg=delete success");
			//echo "ok";
	}
	else
	{
				header("location:view_user.php?msg=error");
				//echo "error";
	
	}


}



?>