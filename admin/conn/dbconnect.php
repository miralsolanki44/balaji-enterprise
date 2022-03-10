<?php
$servername="localhost";
$username="root";
$password="";
$dbname="balaji";

$conn=mysqli_connect($servername,$username,$password);

if(!$conn)
{
	die("Connection Faild :".mysqli_connect_error());
}


$db=mysqli_select_db($conn,$dbname);

if($db)
{
	
}
else
{
	
}

?>
