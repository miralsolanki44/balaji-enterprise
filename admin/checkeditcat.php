<?php 
require 'conn/dbconnect.php';
session_start();
if(empty($_SESSION['un']))
{
	header("location:index.php?msg=logn first");
}

$c_id=$_REQUEST['c_id'];
$c_name=$_POST['txt_cat_nm'];

$qry1="SELECT * FROM category WHERE c_name='".$c_name."'";

$rs1=mysqli_query($conn,$qry1);

if(mysqli_num_rows($rs1)>0)
{
	header("location:viewcategory.php?msg=Category is exists");
}
else{


echo $sql="UPDATE category SET `c_name` = '".$c_name."' WHERE c_id = '".$c_id."' ";

$rs = mysqli_query($conn,$sql);
	if($rs)
	{
	
		header("location:viewcategory.php?msg=category UPDATE Successfully");
		
	}
	else{

   	header("location:viewcategory.php?msg=Category update fail");;
		
	}
}
?>
