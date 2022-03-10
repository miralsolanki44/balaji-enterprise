<?php

require("conn/dbconnect.php");
session_start();

$un=$_POST["login"];
$pass=$_POST["password"];
$sql="SELECT * FROM user_table WHERE u_email='".$un."' AND u_pass='".$pass."' ";

$rs=mysqli_query($conn,$sql);

if(mysqli_num_rows($rs)>0)
{
	$_SESSION['un']=$un;
	$_SESSION['pass']=$pass;
	header("location:index.php?em=<?php echo $em;?>");
	
}
else
{
		
	header("location:login.php?msg=Invalid User Name And Password");
}
?>