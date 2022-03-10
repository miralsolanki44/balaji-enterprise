<?php 
require 'conn/dbconnect.php';

$nm=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobileno'];
$msg=$_POST['message'];
$date=date("Y-m-d H:i:s");



 $qry="INSERT INTO `feedback` (`f_id`, `f_nm`, `f_email`, `f_contact`, `f_message`, `f_date`) VALUES(null,'".$nm."','".$email."','".$mobile."','".$msg."','".$date."')";

$resultSet=mysqli_query($conn,$qry);
if($resultSet)
{
	header("location:contact.php?msg=Sucessfully Submited");
	
	//echo "feedback inserted sucessfully";
}
else
{
	echo "error";
}
?>
