<?php 
require 'conn/dbconnect.php';
session_start();
if(empty($_SESSION['un']))
{
	header("location:index.php?msg=logn first");
}

$pronm=$_POST["txt_pro_nm"];
//$prodec=$_POST["txt_pro_dec"];


$qry1="SELECT * FROM `video` WHERE v_nm=$pronm";

$rs1=mysqli_query($conn,$qry1);

//$row11=mysqli_fetch_array($rs1);

if($rs1)
{
    header("location:addvideo.php?msg=video Already Exits");
}
else
{

$target_dir = "video/";
$target_file = $target_dir . basename($_FILES["pro_image"]["name"]);
				
    			
				move_uploaded_file($_FILES["pro_image"]["tmp_name"], $target_file);
				
				$qry = "INSERT INTO `video` (`v_id`, `v_nm`, `v_video`) VALUES (NULL,'".$pronm."','".$target_file."')";
				
				$rs = mysqli_query($conn,$qry);
				if($rs)
				{
					echo "<br>Product Add Successfully";
    				header("location:addvideo.php?msg=video Sucessfully Added");
				}
				else{

					echo "<br>product not added";
    				header("location:addvideo.php?msg=video Sucessfully Not Added");
				}
			

		

}


?>