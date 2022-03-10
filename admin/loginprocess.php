<?php
session_start();
require("conn/dbconnect.php");

$un=$_POST["login"];
$pass=$_POST["password"];


echo $sql="SELECT * FROM `admin` WHERE u_name='".$un."' AND u_pass='".$pass."'";



$rs=mysqli_query($conn,$sql);

if(mysqli_num_rows($rs)>0)
{
	$_SESSION['un']=$un;
	$_SESSION['pass']=$pass;
	header("location:main.php?em=<?php echo $em;?>");	
}
else
{
	
	header("location:index.php?msg=Invalid User Name And Password");
}
?>